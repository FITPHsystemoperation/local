<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnAccountRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('computer_accounts')
            ->where('accountRole', 'Administrator')
            ->update(['accountRole' => 1]);

        DB::table('computer_accounts')
            ->where('accountRole', 'Local')
            ->update(['accountRole' => 2]);

        Schema::table('computer_accounts', function (Blueprint $table) {
            $table->renameColumn('accountRole', 'type_id');
        });

        Schema::table('computer_accounts', function (Blueprint $table) {
            $table->integer('type_id')->unsigned()->index()->change();
            $table->foreign('type_id')
                ->references('id')->on('account_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('computer_accounts', function (Blueprint $table) {
            $table->renameColumn('type_id', 'accountRole');
        });
    }
}
