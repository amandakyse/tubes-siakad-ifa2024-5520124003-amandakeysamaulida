<!DOCTYPE html>
<html>
<head>
    <title>Data KRS</title>
</head>
<body>

<h1>Data KRS</h1>

<a href="{{ route('krs.create') }}">Tambah KRS</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Mahasiswa</th>
        <th>Mata Kuliah</th>
        <th>Dosen</th>
        <th>Hari</th>
        <th>Aksi</th>
    </tr>

    @foreach($krs as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->mahasiswa->nama }}</td>
        <td>{{ $item->jadwal->mataKuliah->nama_mk }}</td>
        <td>{{ $item->jadwal->dosen->nama }}</td>
        <td>{{ $item->jadwal->hari }}</td>

        <td>
            <a href="{{ route('krs.edit', $item->id) }}">Edit</a>

            <form action="{{ route('krs.destroy', $item->id) }}" method="POST">
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