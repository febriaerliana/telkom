<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrankasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brankas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('no_dokumen');
            $table->integer('tahun');
            $table->string('brankas');
            $table->string('rincian');
            $table->bigInteger('no_po');
            $table->string('no_spk');
            $table->string('lokasi');
            $table->text('keterangan');
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
        Schema::dropIfExists('brankas');
    }
}
