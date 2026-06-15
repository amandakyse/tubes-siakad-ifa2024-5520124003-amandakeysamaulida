<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $mahasiswas = Mahasiswa::all();
    return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
    return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'nim' => 'required',
        'nama' => 'required',
        'email' => 'required|email',
        'jurusan' => 'required',
        'semester' => 'required'
    ]);

    Mahasiswa::create([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'email' => $request->email,
        'jurusan' => $request->jurusan,
        'semester' => $request->semester
    ]);

    return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
    return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
    $mahasiswa->update([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'email' => $request->email,
        'jurusan' => $request->jurusan,
        'semester' => $request->semester
    ]);

    return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
    $mahasiswa->delete();

    return redirect()->route('mahasiswa.index');
    }
}
