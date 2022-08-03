<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bioController extends Controller
{
    public function simpanData(Request $request){
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'nis' => 'required',
            'tgl' => 'required'
        ]);
    }
}
