<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('facebook')->after('position')->nullable();
            $table->string('instagram')->after('facebook')->nullable();
            $table->string('twitter')->after('instagram')->nullable();
            $table->string('linkedin')->after('twitter')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->drop('facebook');
            $table->drop('instagram');
            $table->drop('twitter');
            $table->drop('linkedin');
        });
    }
}
