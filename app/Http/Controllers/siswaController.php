<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $siswa = siswa::latest()->paginate(100);
         return view('admin.index',compact('siswa'))
             ->with('i', (request()->input('page', 1) - 1) * 100);
        

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
          $request->validate([
            'absen' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
        ]);
         
       
        siswa::create($request->all());
        /// redirect jika sukses menyimpan data
        return redirect()->route('siswa.index')
                        ->with('success','siswa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswad)
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
