<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
</head>
<body>

<h1>Edit Dosen</h1>

<form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>NIDN</p>
    <input type="text" name="nidn" value="{{ $dosen->nidn }}">

    <p>Nama</p>
    <input type="text" name="nama" value="{{ $dosen->nama }}">

    <p>Email</p>
    <input type="email" name="email" value="{{ $dosen->email }}">

    <p>No HP</p>
    <input type="text" name="no_hp" value="{{ $dosen->no_hp }}">

    <br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>