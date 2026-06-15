<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
</head>
<body>

<h1>Data Mata Kuliah</h1>

<a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Kode MK</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS</th>
        <th>Aksi</th>
    </tr>

    @foreach($mataKuliahs as $matakuliah)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $matakuliah->kode_mk }}</td>
        <td>{{ $matakuliah->nama_mk }}</td>
        <td>{{ $matakuliah->sks }}</td>

        <td>
            <a href="{{ route('matakuliah.edit', $matakuliah->id) }}">Edit</a>

            <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST">
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