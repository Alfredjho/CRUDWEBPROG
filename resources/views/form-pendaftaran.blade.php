<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class ="container pt-4 bg-white">
        <div class = "row">
            <div class = "col-md col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>

                @if ($errors->any())
                    <div class = "alert alert-danger">
                        <ul class = "mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('mahasiswas.store')}}" method = "POST">
                    @csrf
                    <div class ="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class = "form-control" id="nim" name ="nim" value="{{old('nim')}}">
                    </div>

                    <div class ="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class = "form-control" id="nama" name ="nama" value = " {{old('nama')}}">
                    </div>

                    <div class ="form-group">
                        <label for="email">Email</label>
                        <input type="text" class = "form-control" id="email" name ="email" value = " {{old('email')}}">
                    </div>

                    <div class ="form-group">
                        <label>Jenis Kelamin</label>
                        <div>
                            <div class = "form-check form-check-inline">
                                <input class = "form-check-input" type="radio" name = "jenis_kelamin" id="laki-laki" value = "L" @if(old('jenis_kelamin') == "L") checked @endif> 
                                <label class = "form-check-label" for="laki_laki">Laki-Laki</label>
                            </div>

                            <div class = "form-check form-check-inline">
                                <input class = "form-check-input" type="radio" name = "jenis_kelamin" id="perempuan" value = "P" @if(old('jenis_kelamin') == "P") checked @endif>
                                <label class = "form-check-label" for="perempuan">Perempuan</label>
                            </div>

                        </div>
                    </div>

                    <div class ="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class = "form-select" name="jurusan" id="jurusan">
                            <option value="" selected disabled>Pilih salah satu</option>
                            <option value="Teknik Informatika" @if(old('jurusan') == 'Teknik Informatika') selected @endif> Teknik Informatika</option>
                            <option value="Sistem Informasi" @if(old('jurusan') == "Sistem Informasi") selected @endif> Sistem Informasi</option>
                            <option value="Ilmu Komputer" @if(old('jurusan') == "Ilmu Komputer") selected @endif> Ilmu Komputer</option>
                            <option value="Teknik Komputer" @if(old('jurusan') == "Teknik Komputer") selected @endif> Teknik Komputer</option>
                            <option value="Teknik Telekomunikasi" @if(old('jurusan') == "Teknik Telekomunikasi") selected @endif> Teknik Telekomunikasi</option>
                        </select>
                    </div>

                    <div class ="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class = "form-control" id="alamat" rows = "3" name="alamat">{{old('alamat')}}
                        </textarea>
                    </div>

                    <button type = "submit" class = "btn btn-primary mb-2">Daftar</button>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>