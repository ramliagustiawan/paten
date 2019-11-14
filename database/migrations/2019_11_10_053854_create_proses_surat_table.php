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
            $table->unsignedBigInteger('iumk_id');
            $table->char('layanan');
            $table->char('tglajuan');
            $table->char('syarat')->nullable()->default(null);
            $table->char('proses')->nullable()->default(null);
            $table->char('ket')->nullable()->default(null);
            $table->char('nosurat')->nullable()->default(null);
            $table->char('tglsurat')->nullable()->default(null);
            $table->char('pejabat')->nullable()->default(null);
            $table->biginteger('nip')->nullable()->default(null);
            $table->string('barcode')->nullable()->default(null);
            $table->char('finish_at')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('iumk_id')->references('id')->on('iumk')->onUpdate('CASCADE')->onDelete('CASCADE');
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
