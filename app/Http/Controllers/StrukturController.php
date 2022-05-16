<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    public function index_admin()
    {
        $struktur = Struktur::first();
        return view('struktur.struktur-edit', ['struktur' => $struktur]);
    }

    public function index()
    {
        return view('struktur.struktur');
    }

    public function update_struktur(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'image|file|max:1024'
        ]);

        //cek foto
        $data = Struktur::first();
        //jika kosong
        if ($data == null) {
            $validatedData['foto'] = $request->file('foto')->store('foto-struktur', 'public');
            $upload = Struktur::create($validatedData);
            return redirect("/struktur_admin")->with('alert', 'Upload foto berhasil');
        }

        //jika ada foto 
        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto'] = $request->file('foto')->store('foto-struktur', 'public');
        }

        DB::table('strukturs')->update($validatedData);

        return redirect("/struktur_admin")->with('alert', 'Update foto berhasil');
    }
}
