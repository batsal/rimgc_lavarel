<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'employee')->first();
	    $role_manager  = Role::where('name', 'manager')->first();
	    $role_admin    = Role::where('name', 'admin')->first();

	    $employee = new User();
	    $employee->name = 'Shova Shrestha';
	    $employee->email = 'shovamdev@gmail.com';
	    $employee->password = bcrypt('shova@123');
	    $employee->save();
	    $employee->roles()->attach($role_employee);

	    $manager = new User();
	    $manager->name = 'Batsal Devkota';
	    $manager->email = 'batsal@gmail.com';
	    $manager->password = bcrypt('secret');
	    $manager->save();
	    $manager->roles()->attach($role_manager);

	    $manager = new User();
	    $manager->name = 'Admin Admin';
	    $manager->email = 'admin@admin.com';
	    $manager->password = bcrypt('secret');
	    $manager->save();
	    $manager->roles()->attach($role_admin);
    }
}
