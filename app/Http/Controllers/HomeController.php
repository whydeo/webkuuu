<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\nilai;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        // $role = Auth::user()->role;
        // if($role == "admin"){
        //     return redirect()->to('admin/admin');
        // } else if($role == "guru"){
        //     return redirect()->to('nilai/nilai');
        // } else if($role == "walikelas"){
        //     return redirect()->to('wkelas/wkelas');
        // } else {
        //     return redirect()->to('logout');
        // }
       
    	$nilai = nilai::where('berbudi','keterangan')->get();
    	$ni = nilai::where('berkualitas','keterangan')->get();
    	$na = nilai::where('berdaya','keterangan')->get();
        $nu= nilai::where('berhasil','keterangan')->get();
    	$nilai_count = count($nilai);    	
    	$ni_count = count($ni);
    	$na_count = count($na);
        $nu_count = count($nu);
    	return view('home',compact('nilai_count','ni_count','na_count','nu_count'));
    }
    
}
