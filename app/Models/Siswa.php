<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model{
    protected $fillable = [
        "no", "id_siswa", "no_kelas"
    ];
    protected $hidden = [];
}
?>
