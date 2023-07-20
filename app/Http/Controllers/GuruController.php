<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Guru::all();
        return view('guru.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Guru::create([
            'guru_nip' => $request->guru_nip,
            'guru_nama' => $request->guru_nama,
            'guru_jk' => $request->guru_jk,
            'guru_tamatan' => $request->guru_tamatan
        ]);
        return redirect('guru');
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
        $row = Guru::find($id);
        return view('guru.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $row = Guru::findOrFail($id);
        $row->update([
            'guru_nip' => $request->guru_nip,
            'guru_nama' => $request->guru_nama,
            'guru_jk' => $request->guru_jk,
            'guru_tamatan' => $request->guru_tamatan
        ]);
        return redirect('guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $row = Guru::findOrFail($id);
        $row->delete();
        return redirect('guru');
    }
}
