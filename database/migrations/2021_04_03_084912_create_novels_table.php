<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels', function (Blueprint $table) {
            $table->id('novel_id');
            $table->string('novel_name');
            $table->string('novel_thumb');
            $table->text('novel_description');
            $table->integer('novel_star')->default(0);
            $table->bigInteger('novel_like')->default(0);
            $table->bigInteger('novel_comment')->default(0);
            $table->integer('novel_status')->default(1);
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
        Schema::dropIfExists('novels');
    }
}
