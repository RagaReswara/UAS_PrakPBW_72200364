<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MhsController extends Controller
{
    public function mhs()
    {
        $mhs = Mahasiswa::orderby('id', 'asc')->paginate(10); //ascending desc diganti asc
        return view('mhs', ['mhs' => $mhs], ['cek' => 'mhs']);
    }

    public function cari(Request $req)
    {
        $cari = $req->cari;
        $mhs = Mahasiswa::where('nama', 'like', '%' . $cari . '%')->orwhere('nim', 'like', '%' . $cari . '%')->paginate();
        return view('mhs', ['mhs' => $mhs], ['cek' => 'mhs']);
    }

    public function formMhs()
    {
        return view('formMhs');
    }

    public function saveMhs(Request $req)
    {
        $bidangMinat = implode(",", $req->get('bidangMinat'));
        Mahasiswa::create([
                'nim' => $req->nim,
                'nama' => $req->nama,
                'gender' => $req->gender,
                'jurusan' => $req->jurusan,
                'bidangMinat' => $bidangMinat
            ]);
        return redirect('/mhs')->with('alertTambah', 'Data Berhasil Disimpan');
    }

    public function editMhs($id)
    {
        $mhs = Mahasiswa::find($id);
        return view('editMhs', ['mhs' => $mhs]);
    }

    public function updateMhs($id, Request $req)
    {
        $bidangMinat = implode(',', $req->bidangMinat);
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $req->nim;
        $mhs->nama = $req->nama;
        $mhs->gender = $req->gender;
        $mhs->jurusan = $req->jurusan;
        $mhs->bidangMinat = $bidangMinat;
        $mhs->save();
        return redirect('/mhs')->with('alertUpdate', 'Data Berhasil Terupdate');
    }

    public function hapusMhs($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return redirect('/mhs')->with('alertDelete', 'Data Berhasil Terhapus');
    }
}
