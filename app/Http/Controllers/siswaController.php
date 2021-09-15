<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\kelas;
use App\Models\jurusan;
use DB;
class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $siswa = siswa::all();
         return view('admin.index')->with(compact('siswa'));
        

        // $siswa =  siswa ::all();
        // return view('admin.index', compact("siswa"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {         
            $data =$request ->all();
            $siswa = new siswa;
            $siswa ->absen=$data['absen'];
            $siswa ->nama=$data['nama'];
            $siswa ->jk=$data['jk'];
            $siswa ->save(); 

            $kelas = new kelas;
            $kelas-> id_siswa=$siswa->id;
            $kelas->kelas =$data['kelas'];
            $kelas->wkelas =$data['wkelas'];
            $kelas->save();

            $jurusan = new jurusan;
            $jurusan->id_kelas=$kelas->id;
            $jurusan->id_siswa=$siswa->id;
            $jurusan->nama_jurusan=$data['nama_jurusan'];
            $jurusan->save();
            return response('admin.index');
     }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        return view('admin.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        return view('admin.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $siswa)
    {
        $request->validate([
            'absen' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
        ]);
        $siswa->update($request->all());
        return redirect()->route('siswa.index')
        ->with('success','siswa updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
  
        return redirect()->route('siswa.index')
                        ->with('success','siswa deleted successfully');
    }
}
