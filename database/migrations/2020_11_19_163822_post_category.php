<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('post_category', function (Blueprint $table) {
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('post');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category');
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
        Schema::drop('post_category');
    }
}
