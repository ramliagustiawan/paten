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
            $table->unsignedBigInteger('service_id');
            $table->char('layanan');
            $table->char('tglajuan');
            $table->char('syarat')->nullable();
            $table->char('proses')->nullable();
            $table->char('ket')->nullable();
            $table->char('nosurat')->nullable();
            $table->char('tglsurat')->nullable();
            $table->char('pejabat')->nullable();
            $table->biginteger('nip')->nullable();
            $table->string('barcode')->nullable();
            $table->char('finish_at')->nullable();
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')->onUpdate('CASCADE')->onDelete('CASCADE');
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
