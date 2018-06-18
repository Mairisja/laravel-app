<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$role_admin = new Role();
	    $role_admin->name = ‘admin’;
	    $role_admin->description = ‘Superadmin’;
	    $role_admin->save();
	    $role_content_admin = new Role();
	    $role_content_admin->name = ‘content_admin’;
	    $role_content_admin->description = ‘Content admin’;
	    $role_content_admin->save();
	   	$role_user = new Role();
	    $role_user->name = ‘user’;
	    $role_user->description = ‘Usual user’;
	    $role_user->save();
    }
}
