<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('tbl_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name',250);
            $table->string('category_slug',250);
            $table->integer('parent_id');
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
        Schema::dropIfExists('tbl_categories');
     
    }
}
