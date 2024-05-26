<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //index
    public function index()
    {
        $DataMahasiswa = Mahasiswa::all();
        return view('dashboard_mahasiswa', ['KurirData' => $DataMahasiswa]);
    }
    //create
    public function create()
    {
        return view('form_tambah_mahasiswa');
    }
    //proses
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8|unique:mahasiswas',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);
        Mahasiswa::create($validateData);
        return redirect('mahasiswa')->with('pesan', "Tambah data {$validateData['nama']} berhasil");
    }
    //tampil detail mahasiswa
    public function show($mahasiswa)
    {
        $DataMahasiswa = Mahasiswa::find($mahasiswa);
        return view('halaman_profil', ['KurirData' => $DataMahasiswa]);
    }
    //edit data mahasiswa
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('form_edit', ['mahasiswa' => $mahasiswa]);
    }
    //function update
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);
        Mahasiswa::where('id', $mahasiswa->id)->update($validateData);
        return redirect('mahasiswa')->with('pesan', "Update data {$validateData['nama']} berhasil");
    }
    //function delete
    public function delete($mahasiswa) {
        $mahasiswa = Mahasiswa::find($mahasiswa);
        $mahasiswa -> delete();
        return redirect('mahasiswa')->with('pesan', "Hapus data $mahasiswa->nama berhasil");
    }
}
