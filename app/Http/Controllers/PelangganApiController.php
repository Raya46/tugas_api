<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganApiController extends Controller
{
    public function index()
    {
        $all_pelanggan = Pelanggan::all();

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $all_pelanggan
        ]);
    }

    public function store(Request $request)
    {
        $pelanggan = Pelanggan::create([
            'kode_pelanggan' => $request->kode_pelanggan,
            'nama_pelanggan' => $request->nama_pelanggan,
            'jk_pelanggan' => $request->jk_pelanggan,
            'jurusan_pelanggan' => $request->jurusan_pelanggan,
            'no_telp_pelanggan' => $request->no_telp_pelanggan,
            'alamat_pelanggan' => $request->alamat_pelanggan,
        ]);

        return response()->json([
            'message' => 'POST',
            'status' => 200,
            'data' => $pelanggan
        ]);
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $pelanggan
        ]);
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->delete();

        return response()->json([
            'message' => 'DEL',
            'status' => 200,
            'data' => $pelanggan
        ]);
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $after = $pelanggan->update([
            'kode_pelanggan' => $request->kode_pelanggan,
            'nama_pelanggan' => $request->nama_pelanggan,
            'jk_pelanggan' => $request->jk_pelanggan,
            'jurusan_pelanggan' => $request->jurusan_pelanggan,
            'no_telp_pelanggan' => $request->no_telp_pelanggan,
            'alamat_pelanggan' => $request->alamat_pelanggan,
        ]);

        return response()->json([
            'message' => 'UPD',
            'status' => 200,
            'data' => $after
        ]);
    }
}
