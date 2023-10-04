<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $peminjaman
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peminjaman = Peminjaman::create([
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'id_buku' => $request->id_buku,
            'id_pelanggan' => $request->id_pelanggan,
            'id_petugas' => $request->id_petugas,
        ]);

        return response()->json([
            'message' => 'POST',
            'status' => 200,
            'data' => $peminjaman
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $peminjaman
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $after = $peminjaman->update([
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
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
        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->delete();

        return response()->json([
            'message' => 'DEL',
            'status' => 200,
            'data' => $peminjaman
        ]);
    }
}
