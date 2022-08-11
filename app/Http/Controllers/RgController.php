<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Session;

class RgController extends Controller
{
    public function index(){
        $bio=User::all();
        return view('',['bio'=>$bio]);
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

        $data=rpl2model::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        if($data){
            Session::flash('sukses','Tambah data sukses!');
            return redirect('');
        }
        // dd($data);
    }

    public function ubah($id){
        $bioUbah=User::findOrFail($id);
        // dd($bioUbah);die();
        return view('', ['bioUbah' => $bioUbah]);
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

        Session::flash('sukses','Updata Data Berhasil!');
        return redirect('');
    }

    public function deleteData($idHapus){
        $bioHapus=User::findOrFail($idHapus);
        $bioHapus->delete();
        Session::flash('sukses','Hapus Data Berhasil!');
        return redirect('');
    }
}
