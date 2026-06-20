<!DOCTYPE html>
<html>
<head>
    <title>Edit KRS</title>
</head>
<body>

<h1>Edit KRS</h1>

<form action="{{ route('krs.update', $krs->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>Mahasiswa</p>
    <select name="mahasiswa_id">
        @foreach($mahasiswas as $mahasiswa)
            <option value="{{ $mahasiswa->id }}"
                {{ $krs->mahasiswa_id == $mahasiswa->id ? 'selected' : '' }}>
                {{ $mahasiswa->nama }}
            </option>
        @endforeach
    </select>

    <p>Jadwal</p>
    <select name="jadwal_id">
        @foreach($jadwals as $jadwal)
            <option value="{{ $jadwal->id }}"
                {{ $krs->jadwal_id == $jadwal->id ? 'selected' : '' }}>
                {{ $jadwal->mataKuliah->nama_mk }}
                -
                {{ $jadwal->hari }}
            </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit">Update</button>

</form>

</body>
</html>