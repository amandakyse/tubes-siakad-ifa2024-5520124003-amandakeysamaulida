<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required'
        ]);

        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ]);

        return redirect()->route('dosen.index')
            ->with('success', 'Data dosen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required'
        ]);

        $dosen->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ]);

        return redirect()->route('dosen.index')
            ->with('success', 'Data dosen berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')
            ->with('success', 'Data dosen berhasil dihapus');
    }
}
