<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nama');
            $table->char('layanan');
            $table->char('kontak');
            $table->char('kelurahan')->nullable();
            $table->string('alamat', 50);
            $table->biginteger('nik');
            $table->char('ttl')->nullable();
            $table->char('jk')->nullable();
            $table->char('negara')->nullable();
            $table->char('kerja')->nullable();
            $table->char('agama')->nullable();
            $table->char('naper')->nullable();
            $table->char('bentuk')->nullable();
            $table->char('npwp')->nullable();
            $table->char('giatusaha')->nullable();
            $table->char('alamatusaha')->nullable();
            $table->char('modal')->nullable();
            $table->char('statusnikah')->nullable();
            $table->char('bin')->nullable();
            $table->char('istri')->nullable();
            $table->char('ttlistri')->nullable();
            $table->char('jkistri')->nullable();
            $table->char('negaraistri')->nullable();
            $table->char('kerjaistri')->nullable();
            $table->char('alamatistri')->nullable();
            $table->char('statusistri')->nullable();
            $table->char('binti')->nullable();
            $table->char('agamaistri')->nullable();
            $table->char('keperluan')->nullable();
            $table->char('statusbangunan')->nullable();
            $table->char('fungsibangunan')->nullable();
            $table->char('jumlahkaryawan')->nullable();
            $table->char('penanggungjawab')->nullable();
            $table->text('ket')->nullable();
            $table->char('nokua')->nullable();
            $table->string('fotoktp')->nullable();
            $table->string('fotosku')->nullable();
            $table->string('fotopbb')->nullable();
            $table->string('fotodiri')->nullable();
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
        Schema::dropIfExists('services');
    }
}
