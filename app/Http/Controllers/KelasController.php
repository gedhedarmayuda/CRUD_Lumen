<?php

namespace App\Http\Controllers;

use App\Models\Kelas;

use Illuminate\Http\Request;

class KelasController extends Controller{
    public function showKelas(){
        $data = Kelas::all();
        return response()->json($data);
    }
    public function createKelas(Request $request){
        $data = $request->all();
        $kelas = Kelas::create($data);
        return response()->json($kelas, 201);
    }
}
?>