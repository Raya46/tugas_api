<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengembalian = Pengembalian::all();

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $pengembalian
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengembalian = Pengembalian::create([
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'nama_pengembalian' => $request->nama_pengembalian,
            'denda' => $request->denda,
            'id_buku' => $request->id_buku,
            'id_pelanggan' => $request->id_pelanggan,
            'id_petugas' => $request->id_petugas,
        ]);

        return response()->json([
            'message' => 'POST',
            'status' => 200,
            'data' => $pengembalian
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $pengembalian
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pengembalian = Pengembalian::findOrFail($id);

        $after = $pengembalian->update([
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'nama_pengembalian' => $request->nama_pengembalian,
            'denda' => $request->denda,
            'id_buku' => $request->id_buku,
            'id_pelanggan' => $request->id_pelanggan,
            'id_petugas' => $request->id_petugas,
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
        $pengembalian = Pengembalian::findOrFail($id);

        $pengembalian->delete();

        return response()->json([
            'message' => 'DEL',
            'status' => 200,
            'data' => $pengembalian
        ]);
    }
}
