<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_motels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motel_name',250);
            $table->string('motel_slug',250);
            $table->string('title',250);
            $table->string('img',250);
            $table->string('img1',250);
            $table->string('img2',250);
            $table->string('img3',250);
            $table->string('area',250);
            $table->string('price',15);
            $table->string('map',500);
            $table->int('trending')->nullable();
            $table->text('description');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                ->references('id')
                ->on('tbl_users')
                ->onDelete('cascade');
            $table->integer('id_category');
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
       Schema::dropIfExists('tbl_motels');
    }
}
