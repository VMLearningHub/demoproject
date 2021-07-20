<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('alubm_id')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('artist', 100)->nullable();
            $table->string('song_path', 100)->nullable();
            $table->string('image', 100)->nullable();
            $table->longText('Metadata')->nullable();
            $table->timestamps();
            $table->foreign('alubm_id')->references('id')->on('albums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
