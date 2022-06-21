<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function dosen(){
        $dosen = Dosen::paginate(5);
        return view('dosen',['dosen' => $dosen],['cek' => 'dosen']);
    }

    public function cari(Request $req)
    {
        $cari = $req -> cari;
        $dosen = Dosen::where('nama', 'like', '%'.$cari.'%')->paginate();
        return view('dosen', ['dosen' => $dosen],['cek' => 'dosen']);
    }

    public function formDosen()
    {
        return view('formDosen');
    }

    public function saveDosen(Request $req)
    {
        $pakar = implode(",", $req->get('pakar'));
        Dosen::create
        ([
            'nidn' => $req->nidn,
            'nama' => $req->nama,
            'status' => $req->status,
            'jafung' => $req->jafung,
            'pakar' => $pakar
        ]);
        return redirect('/dosen') -> with('alert', 'Data Berhasil Disimpan');
    }

    public function editDosen($id)
    {
        $dosen = Dosen::find($id);
        return view('editDosen',['dosen' => $dosen]);
    }

    public function updateDosen($id, Request $req)
    {
        $pakar = implode(',' , $req->pakar);
        $dosen = Dosen::find($id);
        $dosen -> nidn = $req -> nidn; 
        $dosen -> nama = $req -> nama; 
        $dosen -> status = $req -> status; 
        $dosen -> jafung = $req -> jafung; 
        $dosen -> pakar = $pakar;
        $dosen -> save();
        return redirect('/dosen') -> with('alert', 'Data Berhasil Terupdate');
    }

    public function hapusDosen($id)
    {
        $dosen = Dosen::find($id);
        $dosen -> delete();
        return redirect('/dosen') -> with('alert', 'Data Berhasil Terhapus');
    }

}
