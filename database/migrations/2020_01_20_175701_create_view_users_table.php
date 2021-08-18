<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_users AS
            (
                SELECT
                    users.id,
                    users.first_name,
                    users.last_name,
                    users.second_last_name,
                    users.birthdate,
                    users.phone,
                    users.cellphone,
                    users.email,
                    roles.name as role_id,
                    IF(states.name IS NULL, 'N/A', states.name) as state_id,
                    IF(cities.name IS NULL, 'N/A', cities.name) as city_id,
                    users.colony,
                    users.street,
                    users.no_ext,
                    users.no_int,
                    users.postal_code,
                    users.rfc,
                    users.curp,
                    users.social_media,
                    users.second_owner_first_name,
                    users.second_owner_last_name,
                    users.second_owner_phone,
                    users.second_owner_cellphone,
                    users.second_owner_email,
                    users.second_owner_social_media,
                    users.last_login,
                    users.created_at

                FROM `users`
                    JOIN roles ON roles.id = users.role_id
                    JOIN states ON states.id = users.state_id
                    JOIN cities ON cities.id = users.city_id

                WHERE users.deleted_at IS NULL
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
        DB::statement('DROP VIEW IF EXISTS view_users');
    }
}
