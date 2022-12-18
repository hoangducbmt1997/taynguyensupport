<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('tbl_status', function (Blueprint $table) {
        $table->increments('id');
        $table->text('status');
        $table->integer('user_id');
        $table->integer('comment_id');
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
