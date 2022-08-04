<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rpl2Model;

use Session;

class bioController extends Controller
{
    public function index(){
        $bio=rpl2model::all();
        return view('pages.tampil',['bio'=>$bio]);
    }

    public function simpanData(Request $request){
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nis' => 'required|max:8|min:8',
            'tgl' => 'required'
        ],
        [
            'nama.required'=>'Nama harus diisi',
            'kelas.required'=>'Kelas harus diisi',
            'nis.required'=>'NIS harus diisi',
            'tgl.required'=>'Tanggal harus diisi',
        ]);

        $data=rpl2model::create([
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'nis'=>$request->nis,
            'tgl'=>$request->tgl,
        ]);

        if($data){
            Session::flash('sukses','Tambah data sukses!');
            return redirect('/input');
        }

        // dd($data);
    }
}
