<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">

                <div class="py-4">
                    <h2>Tabel Mahasiswa</h2>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($mahasiswa)
                            <tr>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-Laki' }}</td>
                                <td>{{ $mahasiswa->jurusan }}</td>
                                <td>{{ $mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat }}</td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data...</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                <form action= "{{route('mahasiswas.edit', $mahasiswa->id)}}">
                    <button button type = "submit" class = "btn btn-primary mb-2">Edit</button>
                </form>

                <form action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button button type = "submit" class = "btn btn-danger mb-2">Delete</button>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
