<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nama');
            $table->biginteger('nik');
            $table->string('alamat', 50);
            $table->char('kelurahan');
            $table->char('kontak');
            $table->unsignedBigInteger('layanan_id');
            $table->char('tempat');
            $table->date('tgllhr');
            $table->char('jk');
            $table->char('agama');
            $table->char('pekerjaan');
            $table->char('keterangan');
            $table->char('keperluan');
            $table->string('fotoktp')->nullable()->default(null);
            $table->string('fotopbb')->nullable()->default(null);

            $table->char('syarat')->nullable();
            $table->char('proses')->nullable();
            $table->char('ketproses')->nullable();
            $table->char('nosurat')->nullable();
            $table->date('tglsurat')->nullable();
            $table->unsignedBigInteger('pejabat_id')->nullable()->default(null);
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
        Schema::dropIfExists('suket');
    }
}
