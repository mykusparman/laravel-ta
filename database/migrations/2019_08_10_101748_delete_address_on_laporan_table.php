<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteAddressOnLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
      {
          Schema::table('laporan', function($table) {
             $table->dropColumn('address');
          });
      }

      public function down()
      {
          Schema::table('laporan', function($table) {
             $table->string('address');
          });
      }
}
