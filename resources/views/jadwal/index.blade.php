<!DOCTYPE html>
<html>
<head>
    <title>Data Jadwal</title>
</head>
<body>

<h1>Data Jadwal</h1>

<a href="{{ route('jadwal.create') }}">Tambah Jadwal</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Dosen</th>
        <th>Mata Kuliah</th>
        <th>Hari</th>
        <th>Jam</th>
        <th>Ruangan</th>
        <th>Aksi</th>
    </tr>

    @foreach($jadwals as $jadwal)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $jadwal->dosen->nama }}</td>
        <td>{{ $jadwal->mataKuliah->nama_mk }}</td>
        <td>{{ $jadwal->hari }}</td>
        <td>{{ $jadwal->jam }}</td>
        <td>{{ $jadwal->ruangan }}</td>

        <td>
            <a href="{{ route('jadwal.edit', $jadwal->id) }}">Edit</a>

            <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>