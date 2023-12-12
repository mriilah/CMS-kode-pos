<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CarikodeController extends Controller
{
    // public function index()
    // {   
    //     $tbl_kodepos = DB::table('tbl_kodepos')->get();
    //     return $tbl_kodepos;
    //     //return view("halaman-kodepos.carikode", ["data"=> $tbl_kodepos]);
    // }
    public function store (Request $request)
    {
        // dd($request->all());
        $validation = $request->validate([
            "provinsi" =>  'required',
            "kabupaten"=> 'required',
            "kecamatan"=> 'required',
            "kelurahan"=> 'required',
            "kodepos"=> 'required'
        ]);

        $query = DB::table("tbl_kodepos")->insert([
            "provinsi" =>  $request["provinsi"],
            "kabupaten"=> $request["kabupaten"],
            "kecamatan"=> $request["kecamatan"],
            "kelurahan"=> $request["kelurahan"],
            "kodepos"=> $request["kodepos"]
        ]);
    }
}
