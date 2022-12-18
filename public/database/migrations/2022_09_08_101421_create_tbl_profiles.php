<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profiles', function (Blueprint $table) {
            $table->increments('id_profile');
            $table->string('full_name',250);
            $table->string('email',250);
            $table->string('phone',250);
            $table->string('address',250);
            $table->string('image',250);
            $table->string('sex',250);
            $table->string('jobs',250);
            $table->integer('ban');
            $table->int('trending')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('tbl_users')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('tbl_profiles');
    }
}
