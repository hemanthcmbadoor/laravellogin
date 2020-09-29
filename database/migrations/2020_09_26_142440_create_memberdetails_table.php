<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('aadhar_no', 20);
            $table->string('cast', 20);
            $table->string('gender', 10);
            $table->string('skills', 500)->default('');
            $table->string('isdoneform1', 5)->default('0');
            $table->string('isdoneform2', 5)->default('0');
            $table->string('filepath', 500)->nullable();
            $table->foreignId('memberid')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberdetails');
    }
}
