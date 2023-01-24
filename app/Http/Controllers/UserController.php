<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     public function index()
    {   
        $user = \App\Models\User::all();
        if(Auth::user()->hasRole('superadmin')){
            return view('superadmin.index', [
                'user' => $user,
            ]);
        }else{
            return view('user.index', [
                'user' => $user,
            ]);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'nik' => 'required',
            'nip' => 'required',
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',

        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->nik = $request->nik;
        $user->nip = $request->nip;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $user->attachRole('admin');
        
        Alert::success('Sukses Tambah', 'Data berhasil ditambahkan');
        // alihkan halaman ke halaman pegawai
        return redirect('/user');
    }

    public function hapus($id)
    {
        // menghapus data user berdasarkan id yang dipilih
        DB::table('users')->where('id', $id)->delete();

        Alert::success('Sukses Hapus', 'Data berhasil Dihapus');
        // alihkan halaman ke halaman informasi tender
        return redirect('/user');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

}
