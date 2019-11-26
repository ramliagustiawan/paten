<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nosurat');
            $table->date('tglsurat');
            $table->text('perihal');
            $table->string('asalsurat');
            $table->date('tglterima');
            $table->string('fotosurat')->nullable()->default(null);

            $table->text('disposisicamat')->nullable()->default(null);
            $table->text('disposisisek')->nullable()->default(null);
            $table->unsignedBigInteger('pejabat_id')->nullable()->default(null);
            $table->char('tindaklanjut')->nullable()->default(null);
            $table->char('hasil')->nullable()->default(null);
            $table->char('ket')->nullable()->default(null);
          
            $table->timestamps();

            // BUAT FOREIGN KEY
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
        Schema::dropIfExists('suratmasuk');
    }
}
