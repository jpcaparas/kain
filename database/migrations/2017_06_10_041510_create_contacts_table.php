<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('address2');
            $table->string('suburb');
            $table->string('city');
            $table->string('region');
            $table->string('postcode');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('phone_landline');
            $table->string('phone_mobile');

            $table->softDeletes();
            $table->timestamps();

            $table->integer('contactable_id');
            $table->string('contactable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
