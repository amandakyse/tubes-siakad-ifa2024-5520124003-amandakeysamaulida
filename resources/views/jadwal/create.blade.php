<!DOCTYPE html>
<html>

<head>
    <title>Tambah Jadwal</title>

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

        .btn-simpan {
            background: #0b3d91;
            color: white;
            border: none;
        }

        .btn-simpan:hover {
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

            <h2 class="title mb-4">Tambah Data Jadwal</h2>

            <form action="{{ route('jadwal.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Dosen</label>
                    <select name="dosen_id" class="form-control">
                        @foreach($dosens as $dosen)
                            <option value="{{ $dosen->id }}">
                                {{ $dosen->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mata Kuliah</label>
                    <select name="mata_kuliah_id" class="form-control">
                        @foreach($mataKuliahs as $matakuliah)
                            <option value="{{ $matakuliah->id }}">
                                {{ $matakuliah->nama_mk }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hari</label>
                    <input type="text" name="hari" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jam</label>
                    <input type="text" name="jam" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Ruangan</label>
                    <input type="text" name="ruangan" class="form-control">
                </div>

                <button type="submit" class="btn btn-simpan">
                    Simpan
                </button>

                <a href="/jadwal" class="btn btn-kembali">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>