<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin SIAKAD</title>
</head>
<body>

<h1>Dashboard Admin SIAKAD</h1>

<h2>Statistik Data</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Data</th>
        <th>Jumlah</th>
    </tr>

    <tr>
        <td>Dosen</td>
        <td>{{ $jumlahDosen }}</td>
    </tr>

    <tr>
        <td>Mahasiswa</td>
        <td>{{ $jumlahMahasiswa }}</td>
    </tr>

    <tr>
        <td>Mata Kuliah</td>
        <td>{{ $jumlahMataKuliah }}</td>
    </tr>

    <tr>
        <td>Jadwal</td>
        <td>{{ $jumlahJadwal }}</td>
    </tr>

    <tr>
        <td>KRS</td>
        <td>{{ $jumlahKrs }}</td>
    </tr>
</table>

<br>

<h3>Menu</h3>

<ul>
    <li><a href="/dosen">Data Dosen</a></li>
    <li><a href="/mahasiswa">Data Mahasiswa</a></li>
    <li><a href="/matakuliah">Data Mata Kuliah</a></li>
    <li><a href="/jadwal">Data Jadwal</a></li>
    <li><a href="/krs">Data KRS</a></li>
</ul>

</body>
</html>