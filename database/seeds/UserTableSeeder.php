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
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->apellido = 'Apellido';
        $user->dni = '0123456789';
        $user->password = bcrypt('secret');
        $user->save();

        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Admin';
        $user->apellido = 'Apellido';
        $user->email = 'admin@example.com';
        $user->dni = '1234567890';
        $user->password = bcrypt('secret');
        $user->save();

        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Admin';
        $user->apellido = 'App';
        $user->dni = '2345678901';
        $user->email = 'leandrodumon@gmail.com';
        $user->password = bcrypt('123123123');
        $user->save();
        
        $user->roles()->attach($role_admin);
    }
}
