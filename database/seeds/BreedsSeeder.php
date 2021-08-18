<?php

use Illuminate\Database\Seeder;

class BreedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breeds')->truncate();

        DB::table('breeds')->insert(['species_id' => 1, 'name' => 'Husky']);
        DB::table('breeds')->insert(['species_id' => 1, 'name' => 'Chihuahua']);
        DB::table('breeds')->insert(['species_id' => 1, 'name' => 'Maltés']);
        DB::table('breeds')->insert(['species_id' => 1, 'name' => 'San Bernardo']);
        DB::table('breeds')->insert(['species_id' => 1, 'name' => 'Rottweiler']);
        DB::table('breeds')->insert(['species_id' => 1, 'name' => 'Otro']);

        DB::table('breeds')->insert(['species_id' => 2, 'name' => 'Persa']);
        DB::table('breeds')->insert(['species_id' => 2, 'name' => 'Esfinge']);
        DB::table('breeds')->insert(['species_id' => 2, 'name' => 'Siamés']);
        DB::table('breeds')->insert(['species_id' => 2, 'name' => 'Bengalí']);
        DB::table('breeds')->insert(['species_id' => 2, 'name' => 'Otro']);

        DB::table('breeds')->insert(['species_id' => 3, 'name' => 'Whippet']);
        DB::table('breeds')->insert(['species_id' => 3, 'name' => 'Estándar']);
        DB::table('breeds')->insert(['species_id' => 3, 'name' => 'Bull']);
        DB::table('breeds')->insert(['species_id' => 3, 'name' => 'Otro']);

        DB::table('breeds')->insert(['species_id' => 4, 'name' => 'Tortuga']);
        DB::table('breeds')->insert(['species_id' => 4, 'name' => 'Serpiente']);
        DB::table('breeds')->insert(['species_id' => 4, 'name' => 'Caimán']);
        DB::table('breeds')->insert(['species_id' => 4, 'name' => 'Otro']);

        DB::table('breeds')->insert(['species_id' => 5, 'name' => 'Otro']);

        DB::table('breeds')->insert(['species_id' => 6, 'name' => 'Otro']);
    }
}
