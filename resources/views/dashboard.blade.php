<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h1 style="font-size:30px;font-weight:bold;color:#0b3d91;">
                    Sistem Informasi Akademik
                </h1>

                <h3 style="margin-top:10px;">
                    Selamat Datang, {{ Auth::user()->name }}
                </h3>

                <p>
                    Universitas Suryakancana
                </p>

                <hr style="margin:20px 0;">

                <div style="display:flex;gap:20px;flex-wrap:wrap;">

                    <a href="/lihat-matakuliah" style="text-decoration:none;">
                        <div style="background:#16a34a;color:white;padding:20px;border-radius:10px;width:250px;">
                            <h4>Mata Kuliah</h4>
                            <p>Lihat daftar mata kuliah yang tersedia.</p>
                        </div>
                    </a>

                    <a href="/lihat-jadwal" style="text-decoration:none;">
                        <div style="background:#2563eb;color:white;padding:20px;border-radius:10px;width:250px;">
                            <h4>Jadwal Kuliah</h4>
                            <p>Lihat jadwal perkuliahan semester aktif.</p>
                        </div>
                    </a>

                    <a href="/lihat-krs" style="text-decoration:none;">
                        <div style="background:#f59e0b;color:white;padding:20px;border-radius:10px;width:250px;">
                            <h4>KRS</h4>
                            <p>Lihat data Kartu Rencana Studi.</p>
                        </div>
                    </a>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
