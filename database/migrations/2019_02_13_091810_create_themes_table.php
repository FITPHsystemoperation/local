<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25)->unique();
            $table->string('description', 100);
            $table->string('file', 100);
            $table->boolean('enabled')->default(1);
            $table->timestamps();
        });

        DB::table('themes')->insert([
            'name' => 'Default',
            'description' => 'Basic Bootstrap',
            'file' => 'css/bootstrap.min.css',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('themes');
    }
}
