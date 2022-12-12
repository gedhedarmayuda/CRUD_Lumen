<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model{
    protected $table = "kelas";
    protected $fillable = [
        "no_kelas", "kapasitas", "meja", "bangku", "papan_tulis", "create_at"
    ];
    protected $hidden = [];
}
?>
