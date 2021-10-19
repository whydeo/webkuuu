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
       
    //    
    




    $data = DB::table('nilais')
    ->select(
     DB::raw('keterangan as keterangan'),
     DB::raw('count(*) as number'))
    ->groupBy('keterangan')
    ->get();
 $array[] = ['keterangan', 'Number'];
 foreach($data as $key => $value)
 {
   $array[++$key] = [$value->keterangan, $value->number];
 }
 return view('home')->with('keterangan', json_encode($array));
}}
