<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('statDesc')->unique();
        });

        DB::table('employment_stats')->insert([
            ['statDesc' => 'Regular'],
            ['statDesc' => 'Probationary'],
            ['statDesc' => 'Resigned'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employment_stats');
    }
}
