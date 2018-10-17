<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hpp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tpp_pegawai_id');
            $table->integer('tpp_tahun');
            $table->integer('tpp_bulan');
            $table->integer('tpp_harikerja');
            $table->integer('tpp_hadir');
            $table->integer('tpp_izin');
            $table->integer('tpp_cuti');
            $table->integer('tpp_tanpaalasan');
            $table->integer('tpp_terlambat');
            $table->integer('tpp_cepatpulang');
            $table->integer('tpp_uwas');
            $table->integer('tpp_upacara');
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
        Schema::dropIfExists('hpp');
    }
}
