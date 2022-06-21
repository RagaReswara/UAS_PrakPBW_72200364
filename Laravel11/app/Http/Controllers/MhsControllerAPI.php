<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MhsControllerAPI extends Controller
{
    public function all()
    {
        $mhs = Mahasiswa::all();
        return response() -> json([
            'success' => true,
            'message' => 'Successfully Displayed',
            'data'    => $mhs
        ],200);
    }

    public function addMhs(Request $req)
    {
        $mhs = Mahasiswa::create([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'jurusan' => $req->jurusan,
            'bidangMinat' => $req->bidangMinat
        ]);

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Save Success',
            ],200);
        }
        else
        {
            return response() -> json([
                'success' => false,
                'message' => 'Save Failed',
            ],401);
        }
    }

    public function update($id,Request $req)
    {
        $mhs = Mahasiswa::whereId($id)->update([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'jurusan' => $req->jurusan,
            'bidangMinat' => $req->bidangMinat
        ]);

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Save Success',
            ],200);
        }
        else
        {
            return response() -> json([
                'success' => false,
                'message' => 'Save Failed',
            ],401);
        }
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs -> delete();

        if($mhs)
        {
            return response() -> json([
                'success' => true,
                'message' => 'Delete Success',
            ],200);
        }
        else
        {
            return response() -> json([
                'success' => false,
                'message' => 'Delete Failed',
            ],401); 
        }
    }

}
