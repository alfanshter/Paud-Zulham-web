<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index()
    {
        $data = Kegiatan::all();
        return view('kegiatan.kegiatan', ['kegiatan' => $data]);
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

    public function update_kegiatan(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'image|file|max:1024',
            'nama' => 'required',
        ]);



        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            //jika ada foto 
            $validatedData['foto'] = $request->file('foto')->store('foto-kegiatan', 'public');
        }

        Kegiatan::where('id', $request->id)->update($validatedData);

        return redirect("/kegiatan_admin")->with('alert', 'Update Kegiatan berhasil');
    }

    public function delete_kegiatan($id)
    {
        //get data kegiatan
        $data = Kegiatan::where('id', $id)->first();

        $delete = Kegiatan::where('id', $id)->delete();
        Storage::delete($data->foto);
        return redirect("/kegiatan_admin")->with('alert', 'Kegiatan berhasil di hapus ');
    }
}
