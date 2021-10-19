<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;
use DB;
use Illuminate\Support\Facades\Validator;

class gurucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = DB::table('gurus')->get();

        return view('guru.index', compact(
            'guru'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        $guru = [];
        $validator = Validator::make($request->all(), $guru);
        foreach ($request->input('guru') as $key => $value) {
            $guru["guru.{$key}"] = 'required';
            $guru["mapel.{$key}"] = 'required';
          
        if ($validator->passes()) {
                $guru = new guru;
                $guru->guru = $request->get("guru")[$key];
                $guru->mapel = $request->get("mapel")[$key];
                $guru->save();
                
            }
            return redirect('admin/index')->with('status', 'siswa berhasil ditambah!');

    }
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
