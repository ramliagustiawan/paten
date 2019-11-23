<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispensasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispensasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('kua');
            $table->char('nama');
            $table->biginteger('nik')->nullable()->default(null);
            $table->char('tempat');
            $table->date('tgllhr');
            $table->char('jk');
            $table->char('wn');
            $table->char('kerja');
            $table->char('agama');
            $table->char('status');
            $table->char('bin');
            $table->string('alamat', 50);
            $table->char('kelurahan')->nullable()->default(null);

            $table->unsignedBigInteger('layanan_id');

            $table->char('namacln');
            $table->biginteger('nikcln')->nullable()->default(null);
            $table->char('tempatcln');
            $table->date('tgllhrcln');
            $table->char('jkcln');
            $table->char('wncln');
            $table->char('kerjacln');
            $table->char('agamacln');
            $table->char('statuscln');
            $table->char('binti');
            $table->string('alamatcln', 50);
            $table->char('kelurahancln')->nullable()->default(null);

            $table->char('kontakcln')->nullable()->default(null);

            $table->date('waktuakad');
            $table->string('tempatakad', 50);

            $table->string('fotokua')->nullable()->default(null);
            $table->string('fotopbb')->nullable()->default(null);
            $table->string('fotoclnsu')->nullable()->default(null);
            $table->string('fotoclnis')->nullable()->default(null);

            $table->char('syarat')->nullable();
            $table->char('proses')->nullable();
            $table->char('ketproses')->nullable();
            $table->char('nosurat')->nullable();
            $table->date('tglsurat')->nullable();
            $table->unsignedBigInteger('pejabat_id')->nullable()->default(null);
            $table->string('nip')->nullable();
            $table->string('barcode')->nullable();
            $table->string('hasil')->nullable();
            $table->timestamps();

            // BUAT FOREIGN KEY
            $table->foreign('layanan_id')->references('id')->on('layanan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('pejabat_id')->references('id')->on('pejabat')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispensasi');
    }
}
