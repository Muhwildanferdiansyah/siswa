<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::all();
        return view('siswa', [
            'data' => $data
        ]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function insert(Request $s)
    {
        $data = new siswa();
        $data->nama         = $s->nama;
        $data->tgl_lahir    = $s->tgl;
        $data->save();
        return redirect('/')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function tampil($id)
    {
        $data = siswa::find($id);
        return view('tampil', compact('data'));
    }

    public function delete($id)
    {
        $data = siswa::find($id);
        $data->delete();
        return redirect('/')->with('success', 'Data Berhasil Di Hapus');
    }

    public function update(request $r, $id)
    {
        $data = siswa::find($id);
        $data->nama         = $r->nama;
        $data->tgl_lahir    = $r->tgl;
        $data->save();
        $data->update($r->all());

        return redirect('/')->with('success', 'Data Berhasil Di Ubah');
    }
}
