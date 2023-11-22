    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>

        <div class = "container mt-3">
            <div class = "row">
                <div class = "col-12">

                    <div class = "py-4">
                        <h2>Tabel Mahasiswa</h2>
                    </div>

                    <table class = "table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Jurusan</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($mahasiswas as $mahasiswa)
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td>{{$mahasiswa->nim}}</td>
                                <td>{{$mahasiswa->nama}}</td>
                                <td>{{$mahasiswa->jenis_kelamin == 'P'?'Perempuan':'Laki-Laki'}}</td>
                                <td>{{$mahasiswa->jurusan}}</td>
                                <td>{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</td>
                            </tr>
                            @empty
                                <td colspan="6" class = "text-center">Tidak ada data...</td>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>