<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use DB;
use Illuminate\Support\Facades\Validator;

class kelascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = DB::table('kelas')->get();

        return view('kelas.index', compact(
            'kelas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelas = [];
        $validator = Validator::make($request->all(), $kelas);
        foreach ($request->input('kelas') as $key => $value) {
            $kelas["kelas.{$key}"] = 'required';
            $kelas["wkelas.{$key}"] = 'required';
          
        if ($validator->passes()) {
                $kelas = new kelas;
                $kelas->kelas = $request->get("kelas")[$key];
                $kelas->wkelas = $request->get("wkelas")[$key];
                $kelas->save();
                
            }
            return redirect('kelas/index')->with('status', 'siswa berhasil ditambah!');

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
