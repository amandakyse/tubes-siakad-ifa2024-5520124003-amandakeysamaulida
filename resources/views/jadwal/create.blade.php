<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jadwal</title>
</head>
<body>

<h1>Tambah Jadwal</h1>

<form action="{{ route('jadwal.store') }}" method="POST">
    @csrf

    <p>Dosen</p>
    <select name="dosen_id">
        @foreach($dosens as $dosen)
            <option value="{{ $dosen->id }}">
                {{ $dosen->nama }}
            </option>
        @endforeach
    </select>

    <p>Mata Kuliah</p>
    <select name="mata_kuliah_id">
        @foreach($mataKuliahs as $matakuliah)
            <option value="{{ $matakuliah->id }}">
                {{ $matakuliah->nama_mk }}
            </option>
        @endforeach
    </select>

    <p>Hari</p>
    <input type="text" name="hari">

    <p>Jam</p>
    <input type="text" name="jam">

    <p>Ruangan</p>
    <input type="text" name="ruangan">

    <br><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>