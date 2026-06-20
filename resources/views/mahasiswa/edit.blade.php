<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>

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

            <h2 class="title mb-4">Edit Data Mahasiswa</h2>

            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text"
                           name="nim"
                           class="form-control"
                           value="{{ $mahasiswa->nim }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text"
                           name="nama"
                           class="form-control"
                           value="{{ $mahasiswa->nama }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ $mahasiswa->email }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text"
                           name="jurusan"
                           class="form-control"
                           value="{{ $mahasiswa->jurusan }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Semester</label>
                    <input type="number"
                           name="semester"
                           class="form-control"
                           value="{{ $mahasiswa->semester }}">
                </div>

                <button type="submit" class="btn btn-update">
                    Update
                </button>

                <a href="/mahasiswa" class="btn btn-kembali">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
