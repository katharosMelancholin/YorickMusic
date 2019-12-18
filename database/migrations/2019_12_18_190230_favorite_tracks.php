<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FavoriteTracks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FavoriteTracks', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->text('Song Name');
        $table->integer('Duration');
        $table->text('Artist');
        $table->text('Album');
        $table->binary('isFavorite');
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
        //
    }
}
