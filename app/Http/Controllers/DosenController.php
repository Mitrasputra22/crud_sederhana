<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //index
    public function index() {
        $DataDosen = Dosen::all();
        return view('dashboard_dosen', ['KurirData' => $DataDosen]);
    }
    //create dosen
    public function create() {
        return view('form_tambah_dosen');
    }
    //proses
    public function store_dosen(Request $request)
    {
        $validateData = $request->validate([
            'nidn' => 'required|size:5|unique:dosens',
            'nama_dosen' => 'required|min:3|max:50',
            'alamat' => 'required',
            'no_tlp' => 'required',
        ]);
        Dosen::create($validateData);
        return redirect('dosen')->with('pesan', "Tambah data {$validateData['nama_dosen']} berhasil");
    }
    //deatil dari dosen
    public function show($dosen) {
        $DataDosen = Dosen::find($dosen);
        return view('halaman_profil_dosen', ['KurirData' => $DataDosen]);
    }
    //update and edit
    public function edit(Dosen $dosen) {
        return view ('form_edit_dosen', ['dosen' => $dosen]);
    }

    public function update(Request $request, Dosen $dosen) {
        $validateData = $request->validate([
            'nidn' => 'required|size:5|unique:dosens,nidn,'.$dosen->id,
            'nama_dosen' => 'required|min:3|max:50',
            'alamat' => 'required',
            'no_tlp' => 'required',
        ]);
        Dosen::where('id', $dosen->id)->update($validateData);
        return redirect('dosen')->with('pesan', "Update data {$validateData['nama_dosen']} berhasil");
    }
    //delete data dosen
    public function delete($dosen) {
        $dosen = Dosen::find($dosen);
        $dosen -> delete();
        return redirect('dosen')->with('pesan', "Hapus data $dosen->nama_dosen berhasil");
    }
}
