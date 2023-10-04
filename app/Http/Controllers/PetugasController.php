<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = Petugas::all();

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $petugas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $petugas = Petugas::create([
            'nama_petugas' => $request->nama_petugas,
            'jabatan_petugas' => $request->jabatan_petugas,
            'no_telp_petugas' => $request->no_telp_petugas,
            'alamat_petugas' => $request->alamat_petugas,
        ]);

        return response()->json([
            'message' => 'POST',
            'status' => 200,
            'data' => $petugas
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $petugas = Petugas::findOrFail($id);

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $petugas
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $petugas = Petugas::findOrFail($id);

        $after = $petugas->update([
            'nama_petugas' => $request->nama_petugas,
            'jabatan_petugas' => $request->jabatan_petugas,
            'no_telp_petugas' => $request->no_telp_petugas,
            'alamat_petugas' => $request->alamat_petugas,
        ]);

        return response()->json([
            'message' => 'UPD',
            'status' => 200,
            'data' => $after
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $petugas = Petugas::findOrFail($id);

        $petugas->delete();

        return response()->json([
            'message' => 'DEL',
            'status' => 200,
            'data' => $petugas
        ]);
    }
}
