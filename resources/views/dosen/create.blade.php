<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dosen</title>
</head>
<body>

<h1>Tambah Dosen</h1>

<form action="{{ route('dosen.store') }}" method="POST">
    @csrf

    <p>NIDN</p>
    <input type="text" name="nidn">

    <p>Nama</p>
    <input type="text" name="nama">

    <p>Email</p>
    <input type="email" name="email">

    <p>No HP</p>
    <input type="text" name="no_hp">

    <br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>