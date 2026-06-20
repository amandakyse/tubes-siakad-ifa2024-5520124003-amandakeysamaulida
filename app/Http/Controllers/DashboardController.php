<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Jadwal;
use App\Models\Krs;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahDosen = Dosen::count();
        $jumlahMahasiswa = Mahasiswa::count();
        $jumlahMataKuliah = MataKuliah::count();
        $jumlahJadwal = Jadwal::count();
        $jumlahKrs = Krs::count();

        return view('dashboard-admin', compact(
            'jumlahDosen',
            'jumlahMahasiswa',
            'jumlahMataKuliah',
            'jumlahJadwal',
            'jumlahKrs'
        ));
    }
}