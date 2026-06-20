<!DOCTYPE html>
<html>
<head>
    <title>Tambah KRS</title>
</head>
<body>

<h1>Tambah KRS</h1>

<form action="{{ route('krs.store') }}" method="POST">
    @csrf

    <p>Mahasiswa</p>
    <select name="mahasiswa_id">
        @foreach($mahasiswas as $mahasiswa)
            <option value="{{ $mahasiswa->id }}">
                {{ $mahasiswa->nama }}
            </option>
        @endforeach
    </select>

    <p>Jadwal</p>
    <select name="jadwal_id">
        @foreach($jadwals as $jadwal)
            <option value="{{ $jadwal->id }}">
                {{ $jadwal->mataKuliah->nama_mk }}
                -
                {{ $jadwal->hari }}
            </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>