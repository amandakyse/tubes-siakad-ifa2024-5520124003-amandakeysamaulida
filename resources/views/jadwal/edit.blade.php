<!DOCTYPE html>
<html>

<head>
    <title>Edit Jadwal</title>

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

            <h2 class="title mb-4">Edit Data Jadwal</h2>

            <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Dosen</label>

                    <select name="dosen_id" class="form-control">

                        @foreach($dosens as $dosen)

                            <option value="{{ $dosen->id }}"
                                {{ $jadwal->dosen_id == $dosen->id ? 'selected' : '' }}>
                                {{ $dosen->nama }}
                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mata Kuliah</label>

                    <select name="mata_kuliah_id" class="form-control">

                        @foreach($mataKuliahs as $matakuliah)

                            <option value="{{ $matakuliah->id }}"
                                {{ $jadwal->mata_kuliah_id == $matakuliah->id ? 'selected' : '' }}>
                                {{ $matakuliah->nama_mk }}
                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hari</label>
                    <input type="text"
                           name="hari"
                           class="form-control"
                           value="{{ $jadwal->hari }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jam</label>
                    <input type="text"
                           name="jam"
                           class="form-control"
                           value="{{ $jadwal->jam }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Ruangan</label>
                    <input type="text"
                           name="ruangan"
                           class="form-control"
                           value="{{ $jadwal->ruangan }}">
                </div>

                <button type="submit" class="btn btn-update">
                    Update
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
