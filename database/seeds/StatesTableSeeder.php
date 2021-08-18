<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
        
        \DB::table('states')->delete();
        DB::table('states')->truncate();

        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Aguascalientes'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Baja California Norte'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Baja California Sur'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Campeche'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Chiapas'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Chihuahua'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'CDMX'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Coahuila'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Colima'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Durango'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Guanajuato'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Guerrero'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Hidalgo'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Jalisco'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Estado de México'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Michoacan'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Morelos'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Nayarit'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Nuevo León'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Oaxaca'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Puebla'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Querétaro'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Quintana Roo'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'San Luis Potosí'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Sinaloa'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Sonora'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Tabasco'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Tamaulipas'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Tlaxcala'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Veracruz'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Yucatan'
        ]);
        DB::table('states')->insert([
            'country_id' => 1,
            'name' => 'Zacatecas'
        ]);
    }
}
