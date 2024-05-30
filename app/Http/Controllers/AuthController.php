<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function register(){
        return view('register', ['key' => 'register']);
    }
    public function tambahuser(Request $request){
        $user = User::create([
            'id_pengguna' => $request->id_pengguna,
            'nama' => $request->nama,
            'npp' => $request->npp,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'bagian' => $request->bagian,
            'akses' => $request->akses,
            'password' => bcrypt ($request->pw)
        ]);
        return redirect('/user');
    }

    public function login(){
        return view ('login');
    }

    public function ceklogin(Request $request){
        if (!Auth::attempt([
            'nama' => $request -> nama,
            'password' => $request -> pw]))
        {
            return redirect ('/');
        }
        else {
            return redirect ('/ruangrapat');
        }
    }
    
    public function hapususer($id, Request $request){
        $user = User::find($id);
        $user -> delete();
        return redirect('/user');
    }
}