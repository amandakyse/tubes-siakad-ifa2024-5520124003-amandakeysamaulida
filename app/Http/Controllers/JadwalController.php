<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        $dosens = Dosen::all();
        $mataKuliahs = MataKuliah::all();

        return view('jadwal.create', compact('dosens', 'mataKuliahs'));
    }

    public function store(Request $request)
    {
        Jadwal::create([
            'dosen_id' => $request->dosen_id,
            'mata_kuliah_id' => $request->mata_kuliah_id,
            'hari' => $request->hari,
            'jam' => $request->jam,
            'ruangan' => $request->ruangan
        ]);

        return redirect()->route('jadwal.index');
    }

    public function show(Jadwal $jadwal)
    {
        //
    }

    public function edit(Jadwal $jadwal)
    {
        $dosens = Dosen::all();
        $mataKuliahs = MataKuliah::all();

        return view('jadwal.edit', compact('jadwal', 'dosens', 'mataKuliahs'));
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $jadwal->update([
            'dosen_id' => $request->dosen_id,
            'mata_kuliah_id' => $request->mata_kuliah_id,
            'hari' => $request->hari,
            'jam' => $request->jam,
            'ruangan' => $request->ruangan
        ]);

        return redirect()->route('jadwal.index');
    }

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwal.index');
    }
}
