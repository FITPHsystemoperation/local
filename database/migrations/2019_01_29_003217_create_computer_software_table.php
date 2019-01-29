<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputerSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_software', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('computer_id')->unsigned()->index();
            $table->foreign('computer_id')
                ->references('id')->on('computers')->onDelete('cascade');
            $table->integer('software_id')->unsigned()->index();
            $table->foreign('software_id')
                ->references('id')->on('software')->onDelete('cascade');
            $table->json('specs')->nullable();
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
        Schema::dropIfExists('computer_software');
    }
}
