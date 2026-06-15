<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>

<h1>Edit Mahasiswa</h1>

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>NIM</p>
    <input type="text" name="nim" value="{{ $mahasiswa->nim }}">

    <p>Nama</p>
    <input type="text" name="nama" value="{{ $mahasiswa->nama }}">

    <p>Email</p>
    <input type="email" name="email" value="{{ $mahasiswa->email }}">

    <p>Jurusan</p>
    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}">

    <p>Semester</p>
    <input type="number" name="semester" value="{{ $mahasiswa->semester }}">

    <br><br>

    <button type="submit">Update</button>

</form>

</body>
</html>