<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Role;
use App\Models\Simulation;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Newsletter;

class HomeController extends Controller
{
    public function Index()
    {
        $members = User::admins()->get();
        return view('welcome', compact('members'));
    }

    public function Privacy()
    {
        return view('privacy');
    }

    public function Terms()
    {
        return view('terms');
    }

    public function Contact()
    {
        return view('contact');
    }

    public function Pricing()
    {
        return view('pricing');
    }

    public function Simulations()
    {
        $simulation_groups = Simulation::with('category.parent')->get()->groupBy('category.parent.name');
        return view('simulations', compact('simulation_groups'));
    }

    public function ListPosts()
    {
        $posts = Post::latest()->paginate(5);
        $older = Post::whereDate('created_at', '<', today()->addMonths(5))->oldest()->limit(4)->get();
        return view('blog', compact('posts', 'older'));
    }

    public function GetPost($slug)
    {
        $post = Post::with('comments')->where('slug', $slug)->first();
        $recent_posts = Post::latest()->limit(5)->get();
        return view('single-post', compact('post', 'recent_posts'));
    }

    public function JoinWaitlist(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'type' => 'required|string'
        ]);

        Newsletter::subscribe($request->email);

        return redirect()->back();
    }
}
