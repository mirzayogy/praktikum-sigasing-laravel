<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lokasi::all();
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
            'nama_lokasi' => 'required'
        ]);
        return Lokasi::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Lokasi::find($id);
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
        $lokasi = Lokasi::find($id);
        $lokasi->update($request->all());
        return $lokasi;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Lokasi::destroy($id);
    }

    public function search($nama_lokasi){
        return Lokasi::where('nama_lokasi', 'like', '%'.$nama_lokasi.'%')->get();
    }

    public function count(){
        $count = Lokasi::all()->count();
        return response([
            'jumlah_lokasi' => $count
        ],200);
    }

    public function countWhere($nama_lokasi)
    {
        $count = Lokasi::where('nama_lokasi', 'like', '%'.$nama_lokasi.'%')->get()->count();
        return response([
            'jumlah_lokasi' => $count
        ], 200);
    }
}
