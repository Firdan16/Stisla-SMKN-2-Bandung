<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Session;

class RgController extends Controller
{
    public function __construct(){
        $this->middleware('check');
    }
    
    public function index(){
        $bio=User::all();
        return view('register.rgTampil',['bio'=>$bio]);
    }

    public function addData(Request $request){
        // $request->validate([
        //     'nama' => 'required',
        //     'kelas' => 'required',
        //     'nis' => 'required|unique:rpl2models|max:8|min:8',
        //     'tgl' => 'required'
        // ],
        // [
        //     'nama.required'=>'Nama harus diisi',
        //     'nis.unique'=>'nis sudah diisi',
        //     'kelas.required'=>'Kelas harus diisi',
        //     'nis.required'=>'NIS harus diisi',
        //     'tgl.required'=>'Tanggal harus diisi',
        // ]);

        $data=User::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        if($data){
            // Session::flash('sukses','Tambah data sukses!');
            return redirect('/rgTambah');
        }
        // dd($data);
    }

    public function updateData($id){
        $bioUbah=User::findOrFail($id);
        // dd($bioUbah);die();
        return view('register.rgEdit', ['bioUbah' => $bioUbah]);
    }

    public function data($id, Request $request){

        // $request->validate([
        //     'nama' => 'required',
        //     'kelas' => 'required',
        //     'nis' => 'required|unique:rpl2models|max:8|min:8',
        //     'tgl' => 'required'
        // ],
        // [
        //     'nama.required'=>'Nama harus diisi',
        //     'nis.unique'=>'nis sudah diisi',
        //     'kelas.required'=>'Kelas harus diisi',
        //     'nis.required'=>'NIS harus diisi',
        //     'tgl.required'=>'Tanggal harus diisi',
        // ]);

        $bioupdate=User::findOrFail($id);
        $bioupdate->nama=$request->nama;
        $bioupdate->email=$request->email;
        $bioupdate->password=$request->password;
        $bioupdate->save();

        Session::flash('sukses','Update Data Berhasil!');
        return redirect('/rgTampil');
    }

    public function deleteData($idHapus){
        $bioHapus=User::findOrFail($idHapus);
        $bioHapus->delete();
        Session::flash('sukses','Hapus Data Berhasil!');
        return redirect('/rgTampil');
    }
}
