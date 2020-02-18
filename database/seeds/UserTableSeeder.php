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
        $user->surname = 'Apellido';
        $user->dni = '0123456789';
        $user->password = bcrypt('secret');
        $user->save();

        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Laila';
        $user->surname = 'Frank';
        $user->email = 'shoes@lailafrank.com';
        $user->dni = '1234567890';
        $user->password = bcrypt('lailafrank2020');
        $user->save();

        $user->roles()->attach($role_user);
        $user = new User();
        $user->name = 'Admin';
        $user->surname = 'App';
        $user->dni = '2345678901';
        $user->email = 'leandrodumon@gmail.com';
        $user->password = bcrypt('123123123');
        $user->save();
        
        $user->roles()->attach($role_admin);
    }
}
