<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas_siswa', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string("nama_siswa")->nullable();
            $table->string("alamat")->nullable();
            $table->string("tempat_lahir")->nullable();
            $table->string("tgl_lahir")->nullable();
            $table->string("nama_wali")->nullable();
            $table->string("jenis_kelamin")->nullable();
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
        Schema::dropIfExists('identitas_siswa');
    }
};
