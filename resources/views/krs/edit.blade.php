<!DOCTYPE html>
<html>

<head>
    <title>Edit KRS</title>

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

            <h2 class="title mb-4">Edit Data KRS</h2>

            <form action="{{ route('krs.update', $krs->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Mahasiswa</label>

                    <select name="mahasiswa_id" class="form-control">

                        @foreach($mahasiswas as $mahasiswa)

                            <option value="{{ $mahasiswa->id }}"
                                {{ $krs->mahasiswa_id == $mahasiswa->id ? 'selected' : '' }}>
                                {{ $mahasiswa->nama }}
                            </option>

                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jadwal</label>

                    <select name="jadwal_id" class="form-control">

                        @foreach($jadwals as $jadwal)

                            <option value="{{ $jadwal->id }}"
                                {{ $krs->jadwal_id == $jadwal->id ? 'selected' : '' }}>
                                {{ $jadwal->mataKuliah->nama_mk }}
                                -
                                {{ $jadwal->hari }}
                            </option>

                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-update">
                    Update
                </button>

                <a href="/krs" class="btn btn-kembali">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
