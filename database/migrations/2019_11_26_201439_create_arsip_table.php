<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('arsip_id')->nullable()->default(null);
            $table->char('asalsurat')->nullable()->default(null);
            $table->char('tglterima')->nullable()->default(null);
            $table->char('perihal')->nullable()->default(null);
            $table->char('tindaklanjut')->nullable()->default(null);
            $table->char('tglselesai')->nullable()->default(null);
            $table->date('tglarsip')->nullable()->default(null);
            $table->char('ket')->nullable()->default(null);

            $table->timestamps();

            $table->foreign('arsip_id')->references('id')->on('suratmasuk')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arsip');
    }
}
