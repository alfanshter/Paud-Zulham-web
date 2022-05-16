<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('kegiatan.kegiatan');
    }

    public function index_admin()
    {
        $data = Kegiatan::all();
        return view('kegiatan.kegiatan-edit', ['kegiatan' => $data]);
    }

    public function tambah_kegiatan(Request $request)
    {

        $validatedData = $request->validate([
            'foto' => 'image|file|max:1024',
            'nama' => 'required',
        ]);

        //jika ada foto 
        $validatedData['foto'] = $request->file('foto')->store('foto-kegiatan', 'public');
        $save = Kegiatan::create($validatedData);
        return redirect("/kegiatan_admin")->with('alert', 'Tambah Kegiatan berhasil');
    }
}
