<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->bigIncrements('id_pengaduan');
            $table->string('id_user');
            $table->timestamps();
            $table->string('nama');
            $table->string('opd');
            $table->string('nohp');
            $table->string('email');
            $table->string('judul');
            $table->string('layanan');
            $table->string('prioritas');
            $table->string('pesan');
            $table->string('file');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
}
