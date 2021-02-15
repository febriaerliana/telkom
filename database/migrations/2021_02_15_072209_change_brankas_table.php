<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBrankasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brankas', function (Blueprint $table) {
            $table->text('judul')->change();
            $table->text('lokasi')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brankas', function (Blueprint $table) {
            $table->string('judul')->change();
            $table->string('lokasi')->change();
        });
    }
}
