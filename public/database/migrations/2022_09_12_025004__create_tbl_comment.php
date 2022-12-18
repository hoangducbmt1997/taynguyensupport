<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_comment', function (Blueprint $table) {
        $table->increments('id');
        $table->text('comment');
        $table->integer('category_id'); 
        $table->integer('user_id');
        $table->integer('stt');
        $table->integer('parent_comment');
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
        //
    }
}
