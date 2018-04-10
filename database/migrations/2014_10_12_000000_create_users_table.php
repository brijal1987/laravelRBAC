<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->boolean('status')->default(0)->comment('0 : Inactive, 1: Active');
            $table->dateTime('created_on');
            $table->integer('created_by')->nullable()->default(0);
            $table->dateTime('modified_on')->nullable();
            $table->integer('modified_by')->nullable()->default(0);
            $table->dateTime('deleted_on')->nullable();
            $table->integer('deleted_by')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
