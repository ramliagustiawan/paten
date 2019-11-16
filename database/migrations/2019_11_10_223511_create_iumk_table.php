<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIumkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iumk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nama');
            $table->biginteger('nik');
            $table->string('alamat', 50);
            $table->char('kelurahan');
            $table->char('kontak');
            $table->unsignedBigInteger('layanan_id');
            $table->char('naper');
            $table->char('bentuk');
            $table->char('npwp');
            $table->char('giatusaha');
            $table->char('statusbangunan');
            $table->char('alamatusaha');
            $table->char('modal');
            $table->string('fotoktp')->nullable()->default(null);
            $table->string('fotosku')->nullable()->default(null);
            $table->string('fotopbb')->nullable()->default(null);
            $table->string('fotodiri')->nullable()->default(null);

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
        Schema::dropIfExists('iumk');
    }
}
