<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('About', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 150);
            $table->string('image', 150);
            $table->string('description1', 150);
            $table->string('description2', 150);
            $table->string('description3', 150);
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
        Schema::dropIfExists('About');
    }
}
