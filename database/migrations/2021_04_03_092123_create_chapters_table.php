<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id('chapter_id');
            $table->unsignedBigInteger('novel_id');
            $table->integer('chapter_number');
            $table->text('chapter_name');
            $table->text('chapter_content');
            $table->timestamps();
            $table->foreign('novel_id')->references('novel_id')->on('novels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapters');
    }
}
