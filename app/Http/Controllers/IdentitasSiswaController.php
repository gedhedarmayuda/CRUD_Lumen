<?php

namespace App\Http\Controllers;

use App\Models\Identitas_Siswa;

use Illuminate\Http\Request;

class IdentitasSiswaController extends Controller{
    public function showIdentitasSiswa(){
        $data = Identitas_Siswa::all();
        return response()->json($data);
    }
    public function createIdentitasSiswa(Request $request){
        $data = $request->all();
        $id_siswa = Identitas_Siswa::create($data);
        return response()->json($id_siswa, 201);
    }
}
?>