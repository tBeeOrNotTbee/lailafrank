<?php

use Illuminate\Database\Seeder;
use App\Shoe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // La creación de datos de roles debe ejecutarse primero
        $this->call(RoleTableSeeder::class);

        // Los usuarios necesitarán los roles previamente generados
        $this->call(UserTableSeeder::class);
        
        factory(Shoe::class)->times(6)->create();
        
        DB::table('places')->insert(['place'=>'Depósito']);
        DB::table('places')->insert(['place'=>'Showroom']);
    }
}
