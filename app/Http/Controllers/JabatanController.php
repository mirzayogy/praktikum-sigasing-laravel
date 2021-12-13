<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Jabatan::all();
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
            'nama_jabatan' => 'required|string|unique:jabatan,nama_jabatan',
            'gapok_jabatan' => 'required|numeric',
            'tunjangan_jabatan' => 'required|numeric',
            'uang_makan_perhari' => 'required|numeric'
        ]);
        return Jabatan::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Jabatan::find($id);
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
        $request->validate([
            'nama_jabatan' => 'required|string|unique:jabatan,nama_jabatan,'.$id,
            'gapok_jabatan' => 'required|numeric',
            'tunjangan_jabatan' => 'required|numeric',
            'uang_makan_perhari' => 'required|numeric'
        ]);

        $jabatan = Jabatan::find($id);
        $jabatan->update($request->all());
        return $jabatan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Jabatan::destroy($id);
    }

    public function search($nama_jabatan)
    {
        return Jabatan::where('nama_jabatan', 'like', '%' . $nama_jabatan . '%')->get();
    }

    public function searchMore($gapok_jabatan)
    {
        return Jabatan::where('gapok_jabatan', '>', $gapok_jabatan)->get();
    }

    public function count()
    {
        $count = Jabatan::all()->count();
        return response([
            'jumlah_jabatan' => $count
        ], 200);
    }

    public function countWhere($nama_Jabatan)
    {
        $count = Jabatan::where('nama_jabatan', 'like', '%' . $nama_Jabatan . '%')->get()->count();
        return response([
            'jumlah_jabatan' => $count
        ], 200);
    }

}
