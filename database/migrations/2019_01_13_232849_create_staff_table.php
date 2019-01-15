<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            // neccessary data
            $table->increments('id');
            $table->string('idNumber', 15)->unique();
            $table->string('firstName', 50);
            $table->string('middleName', 50);
            $table->string('lastName', 50);
            $table->string('nickName', 50);
            $table->string('gender', 1);
            $table->string('image', 25);
            // work related data
            $table->date('dateHired')->nullable();
            $table->integer('employment_stat_id')->nullable();
            $table->integer('job_title_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->decimal('dailyRate', 8, 2)->default(0.00);
            // contact information data
            $table->string('contactNo', 20)->nullable();
            $table->string('emailAddress', 50)->nullable();
            $table->string('permanentAddress', 100)->nullable();
            $table->string('presentAddress', 100)->nullable();
            // emergency contact data
            $table->string('emergencyPerson', 50)->nullable();
            $table->string('emergencyNo', 20)->nullable();
            $table->string('emergencyRelation', 20)->nullable();
            // accounts data
            $table->string('birNo', 20)->nullable();
            $table->string('sssNo', 20)->nullable();
            $table->string('pagibigNo', 20)->nullable();
            $table->string('philhealthNo', 20)->nullable();
            $table->string('bankNo', 20)->nullable();
            // personal
            $table->date('birthday')->nullable();
            $table->string('civilStatus', 20)->nullable();
            // completed
            $table->boolean('isCompleted')->default(0);
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
        Schema::dropIfExists('staff');
    }
}
