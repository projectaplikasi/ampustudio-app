<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
//
    public function login()
    {
        return view('admin.login');
    }
    //
    public function loginPost(Request $request) 
    { $validator = Validator::make($request->all(), [
       'username'=> 'required',
       'password'=> 'required|min:6',
    ]);
    
    if ($validator->fails()) {
        Alert::error('Gagal', 'Data tidak lengkap');
        return redirect()->back()->withErrors($validator)->withInput();
    } else {
        if (
            Auth::attempt([
                'username' => $request->username,
                'password' => $request->password,
                ])
        ) {
            $request->session()->regenerate();
            Alert::success('Berhasil', 'Selamat Datang di Halaman Admin Ampu');
            return redirect('/admin/halamandataproduk');

        } else {
            Alert::error('Gagal', 'Username atau Password salah');
            return redirect()->back();
        }
    }

        

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::success('Berhasil', 'Anda telah logout');
        return redirect('/admin/login');
    }
}
