<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGoalToTableTbSokmul extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_sokmul', function (Blueprint $table) {
            $table->integer('goal')->after('pekerjaan');
            $table->string('catatan')->after('goal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_sokmul', function (Blueprint $table) {
            $table->dropColumn('goal');
            $table->dropColumn('catatan');
        });
    }
}
