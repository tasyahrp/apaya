<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai', ['pegawais' => $pegawais]);
    }
    
    public function edit(string $id)
    {
        $pegawai = Pegawai::find($id);
        return view('edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request, string $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->name = $request->name;
        $pegawai->posisi = $request->posisi;
        $pegawai->gaji = $request->gaji;
        $pegawai->save();

        return redirect('/');
    }
}
