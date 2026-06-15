<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
</head>
<body>

    <h1>Data Dosen</h1>

    <a href="{{ route('dosen.create') }}">Tambah Dosen</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Aksi</th>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No HP</th>
        </tr>

        @foreach($dosens as $dosen)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dosen->nidn }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->email }}</td>
            <td>{{ $dosen->no_hp }}</td>
            <td>
                <a href="{{ route('dosen.edit', $dosen->id) }}">Edit</a>

                <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST">
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