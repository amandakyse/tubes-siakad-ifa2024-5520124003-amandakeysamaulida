<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
</head>
<body>

<h1>Tambah Mata Kuliah</h1>

<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf

    <p>Kode MK</p>
    <input type="text" name="kode_mk">

    <p>Nama Mata Kuliah</p>
    <input type="text" name="nama_mk">

    <p>SKS</p>
    <input type="number" name="sks">

    <br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>