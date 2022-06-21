<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['user' => $user], ['cek' => 'user']);
    }

    public function cari(Request $req)
    {
        $cari = $req->cari;
        $user = User::where('nama', 'like', '%' . $cari . '%')->orwhere('nik', 'like', '%' . $cari . '%')->paginate();
        return view('user', ['user' => $user], ['cek' => 'user']);
    }

    public function formUser()
    {
        return view('formUser', ['cek' => 'user']);
    }

    public function saveUser(Request $req){
        $user = User::create([
            'nama' => $req->nama,
            'email' => $req->email,
            'nik' => $req->nik,
            'no_telp' => $req->no_telp,
            'password' => md5($req->password)
        ]);
        return redirect("/user")->with('alertAdd', 'Data Tersimpan');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('editUser', ['user' => $user], ['cek' => 'user']);
    }

    public function updateUser(Request $req, $id)
    {
        $user = User::find($id);
        $user->nik = $req->nik;
        $user->nama = $req->nama;
        $user->no_telp = $req->no_telp;
        $user->email = $req->email;
        $user->save();
        return redirect("/user")->with('alertUpdate', 'Data Berhasil diubah');
    }

    public function hapusUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alertDelete', 'Data Terhapus');
    }

    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('home', ['cek' => 'home']);
    }

    public function cekLogin(Request $req){
        $user = User::where('email', $req->email)->where('password',md5($req->password))->first();
        if ($user){
            Auth::login($user);
            return redirect('/home');
        }
        else {
            return redirect('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect("/")->with('alertLogout', 'You have successfully logged out');
    }
   

    
}
