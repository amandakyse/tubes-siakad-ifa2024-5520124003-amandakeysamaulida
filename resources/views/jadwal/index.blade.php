<!DOCTYPE html>
<html>

<head>
    <title>Data Jadwal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

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

        .sidebar-menu{
            margin-top:20px;
        }

        .sidebar-menu a{
            display:block;
            padding:15px 25px;
            color:white;
            text-decoration:none;
        }

        .sidebar-menu a:hover{
            background:#f4a300;
            color:white;
        }

        .main-content{
            margin-left:250px;
            padding:30px;
        }

        .header-card{
            background:white;
            border-radius:15px;
            padding:25px;
            box-shadow:0 3px 10px rgba(0,0,0,.1);
            margin-bottom:25px;
        }

        .title{
            color:#0b3d91;
            font-weight:bold;
        }

        .card-custom{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
        }

        .table thead{
            background:#0b3d91;
            color:white;
        }

        .btn-tambah{
            background:#0b3d91;
            color:white;
        }

        .btn-edit{
            background:#f4a300;
            color:white;
        }

        .btn-hapus{
            background:#dc3545;
            color:white;
        }

        .btn-kembali{
            background:#6c757d;
            color:white;
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

    <div class="header-card">

        <h2 class="title">Data Jadwal</h2>

        <p class="text-muted mb-0">
            Dashboard / Data Jadwal
        </p>

    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h4>Daftar Jadwal Kuliah</h4>

        <a href="{{ route('jadwal.create') }}" class="btn btn-tambah">
            + Tambah Jadwal
        </a>

    </div>

    <div class="card card-custom">

        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dosen</th>
                        <th>Mata Kuliah</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Ruangan</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($jadwals as $jadwal)

                    <tr>

                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $jadwal->dosen->nama }}</td>
                        <td>{{ $jadwal->mataKuliah->nama_mk }}</td>
                        <td>{{ $jadwal->hari }}</td>
                        <td>{{ $jadwal->jam }}</td>
                        <td>{{ $jadwal->ruangan }}</td>

                        <td>

                            <a href="{{ route('jadwal.edit', $jadwal->id) }}"
                               class="btn btn-edit btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('jadwal.destroy', $jadwal->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-hapus btn-sm">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    </div>

    <br>

    <a href="/admin" class="btn btn-kembali">
        ← Kembali ke Dashboard
    </a>

</div>

</body>
</html>
