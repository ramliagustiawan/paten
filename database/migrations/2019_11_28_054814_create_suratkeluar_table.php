<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratkeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkeluar', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->char('nosurat');
            $table->date('tglsurat');
            $table->text('perihal');
            $table->text('isisingkat');
            $table->string('tujuansurat');
            $table->string('pengirim');
            $table->string('fotosurat')->nullable()->default(null);

            $table->date('tglkirim')->nullable()->default(null);
            $table->char('petugas')->nullable()->default(null);
            $table->unsignedBigInteger('pejabat_id')->nullable()->default(null);
            $table->char('penerima')->nullable()->default(null);
            $table->char('ket')->nullable()->default(null);

            $table->timestamps();

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
        Schema::dropIfExists('suratkeluar');
    }
}
