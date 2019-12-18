<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime', function (Blueprint $table) {
            $table->string('id',10)->primaryKey();
            $table->string('title',50);
            $table->string('type',10);
            $table->string('episode',10);
            $table->string('status',25);
            $table->date('start_aired');
            $table->date('finish_aired');
            $table->string('premiered',20);
            $table->integer('producer_id');
            $table->integer('studio_id');
            $table->integer('source_id');
            $table->string('genres',50);
            $table->string('duration',10);
            $table->float('rating',8,2);
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
        Schema::dropIfExists('anime');
    }
}
