<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h1>Data Mahasiswa</h1>

<a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>Aksi</th>
    </tr>

    @foreach($mahasiswas as $mahasiswa)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $mahasiswa->nim }}</td>
        <td>{{ $mahasiswa->nama }}</td>
        <td>{{ $mahasiswa->email }}</td>
        <td>{{ $mahasiswa->jurusan }}</td>
        <td>{{ $mahasiswa->semester }}</td>

        <td>
            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</a>

            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
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