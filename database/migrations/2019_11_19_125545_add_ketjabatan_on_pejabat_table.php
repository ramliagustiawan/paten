<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKetjabatanOnPejabatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pejabat', function (Blueprint $table) {
            $table->string('ketjabatan')->after('jabatan')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pejabat', function (Blueprint $table) {
            $table->dropColumn('ketjabatan');
        });
    }
}
