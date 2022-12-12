<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Identitas_Siswa extends Model{
    protected $table = "identitas_siswa";
    protected $fillable = [
        "id_siswa", "nama_siswa", "alamat", "tempat_lahir", "tgl_lahir", "nama_wali", "jenis_kelamin", "create_at"
    ];
    protected $hidden = [];
}
?>
