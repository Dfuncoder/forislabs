<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $super_admin_role = new Role();
        $super_admin_role->slug = 'super-admin';
        $super_admin_role->name = 'Super Administrator';
        $super_admin_role->save();
        
        $admin_role = new Role();
        $admin_role->slug = 'admin';
        $admin_role->name = 'Administrator';
        $admin_role->save();

        $customer_role = new Role();
        $customer_role->slug = 'customer';
        $customer_role->name = 'Customer';
        $customer_role->save();

        $affiliate_role = new Role();
        $affiliate_role->slug = 'affiliate';
        $affiliate_role->name = 'Affiliate';
        $affiliate_role->save();
    }
}
