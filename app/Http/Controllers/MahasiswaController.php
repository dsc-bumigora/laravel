<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('list_mahasiswa', compact('mahasiswa'));
    }

    public function create()
    {
        return view('add_mahasiswa');
    }

    public function store(Request $request)
    {
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'noHp' => $request->noHp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('index')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('edit_mahasiswa', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->noHp = $request->noHp;
        $mahasiswa->alamat = $request->alamat;

        $mahasiswa->update();

        return redirect()->route('index')->with('success', 'Data Berhasil Di Ubah');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->back()->with('success', 'Data Berhasil Di Hapus');
    }
}
