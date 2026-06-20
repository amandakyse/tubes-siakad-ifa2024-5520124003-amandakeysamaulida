<!DOCTYPE html>
<html>
<head>
    <title>Edit Jadwal</title>
</head>
<body>

<h1>Edit Jadwal</h1>

<form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>Dosen</p>
    <select name="dosen_id">
        @foreach($dosens as $dosen)
            <option value="{{ $dosen->id }}"
                {{ $jadwal->dosen_id == $dosen->id ? 'selected' : '' }}>
                {{ $dosen->nama }}
            </option>
        @endforeach
    </select>

    <p>Mata Kuliah</p>
    <select name="mata_kuliah_id">
        @foreach($mataKuliahs as $matakuliah)
            <option value="{{ $matakuliah->id }}"
                {{ $jadwal->mata_kuliah_id == $matakuliah->id ? 'selected' : '' }}>
                {{ $matakuliah->nama_mk }}
            </option>
        @endforeach
    </select>

    <p>Hari</p>
    <input type="text" name="hari" value="{{ $jadwal->hari }}">

    <p>Jam</p>
    <input type="text" name="jam" value="{{ $jadwal->jam }}">

    <p>Ruangan</p>
    <input type="text" name="ruangan" value="{{ $jadwal->ruangan }}">

    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>