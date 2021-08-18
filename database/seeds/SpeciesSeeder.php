<?php

use Illuminate\Database\Seeder;

class SpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
		DB::table('species')->truncate();

		DB::table('species')->insert(['name' => 'Canino']);
		DB::table('species')->insert(['name' => 'Felino']);
		DB::table('species')->insert(['name' => 'Huron']);
		DB::table('species')->insert(['name' => 'Reptil']);
		DB::table('species')->insert(['name' => 'Ave']);
		DB::table('species')->insert(['name' => 'Otro']);
    }
}
