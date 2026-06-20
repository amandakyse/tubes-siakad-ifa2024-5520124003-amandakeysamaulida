<!DOCTYPE html>
<html>

<head>
    <title>Edit Dosen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #eef3f8;
        }

        .card-custom {
            border: none;
            border-top: 5px solid #f4a300;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .1);
            border-radius: 10px;
        }

        .title {
            color: #0b3d91;
            font-weight: bold;
        }

        .btn-update {
            background: #0b3d91;
            color: white;
            border: none;
        }

        .btn-update:hover {
            background: #082d6b;
            color: white;
        }

        .btn-kembali {
            background: #f4a300;
            color: white;
            border: none;
        }

        .btn-kembali:hover {
            background: #d98f00;
            color: white;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card card-custom">
        <div class="card-body">

            <h2 class="title mb-4">Edit Data Dosen</h2>

            <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">NIDN</label>
                    <input type="text"
                           name="nidn"
                           class="form-control"
                           value="{{ $dosen->nidn }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text"
                           name="nama"
                           class="form-control"
                           value="{{ $dosen->nama }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ $dosen->email }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">No HP</label>
                    <input type="text"
                           name="no_hp"
                           class="form-control"
                           value="{{ $dosen->no_hp }}">
                </div>

                <button type="submit" class="btn btn-update">
                    Update
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