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
            $table->char('layanan');
            $table->char('naper');
            $table->char('bentuk');
            $table->char('npwp');
            $table->char('giatusaha');
            $table->char('statusbangunan');
            $table->char('alamatusaha');
            $table->char('modal');
            $table->string('fotoktp')->nullable();
            $table->string('fotosku')->nullable();
            $table->string('fotopbb')->nullable();
            $table->string('fotodiri')->nullable();

            $table->char('syarat')->nullable();
            $table->char('proses')->nullable();
            $table->char('ketproses')->nullable();
            $table->char('nosurat')->nullable();
            $table->date('tglsurat')->nullable();
            $table->string('pejabat')->nullable();
            $table->string('nip')->nullable();
            $table->string('barcode')->nullable();
            $table->string('hasil')->nullable();

            $table->timestamps();
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
