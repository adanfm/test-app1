<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Address extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('street');
            $table->string('number');
            $table->string('neighborhood');
            $table->string('complement');
            $table->string('state');
            $table->string('city');
            $table->string('zip_code');
            $table->enum('type', ['main', 'billing']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
}
