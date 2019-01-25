<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputerAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('computer_id')->unsigned()->index();
            $table->string('accountName', 30);
            $table->string('accountRole', 30);
            $table->string('password', 30);
            $table->timestamps();
            $table->foreign('computer_id')
                ->references('id')
                ->on('computers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computer_accounts');
    }
}
