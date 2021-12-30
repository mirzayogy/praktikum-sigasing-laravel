<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bagian::with('karyawan')->with('lokasi')->get();
    }

    public function indexCustom(){
        return Bagian::with('karyawan:id,nama_lengkap')->get();
    }

    public function indexJoin(){
        return DB::table('bagian')
            ->join('karyawan', 'karyawan.id', '=', 'bagian.karyawan_id')
            ->join('lokasi', 'lokasi.id', '=', 'bagian.lokasi_id')
            ->select('bagian.*', 'karyawan.nama_lengkap AS nama_kepala_bagian', 'lokasi.nama_lokasi')
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Bagian::with('karyawan')->with('lokasi')->find($id);
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
