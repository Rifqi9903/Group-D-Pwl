<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index(){
        $dosens = Dosen::all();
        return view('dosen.index' , ['dosens' => $dosens]);

    }

    public function add(){
        return view('dosen.add');
    }

    public function daftar(Request $request){
        $data = $request->validate([
            'nidn' => 'required|numeric',
            'nama' => 'required',
            ]);

        $newDosen = Dosen::create($data);

        return redirect(route('dosen.index'));
    }

    public function edit(Dosen $dosen){
        return view('dosen.edit', ['dosen' => $dosen]);
    }

    public function update(Dosen $dosen, Request $request){
        $data = $request->validate([
            'nidn' => 'required|numeric',
            'nama' => 'required'
        ]);

        $dosen->update($data);

        return redirect(route('dosen.index'))->with('success', 'Update Dosen Berhasil');
    }

    public function destroy(Dosen $dosen){
        $dosen->delete();
        return redirect(route('dosen.index'))->with('success', 'Hapus Dosen Berhasil');
    }
}
