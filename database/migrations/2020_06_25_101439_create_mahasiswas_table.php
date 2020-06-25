<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',100);
            $table->string('jk',8);
            $table->date('tanggal_lahir');
            $table->string('email',100);
            $table->string('password',100);
            $table->string('asal_sekolah',100);
            $table->string('foto',255);
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
        Schema::dropIfExists('mahasiswas');
    }
}
