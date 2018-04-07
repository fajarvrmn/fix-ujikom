<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $superadminRole = new Role();
        $superadminRole->name="superadmin";
        $superadminRole->display_name="Super Admin";
        $superadminRole->save();

        $adminRole = new Role();
        $adminRole->name="admin";
        $adminRole->display_name="admin";
        $adminRole->save();

        $superadmin = new User();
        $superadmin->name="Admin Besar";
        $superadmin->email="admin@gmail.com";
        $superadmin->password=bcrypt('rahasia');
        // $admin->is_verified=1;
        $superadmin->save();
        $superadmin->attachRole($superadminRole);

        $adminRole = new User();
        $adminRole->name="admin ajah";
        $adminRole->email="adminajah@gmail.com";
        $adminRole->password=bcrypt('rahasia');
        // $adminRole->is_verified=1;
        $adminRole->save();
        $adminRole->attachRole($adminRole);
        
}
    }

