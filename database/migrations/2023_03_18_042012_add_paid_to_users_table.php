<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('username')->after('name')->nullable();
            $table->string('socialmedia_provider')->after('password')->nullable();
            $table->string('socialmedia_id')->after('socialmedia_provider')->nullable();
            $table->foreignId('school_id')->after('socialmedia_id')->references('id')->on('schools')->nullable();
            $table->string('student_class')->after('school_id')->nullable();
            $table->foreignId('country_id')->after('student_class')->references('id')->on('countries');
            $table->string('gender')->after('country_id');
            $table->foreignId('state_id')->after('gender')->references('id')->on('states');
            $table->string('phonenumber')->after('state_id');
            $table->string('address')->after('phonenumber');
           
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
            //
            $table->dropColumn('username');
            $table->dropColumn('socialmedia_provider');
            $table->dropColumn('socialmedia_id');
            $table->dropColumn('school_id');
            $table->dropColumn('student_class');
            $table->dropColumn('country_id');
            $table->dropColumn('gender');
            $table->dropColumn('state_id');
            $table->dropColumn('phonenumber');
            $table->dropColumn('address');
        });
    }
}
