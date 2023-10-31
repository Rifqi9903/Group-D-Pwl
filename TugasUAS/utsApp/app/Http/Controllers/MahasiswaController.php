<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index' , ['mahasiswas' => $mahasiswas]);

    }

    public function add(){
        return view('mahasiswa.add');
    }

    public function daftar(Request $request){
        $data = $request->validate([
            'npm' => 'required|numeric',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);

        $newMahasiswa = Mahasiswa::create($data);

        return redirect(route('mahasiswa.index'));
    }

    public function edit(Mahasiswa $mahasiswa){
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Mahasiswa $mahasiswa, Request $request){
        $data = $request->validate([
            'npm' => 'required|numeric',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);

        $mahasiswa->update($data);

        return redirect(route('mahasiswa.index'))->with('success', 'Update Mahasiswa Berhasil');
    }

    public function destroy(Mahasiswa $mahasiswa){
        $mahasiswa->delete();
        return redirect(route('mahasiswa.index'))->with('success', 'Hapus Mahasiswa Berhasil');
    }
}
