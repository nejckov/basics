<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uporabniks', function (Blueprint $table) {
            $table->id();
            $table->string('uporabnik');
            $table->string('ime');
            $table->string('priimek');
            $table->string('naslov');
            $table->integer('starost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uporabniks');
    }
};
