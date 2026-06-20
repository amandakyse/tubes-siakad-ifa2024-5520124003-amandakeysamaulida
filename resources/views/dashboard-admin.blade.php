<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin SIAKAD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            background:#f4f6fb;
            font-family:'Segoe UI',sans-serif;
        }

        .sidebar{
            width:250px;
            height:100vh;
            background:linear-gradient(180deg,#0b3d91,#072b66);
            position:fixed;
            left:0;
            top:0;
            color:white;
        }

        .logo{
            padding:25px;
            text-align:center;
            border-bottom:1px solid rgba(255,255,255,.2);
        }

        .logo h3{
            margin:0;
            font-weight:bold;
        }

        .sidebar-menu{
            margin-top:20px;
        }

        .sidebar-menu a{
            display:block;
            padding:15px 25px;
            text-decoration:none;
            color:white;
            transition:.3s;
        }

        .sidebar-menu a:hover{
            background:#f4a300;
            color:white;
        }

        .main-content{
            margin-left:250px;
            padding:30px;
        }

        .header{
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 3px 15px rgba(0,0,0,.08);
            margin-bottom:25px;
        }

        .header h2{
            color:#0b3d91;
            font-weight:bold;
        }

        .header h4{
            color:#f4a300;
            font-weight:bold;
        }

        .info-box{
            background:white;
            border-left:5px solid #0b3d91;
            padding:20px;
            border-radius:10px;
            margin-bottom:25px;
            box-shadow:0 3px 10px rgba(0,0,0,.08);
        }

        .stat-card{
            border-radius:15px;
            color:white;
            padding:20px;
            box-shadow:0 4px 15px rgba(0,0,0,.1);
        }

        .card-dosen{
            background:linear-gradient(135deg,#4e73df,#224abe);
        }

        .card-mahasiswa{
            background:linear-gradient(135deg,#1cc88a,#13855c);
        }

        .card-mk{
            background:linear-gradient(135deg,#f6c23e,#dda20a);
        }

        .card-jadwal{
            background:linear-gradient(135deg,#36b9cc,#258391);
        }

        .card-krs{
            background:linear-gradient(135deg,#e74a3b,#c0392b);
        }

        .stat-card h1{
            font-size:42px;
            font-weight:bold;
        }

        .menu-title{
            color:#0b3d91;
            font-weight:bold;
            margin-bottom:20px;
        }

        .menu-card{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
            transition:.3s;
        }

        .menu-card:hover{
            transform:translateY(-5px);
        }

        .menu-card a{
            text-decoration:none;
            color:#0b3d91;
            font-weight:bold;
            font-size:18px;
        }
    </style>
</head>

<body>

<div class="sidebar">

    <div class="logo">
        <h3>SIAKAD</h3>
        <small>Universitas Suryakancana</small>
    </div>

    <div class="sidebar-menu">
        <a href="/admin">🏠 Dashboard</a>
        <a href="/dosen">👨‍🏫 Dosen</a>
        <a href="/mahasiswa">🎓 Mahasiswa</a>
        <a href="/matakuliah">📚 Mata Kuliah</a>
        <a href="/jadwal">📅 Jadwal Kuliah</a>
        <a href="/krs">📝 KRS</a>
    </div>

</div>

<div class="main-content">

    <div class="header">

        <h2>Sistem Informasi Akademik</h2>

        <h4>Universitas Suryakancana</h4>

        <hr>

        <h5>Selamat Datang Administrator</h5>

        <p>
            Sistem Informasi Akademik Universitas Suryakancana digunakan
            untuk mengelola data dosen, mahasiswa, mata kuliah,
            jadwal perkuliahan dan KRS mahasiswa secara terintegrasi.
        </p>

        <small>
            Tahun Akademik 2025/2026
        </small>

    </div>

    <div class="info-box">

        <h5>📢 Informasi Sistem</h5>

        <p class="mb-0">
            Dashboard ini digunakan untuk memantau seluruh data akademik
            Universitas Suryakancana secara terpusat dan real-time.
        </p>

    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="stat-card card-dosen">
                <h5>Total Dosen</h5>
                <h1>{{ $jumlahDosen }}</h1>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card card-mahasiswa">
                <h5>Total Mahasiswa</h5>
                <h1>{{ $jumlahMahasiswa }}</h1>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card card-mk">
                <h5>Total Mata Kuliah</h5>
                <h1>{{ $jumlahMataKuliah }}</h1>
            </div>
        </div>

        <div class="col-md-6">
            <div class="stat-card card-jadwal">
                <h5>Total Jadwal</h5>
                <h1>{{ $jumlahJadwal }}</h1>
            </div>
        </div>

        <div class="col-md-6">
            <div class="stat-card card-krs">
                <h5>Total KRS</h5>
                <h1>{{ $jumlahKrs }}</h1>
            </div>
        </div>

    </div>

    <br><br>

    <h3 class="menu-title">Menu Cepat</h3>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card menu-card">
                <div class="card-body text-center">
                    <a href="/dosen">Kelola Dosen</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card menu-card">
                <div class="card-body text-center">
                    <a href="/mahasiswa">Kelola Mahasiswa</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card menu-card">
                <div class="card-body text-center">
                    <a href="/matakuliah">Kelola Mata Kuliah</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card menu-card">
                <div class="card-body text-center">
                    <a href="/jadwal">Kelola Jadwal</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card menu-card">
                <div class="card-body text-center">
                    <a href="/krs">Kelola KRS</a>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>