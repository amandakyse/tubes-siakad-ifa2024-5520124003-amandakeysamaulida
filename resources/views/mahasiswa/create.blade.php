<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>

<h1>Tambah Mahasiswa</h1>

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf

    <p>NIM</p>
    <input type="text" name="nim">

    <p>Nama</p>
    <input type="text" name="nama">

    <p>Email</p>
    <input type="email" name="email">

    <p>Jurusan</p>
    <input type="text" name="jurusan">

    <p>Semester</p>
    <input type="number" name="semester">

    <br><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>