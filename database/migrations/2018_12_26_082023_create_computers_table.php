<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('compName', 50)->unique();
            $table->string('adminPass', 50);
            $table->string('userName', 50)->unique();
            $table->string('userPass', 50);
            $table->text('specs')->nullable();
            $table->boolean('withWbuster')->default(0);
            $table->boolean('withSkysea')->default(0);
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
        Schema::dropIfExists('computers');
    }
}
