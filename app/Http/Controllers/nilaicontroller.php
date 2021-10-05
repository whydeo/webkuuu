<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nilai;
use App\Models\siswa;
use App\Models\kelas;
use App\Models\guru;
use Illuminate\Support\Facades\Validator;
class nilaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {   
       
        $keyword = $request->keyword;
        $nilai = nilai::join('siswas', 'nilais.id_siswa', '=', 'siswas.id')
        ->join('kelas','nilais.id_kelas','=','kelas.id_kelas')
        ->join('gurus','nilais.id_guru','=','gurus.id_guru')
        ->where('kelas', 'NOT LIKE', '%'.$keyword.'%')
        ->get();
        return view('nilai.nilai', compact(
             'keyword','nilai'));


}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {  
        $guru = guru::all();
        $keyword = $request->keyword;
        $siswa = siswa::join('kelas', 'siswas.id_kelas', '=', 'kelas.id_kelas')
        ->select('siswas.*', 'kelas.kelas as kelas')
        ->where('kelas', 'like', '%'.$keyword.'%')
        ->limit(25)
        ->get();
        return view('nilai.create', compact(
            'siswa', 'keyword','guru' ));
     

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $nilai = [];
        $validator = Validator::make($request->all(), $nilai);
        foreach ($request->input('berkualitas') as $key => $value) {
            $nilai["berkualitas.{$key}"] = 'required';
            $nilai["berbudi.{$key}"] = 'required';
            $nilai["berdaya.{$key}"] = 'required';
            $nilai["berhasil.{$key}"] = 'required';
            $nilai["id_kelas.{$key}"] = 'required';
            $nilai["id_siswa.{$key}"] = 'required';
            $nilai["id_guru.{$key}"] = 'required';
        if ($validator->passes()) {
                $nilai = new nilai;
                $nilai->berkualitas = $request->get("berkualitas")[$key];
                $nilai->berbudi = $request->get("berbudi")[$key];
                $nilai->berdaya= $request->get("berdaya")[$key];
                $nilai->berhasil= $request->get("berhasil")[$key];
                $nilai->keterangan= $request->get("keterangan")[$key];
                $nilai->id_kelas = $request->get("id_kelas")[$key];
                $nilai->id_siswa = $request->get("id_siswa")[$key];
                $nilai->id_guru = $request->get("guru")[0];
              

                $nilai->save();
                
            }
            // return redirect('admin.index')->with('status', 'udah bisa!');
    
        }}
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
