<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Guru;


class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Mapel::all();
        return view('mapel.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $rowsGuru = Guru::all();
        return view('mapel.create', compact('rowsGuru'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Mapel::create([
            'mapel_id_guru' => $request->mapel_id_guru,
            'mapel_kode' => $request->mapel_kode,
            'mapel_nama' => $request->mapel_nama
        ]);
        return redirect('mapel');
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
        $getguru = Guru::all();
        $row = Mapel::find($id);
        $editguru = Guru::find($row->mapel_id_guru);
        return view('mapel.edit', compact('row','editguru','getguru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $row = Mapel::findOrFail($id);
        $row->update([
            'mapel_id_guru' => $request->mapel_id_guru,
            'mapel_kode' => $request->mapel_kode,
            'mapel_nama' => $request->mapel_nama
        ]);
        return redirect('mapel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $row = Mapel::findOrFail($id);
        $row->delete();
        return redirect('mapel');
    }
}
