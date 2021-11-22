<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    public function index ()
    {
        $data_mahasiswa = \App\Models\mahasiswa::all();
        return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request)
    {
        \App\Models\mahasiswa::create($request->all());
        return redirect('/mahasiswa');
    }
}
