<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_name',250);
            $table->string('post_slug',250);
            $table->string('title',250);
            $table->string('img',250);
            $table->text('description');
            $table->int('trending')->nullable();
            $table->unsignedInteger('id_category');
             $table->foreign('id_category')
                ->references('id')
                ->on('tbl_categories')
                ->onDelete('cascade');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                ->references('id')
                ->on('tbl_users')
                ->onDelete('cascade');
            $table->integer('action');
            $table->rememberToken();
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
        Schema::dropIfExists('tbl_posts');
    }
}
