<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProsesSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proses_surat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proses_id');
            $table->char('layanan');
            $table->char('tglajuan');
            $table->char('syarat')->nullable()->default(null);
            $table->char('proses')->nullable()->default(null);
            $table->char('ket')->nullable()->default(null);
            $table->char('finish_at')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('proses_id')->references('layanan_id')->on('iumk')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proses_surat');
    }
}
