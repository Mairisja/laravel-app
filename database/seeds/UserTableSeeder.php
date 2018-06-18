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
        $role_admin = Role::where(‘name’, ‘admin’)->first();
	    $role_content_admin  = Role::where(‘name’, ‘content_admin’)->first();
	    $role_user  = Role::where(‘name’, ‘user’)->first();

	    $admin = new User();
	    $admin->name = ‘Ralfs Zaikovskis’;
	    $admin->email = ‘ralfs@rdkbuve.lv’;
	    $admin->password = bcrypt(‘secret’);
	    $admin->save();
	    $admin->roles()->attach($role_admin);

	    $content_admin = new User();
	    $content_admin->name = ‘Kārlis Roziņš’;
	    $content_admin->email = ‘karlis@rdkbuve.lv’;
	    $content_admin->password = bcrypt(‘secret’);
	    $content_admin->save();
	    $content_admin->roles()->attach($role_content_admin);

	    $user = new User();
	    $user->name = ‘Dinārs Lasmans’;
	    $user->email = ‘dinars@rdkbuve.lv’;
	    $user->password = bcrypt(‘secret’);
	    $user->save();
	    $user->roles()->attach($role_user);

    }
}
