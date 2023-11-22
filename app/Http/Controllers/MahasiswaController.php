<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //

    public function index() {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    public function create(){
        return view('form-pendaftaran');
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);

        dump($validateData);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $validateData['nim'];
        $mahasiswa->nama = $validateData['nama'];
        $mahasiswa->email = $validateData['email'];
        $mahasiswa->jenis_kelamin = $validateData['jenis_kelamin'];
        $mahasiswa->jurusan = $validateData['jurusan'];
        $mahasiswa->alamat = $validateData['alamat'];
        $mahasiswa->save();

        return "Data berhasil diinput ke database";


    }

    public function edit($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function showOne($id) {
        $mahasiswa = Mahasiswa::find($id);
    
        if (!$mahasiswa) {
            // Handle the case where the record is not found
            return redirect()->route('mahasiswas.index');
        }
    
        return view('mahasiswa.show', ['mahasiswa' => $mahasiswa]);
    }
    
    

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($validateData);
        // Mahasiswa::where('id', $mahasiswa->id)->update($validateData);

        return redirect()->route('mahasiswas.index', ['mahasiswa' => $mahasiswa->id])->with('pesan', "Update data {$validateData['nama']} berhasil");

    }

    public function destroy($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index')->with('pesan', "Hapus data $mahasiswa->nama berhasil");
    }
}
