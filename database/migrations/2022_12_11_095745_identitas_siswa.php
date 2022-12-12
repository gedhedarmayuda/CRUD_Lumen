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
            $table->string("nama_siswa");
            $table->string("alamat");
            $table->string("tempat_lahir");
            $table->string("tgl_lahir");
            $table->string("nama_wali");
            $table->string("jenis_kelamin");
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
