<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CarikodeController extends Controller
{
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
    public function index (){
        $cari= request()->query('search');
        // dd($cari);
        $tbl_kodepos = DB::table('tbl_kodepos')
        ->when($cari,  function($query, $cari){
            return $query
            ->where('provinsi', 'like', '%'.$cari.'%')
            ->orWhere('kabupaten', 'like', '%'.$cari.'%')
            ->orWhere('kecamatan', 'like', '%'.$cari.'%')
            ->orWhere('kelurahan', 'like', '%'.$cari.'%');
        })
        ->get();
        return view('halaman-kodepos.carikode', compact('tbl_kodepos'));
    }
    public function provinsi ($provinsi){
        $cari= request()->query('search');
        $tbl_kodepos = DB::table('tbl_kodepos')
        ->where('provinsi', '=', $provinsi)
        ->get();
        //dd($tbl_kodepos);
        return view('halaman-kodepos.carikode', compact('tbl_kodepos'));
    }
    public function kabupaten ($provinsi){
        $cari= request()->query('search');
        $tbl_kodepos = DB::table('tbl_kodepos')
        ->where('kabupaten', '=', $provinsi)
        ->get();
        //dd($tbl_kodepos);
        return view('halaman-kodepos.carikode', compact('tbl_kodepos'));
    }
    public function kecamatan ($kabupaten){
        $tbl_kodepos = DB::table('tbl_kodepos')
        ->where('kecamatan', '=', $kabupaten)
        ->get();
        //dd($tbl_kodepos);
        return view('halaman-kodepos.carikode', compact('tbl_kodepos'));
    }
    public function kelurahan ($kecamatan){
        $tbl_kodepos = DB::table('tbl_kodepos')
        ->where('kelurahan', '=', $kecamatan)
        ->get();
        //dd($tbl_kodepos);
        return view('halaman-kodepos.carikode', compact('tbl_kodepos'));
    }
    public function kodepos ($kelurahan){
        $tbl_kodepos = DB::table('tbl_kodepos')
        ->where('kodepos', '=', $kelurahan)
        ->get();
        //dd($tbl_kodepos);
        return view('halaman-kodepos.carikode', compact('tbl_kodepos'));
    }
}
