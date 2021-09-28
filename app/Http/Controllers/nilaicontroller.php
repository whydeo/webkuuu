<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nilai;
use App\Models\siswa;
use App\Models\kelas;
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
        $siswa = siswa::join('kelas', 'siswas.id_kelas', '=', 'kelas.id_kelas')
        ->select('siswas.*', 'kelas.kelas as kelas')
        ->where('kelas', 'LIKE', '%'.$keyword.'%')
        ->get();
        return view('nilai.nilai', compact(
            'siswa', 'keyword'  ));
            
       
    

}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $kelas = kelas::all();
        return view('nilai.nilai',compact('kelas'));

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

        if ($validator->passes()) {
                $nilai = new nilai;
                $nilai->berkualitas = $request->get("berkualitas")[$key];
                $nilai->berbudi = $request->get("berbudi")[$key];
                $nilai->berdaya= $request->get("berdaya")[$key];
                $nilai->berhasil= $request->get("berhasil")[$key];
                $nilai->keterangan= $request->get("keterangan")[$key];
                $nilai->id_siswa = $request->get("siswas")[0];
                $siswa->id_kelas = $request->get("kelas")[1];
                $nilai->save();
                
            }

    
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
