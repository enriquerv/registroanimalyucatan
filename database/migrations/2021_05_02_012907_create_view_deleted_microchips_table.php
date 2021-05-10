<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewDeletedMicrochipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_deleted_microchips AS
            (
                SELECT
                    microchips.id,
                    CONCAT(users.first_name,' ',users.last_name) as user_name,
                    users.id as user_id,
                    microchips.microchip,
                    IF(microchips.active = 1, 'SI', 'NO') as active,
                    microchips.created_at

                FROM `microchips`
                    JOIN users ON users.id = microchips.user_id

                WHERE microchips.deleted_at IS NOT NULL
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
        DB::statement('DROP VIEW IF EXISTS view_deleted_microchips');
    }
}
