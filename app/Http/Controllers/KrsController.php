<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index()
    {
        $krs = Krs::all();
        return view('krs.index', compact('krs'));
    }

    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $jadwals = Jadwal::all();

        return view('krs.create', compact('mahasiswas', 'jadwals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'jadwal_id' => 'required'
        ]);

        Krs::create([
            'mahasiswa_id' => $request->mahasiswa_id,
            'jadwal_id' => $request->jadwal_id
        ]);

        return redirect()->route('krs.index')
            ->with('success', 'Data KRS berhasil ditambahkan');
    }

    public function show(Krs $krs)
    {
        //
    }

    public function edit(Krs $krs)
    {
        $mahasiswas = Mahasiswa::all();
        $jadwals = Jadwal::all();

        return view('krs.edit', compact('krs', 'mahasiswas', 'jadwals'));
    }

    public function update(Request $request, Krs $krs)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'jadwal_id' => 'required'
        ]);

        $krs->update([
            'mahasiswa_id' => $request->mahasiswa_id,
            'jadwal_id' => $request->jadwal_id
        ]);

        return redirect()->route('krs.index')
            ->with('success', 'Data KRS berhasil diperbarui');
    }

    public function destroy(Krs $krs)
    {
        $krs->delete();

        return redirect()->route('krs.index')
            ->with('success', 'Data KRS berhasil dihapus');
    }
}
