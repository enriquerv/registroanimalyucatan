<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('second_last_name')->after('last_name')->nullable();
            $table->string('curp')->after('rfc')->nullable();
            $table->string('social_media')->after('curp')->nullable();
            $table->string('cellphone')->after('phone')->nullable();
            $table->string('certificate_folio')->after('curp')->nullable();
            $table->string('second_owner_first_name')->after('certificate_folio')->nullable();
            $table->string('second_owner_last_name')->after('second_owner_first_name')->nullable();
            $table->string('second_owner_phone')->after('second_owner_last_name')->nullable();
            $table->string('second_owner_cellphone')->after('second_owner_phone')->nullable();
            $table->string('second_owner_email')->after('second_owner_cellphone')->nullable();
            $table->string('second_owner_social_media')->after('second_owner_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
