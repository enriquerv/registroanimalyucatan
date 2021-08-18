<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('microchip_id');
            $table->string('pet_name');
            $table->date('birthdate');
            $table->boolean('gender');
            $table->integer('species_id');
            $table->integer('breed_id');
            $table->text('color')->nullable();
            $table->text('traits')->nullable();
            $table->boolean('is_sterilized');
            $table->date('vaccine_polivalente')->nullable();
            $table->date('vaccine_triple')->nullable();
            $table->date('vaccine_rabies')->nullable();
            $table->date('vaccine_leptospira')->nullable();
            $table->date('deworming')->nullable();
            $table->string('photo_face')->nullable();
            $table->string('photo_body')->nullable();
            $table->text('allergies')->nullable();
            $table->text('previous_illnesses')->nullable();
            $table->text('surgeries')->nullable();
            $table->integer('user_id');
            $table->integer('owner_id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
