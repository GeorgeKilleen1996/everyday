<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemoncards', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('number');
            $table->string('language');
            $table->string('year_released');
            $table->string('set_name');
            $table->string('card_name');
            $table->double('bought_for');
            $table->double('ungraded_price')->nullable();
            $table->double('psa_nine_value')->nullable();
            $table->double('psa_ten_value')->nullable();
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
        Schema::dropIfExists('pokemoncards');
    }
}
