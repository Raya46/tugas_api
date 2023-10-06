<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rak = Rak::all();

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $rak
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rak = Rak::create([
            'nama_rak' => $request->nama_rak,
            'lokasi_rak' => $request->lokasi_rak,
            'id_buku' => $request->id_buku,
        ]);

        return response()->json([
            'message' => 'POST',
            'status' => 200,
            'data' => $rak
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rak = Rak::findOrFail($id);

        return response()->json([
            'message' => 'GET',
            'status' => 200,
            'data' => $rak
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rak = Rak::findOrFail($id);

        $rak->update([
            'nama_rak' => $request->nama_rak,
            'lokasi_rak' => $request->lokasi_rak,
            'id_buku' => $request->id_buku,
        ]);

        return response()->json([
            'message' => 'UPD',
            'status' => 200,
            'data' => $rak
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rak = Rak::findOrFail($id);

        $rak->delete();

        return response()->json([
            'message' => 'DEL',
            'status' => 200,
            'data' => $rak
        ]);
    }
}
