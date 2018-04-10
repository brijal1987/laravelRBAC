<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
	    $role_user  = Role::where('name', 'user')->first();
	    $admin = new User();
	    $admin->name = 'Brijal';
	    $admin->email = 'brijal.savaliya@kcspl.co.in';
	    $admin->password = bcrypt('123456');
	    $admin->save();
	    $admin->roles()->attach($role_admin);
	    $user = new User();
	    $user->name = 'Darshan';
	    $user->email = 'darshan.ambaliya@kcspl.co.in';
	    $user->password = bcrypt('123456');
	    $user->save();
	    $user->roles()->attach($role_user);
    }
}
