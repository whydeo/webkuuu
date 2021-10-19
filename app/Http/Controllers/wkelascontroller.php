<?php

namespace App\Http\Controllers;
use App\Models\nilai;
use App\Models\siswa;
use App\Models\kelas;
use App\Models\guru;
use Illuminate\Http\Request;

class wkelascontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function wkelas(request $request)
    {
        $keyword = $request->keyword;
        $nilai = nilai::join('siswas', 'nilais.id_siswa', '=', 'siswas.id')
        ->join('kelas','nilais.id_kelas','=','kelas.id_kelas')
        ->join('gurus','nilais.id_guru','=','gurus.id_guru')
        ->where('kelas', '=', $keyword)
        ->limit(25)
        ->get();
      
        return view('wkelas.wkelas', compact(
            'keyword','nilai'));
    }
}
