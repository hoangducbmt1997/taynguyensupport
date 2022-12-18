<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
           $table->increments('id');
            $table->string('product_name',250);
            $table->string('product_slug',250);
            $table->integer('price');
            $table->string('img',250);
            $table->text('description');
            $table->string('phone',12);
            $table->string('address',250);
            $table->unsignedInteger('category_id');
            $table->int('trending')->nullable();
            $table->unsignedInteger('cate_child_id');
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
        Schema::dropIfExists('tbl_products');
    }
}
