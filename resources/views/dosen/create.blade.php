<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dosen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#eef3f8;
        }

        .card-custom{
            border:none;
            border-top:5px solid #f4a300;
            box-shadow:0 4px 15px rgba(0,0,0,.1);
        }

        .title{
            color:#0b3d91;
            font-weight:bold;
        }

        .btn-simpan{
            background:#0b3d91;
            color:white;
        }

        .btn-kembali{
            background:#f4a300;
            color:white;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="card card-custom">
        <div class="card-body">

            <h2 class="title mb-4">Tambah Dosen</h2>

            <form action="{{ route('dosen.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>NIDN</label>
                    <input type="text" name="nidn" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control">
                </div>

                <button type="submit" class="btn btn-simpan">
                    Simpan
                </button>

                <a href="/dosen" class="btn btn-kembali">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
```
