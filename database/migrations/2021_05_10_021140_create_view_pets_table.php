<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewPetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_pets AS
            (
                SELECT
                    pets.id,
                    microchips.microchip as microchip_id,
                    pets.pet_name,
                    pets.birthdate,
                    IF(pets.gender = 1, 'Macho', 'Hembra') as gender,
                    species.name as species_id,
                    breeds.name as breed_id,
                    pets.color,
                    pets.traits,
                    IF(pets.is_sterilized = 1, 'Si', 'No') as is_sterilized,
                    pets.vaccine_polivalente,
                    pets.vaccine_triple,
                    pets.vaccine_rabies,
                    pets.vaccine_leptospira,
                    pets.deworming,
                    pets.photo_face,
                    pets.photo_body,
                    pets.allergies,
                    pets.previous_illnesses,
                    pets.surgeries,
                    CONCAT(users.first_name,' ',users.last_name) as user_name,
                    users.id as user_id,
                    pets.created_at

                FROM `pets`
                    JOIN users ON users.id = pets.user_id
                    JOIN microchips ON microchips.id = pets.microchip_id
                    JOIN species ON species.id = pets.species_id
                    JOIN breeds ON breeds.id = pets.breed_id

                WHERE pets.deleted_at IS NULL
            )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS view_pets');
    }
}
