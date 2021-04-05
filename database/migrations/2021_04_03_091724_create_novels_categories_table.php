<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovelsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('novel_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('novel_id')->references('novel_id')->on('novels');
            $table->foreign('category_id')->references('category_id')->on('categories');
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
        Schema::dropIfExists('novels_categories');
    }
}
