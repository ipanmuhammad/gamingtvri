<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->char('kode_barang');
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->integer('limit');
            $table->text('deskripsi');
            $table->string('upload');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
