<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Setting;
use App\Models\Simulation;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function Dashboard()
    {
        $simulations = Simulation::with('category.parent')->get()->countBy(function ($simulation) {
            return $simulation->category->parent->name;
        })->all();
        return view('admin.dashboard', compact('simulations'));
    }

    public function Simulations()
    {
        $simulation_groups = Simulation::with('category.parent')->get()->groupBy('category.parent.name');
        return view('admin.simulations', compact('simulation_groups'));
    }

    public function Team()
    {
        $admins = User::admins()->get();
        return view('admin.team', compact('admins'));
    }

    public function StoreTeam(Request $request)
    {
        $data = $request->validate([
            'name' => 'required', 'email' => 'required', 'position' => 'required',
            'facebook' => 'sometimes', 'linkedin' => 'sometimes', 'instagram' => 'sometimes',
            'image' => 'sometimes|image',
        ]);
        if ($request->hasFile('image')) {
            $name = $data['name'];
            $name = "$name.jpg";
            $path = $request->file('image')->storeAs('profile_img', $name, 'public');
            $image = Image::make(public_path("storage/{$path}"))->fit(500);
            $image->save();

            $data['profile_img'] = Storage::url($path);
        }
        $admin = User::forceCreate([
            'name' => $data['name'],
            'email' => $data['email'],
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'remember_token' => Str::random(10),
            'position' => $data['position'],
            'profile_img' => $data['profile_img'],
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'linkedin' => $data['linkedin']
        ]);

        $admin_role = Role::query()->where('slug', 'admin')->first();
        $admin->roles()->attach($admin_role);

        return redirect()->route('admin.team')
            ->with('status', 'success')->with('message', 'Team Member Created Successfully');
    }


    public function UpdateTeam(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required', 'email' => 'required', 'position' => 'required',
            'facebook' => 'sometimes', 'linkedin' => 'sometimes', 'instagram' => 'sometimes',
            'image' => 'sometimes|image',
        ]);
        if ($request->hasFile('image')) {
            File::delete($user->profile_img);
            $name = $data['name'];
            $name = "$name.jpg";
            $path = $request->file('image')->storeAs('profile_img', $name, 'public');
            $image = Image::make(public_path("storage/{$path}"))->fit(500);
            $image->save();

            $data['profile_img'] = Storage::url($path);
        }
        $user->update($data);
        return redirect()->route('admin.team')
            ->with('status', 'success')->with('message', 'Team Member Updated Successfully');
    }

    public function DeleteTeam(User $user)
    {
        $user->delete();
        Session::flash('status', 'success');
        Session::flash('message', 'Team Member Deleted Successfully');
    }

    public function PageSettings()
    {
        return view('admin.page-settings');
    }

    public function GeneralSettings()
    {
        return view('admin.general-settings');
    }

    public function UpdateSettings(Request $request)
    {
        if ($request->type == 'page') {
            $data = $request->only(['intro_paragraph', 'vision', 'mission', 'features']);
            $route = 'admin.settings.page';
        }
        if ($request->type == 'general') {
            $data = $request->only(['phone_number', 'facebook', 'twitter', 'instagram']);
            $route = 'admin.settings.general';
        }

        foreach ($data as $key => $value) {
            Setting::query()->where('key', $key)->update(['value' => $value]);
        }
        refresh_settings();
        return redirect()->route($route)
            ->with('status', 'success')->with('message', 'Settings Updated Successfully');
    }
}
