<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller{
    public function showIdentitasSiswa(){
        $data = Siswa::all();
        return response()->json($data);
    }
    public function createIdentitasSiswa(Request $request){
        $data = $request->all();
        $siswa = Siswa::create($data);
        return response()->json($siswa, 201);
    }
}
?>