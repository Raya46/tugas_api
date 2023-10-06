<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_buku = Buku::all();

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $all_buku
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $buku = Buku::create([
            'kode_buku' => $request->kode_buku,
            'judul_buku' => $request->judul_buku,
            'penulis_buku' => $request->penulis_buku,
            'penerbit_buku' => $request->penerbit_buku,
            'tahun_terbit_buku' => $request->tahun_terbit_buku,
            'stok' => $request->stok,
        ]);

        return response()->json([
            'message' => 'POST',
            'status' => 200,
            'data' => $buku
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $buku
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);

        $buku->update([
            'kode_buku' => $request->kode_buku,
            'judul_buku' => $request->judul_buku,
            'penulis_buku' => $request->penulis_buku,
            'penerbit_buku' => $request->penerbit_buku,
            'tahun_terbit_buku' => $request->tahun_terbit_buku,
            'stok' => $request->stok,
        ]);

        return response()->json([
            'message' => 'UPD',
            'status' => 200,
            'data' => $buku
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        $buku->delete();

        return response()->json([
            'message' => 'DEL',
            'status' => 200,
            'data' => $buku
        ]);
    }
}
