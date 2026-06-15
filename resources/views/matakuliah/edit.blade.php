<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
</head>
<body>

<h1>Edit Mata Kuliah</h1>

<form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>Kode MK</p>
    <input type="text" name="kode_mk" value="{{ $matakuliah->kode_mk }}">

    <p>Nama Mata Kuliah</p>
    <input type="text" name="nama_mk" value="{{ $matakuliah->nama_mk }}">

    <p>SKS</p>
    <input type="number" name="sks" value="{{ $matakuliah->sks }}">

    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>