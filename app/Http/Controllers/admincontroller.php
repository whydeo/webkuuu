<?php

namespace App\Http\Controllers;
use App\Models\nilai;
use App\Models\siswa;
use App\Models\kelas;
use App\Models\guru;
use Illuminate\Http\Request;

class admincontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {
        $keyword = $request->keyword;
        $nilai = nilai::join('siswas', 'nilais.id_siswa', '=', 'siswas.id')
        ->join('kelas','nilais.id_kelas','=','kelas.id_kelas')
        ->join('gurus','nilais.id_guru','=','gurus.id_guru')
        ->where('keterangan', '=', $keyword)
        ->limit(25)
        ->get();

        return view('admin', compact(
            'keyword','nilai'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
