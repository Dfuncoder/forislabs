<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin_role = Role::query()->where('slug', 'super-admin')->first();
        $admin_role = Role::query()->where('slug', 'admin')->first();
        $customer_role = Role::where('slug', 'customer')->first();
        $affiliate_role = Role::where('slug', 'affiliate')->first();


        $john = User::forceCreate([
            'name' => 'John Onuigbo',
            'email' => 'johnonuigbo6@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'), // password
            'remember_token' => Str::random(10),
            'position' => 'CEO/Co-Founder',
            'profile_img' => '/img/john.svg'
        ]);
        $kyrian = User::forceCreate([
            'name' => 'Kyrian Obikwelu',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'), // password
            'remember_token' => Str::random(10),
            'position' => 'CEO/Co-Founder',
            'profile_img' => '/img/kyrian.svg'
        ]);
        $kyrian->roles()->attach($super_admin_role);
        $john->roles()->attach($admin_role);

        User::factory(5)->hasAttached($customer_role)->create();
        User::factory(5)->hasAttached($affiliate_role)->create();
    }
}
