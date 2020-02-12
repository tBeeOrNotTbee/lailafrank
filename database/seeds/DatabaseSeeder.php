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
        
        DB::table('places')->insert(['place'=>'Depósito']);
        DB::table('places')->insert(['place'=>'Showroom']);
        
        DB::table('img_categories')->insert(['category'=>'previewA']);
        DB::table('img_categories')->insert(['category'=>'previewB']);
        DB::table('img_categories')->insert(['category'=>'previewLarge']);
        DB::table('img_categories')->insert(['category'=>'imgCatalog']);
        
        DB::table('shoe_categories')->insert(['name'=>'Boots']);
        DB::table('shoe_categories')->insert(['name'=>'Sandals']);
        DB::table('shoe_categories')->insert(['name'=>'Stilettos']);
        DB::table('shoe_categories')->insert(['name'=>'Flats']);
        DB::table('shoe_categories')->insert(['name'=>'Tango']);
        
        factory(Shoe::class)->times(6)->create();

        DB::table('addresses')->insert([
            'user_id'=>'user_id',
            'name'=> 'Showroom',
            'surname'=>'surname',
            'street'=>'street',
            'number'=>'number',
            'floor'=>'floor',
            'apartment'=>'apartment',
            'city'=>'Capital Federal',
            'state'=>'Buenos Aires',
            'post_code' =>'post_code',
            'country'=>'Argentina'
        ]);
    }
}
