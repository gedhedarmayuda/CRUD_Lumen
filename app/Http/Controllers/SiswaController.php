<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller{
    public function showSiswa(){
        $data = Siswa::all();
        return response()->json($data);
    }
    public function createSiswa(Request $request){
        $data = $request->all();
        $siswa = Siswa::create($data);
        return response()->json($siswa, 201);
    }
}
?>