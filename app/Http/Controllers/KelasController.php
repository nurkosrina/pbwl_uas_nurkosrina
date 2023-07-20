<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Mapel;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Kelas::all();
        return view('kelas.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $rowsMapel = Mapel::all();
        return view('kelas.create' , compact('rowsMapel'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Kelas::create([
            'kelas_id_mapel' => $request->kelas_id_mapel,
            'kelas_nama' => $request->kelas_nama,
            'kelas_jumlah' => $request->kelas_jumlah
        ]);
        return redirect('kelas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $getmapel = Mapel::all();
        $row = Kelas::find($id);
        $editmapel = Mapel::find($row->kelas_id_mapel);
        return view('kelas.edit', compact('row','editmapel','getmapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $row = Kelas::findOrFail($id);
        $row->update([
            'kelas_id_mapel' => $request->kelas_id_mapel,
            'kelas_nama' => $request->kelas_nama,
            'kelas_jumlah' => $request->kelas_jumlah
        ]);
        return redirect('kelas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $row = Kelas::findOrFail($id);
        $row->delete();
        return redirect('kelas');
    }
}
