<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function fasilitas_admin()
    {
        $data = Fasilitas::all();
        return view('fasilitas.fasilitas-edit', ['fasilitas' => $data]);
    }

    public function fasilitas()
    {
        $data = Fasilitas::all();
        return view('fasilitas.fasilitas', ['fasilitas' => $data]);
    }

    public function tambah_fasilitas(Request $request)
    {

        $validatedData = $request->validate([
            'foto' => 'image|file|max:1024',
            'nama' => 'required',
        ]);

        //jika ada foto 
        $validatedData['foto'] = $request->file('foto')->store('foto-fasilitas', 'public');
        $save = Fasilitas::create($validatedData);
        return redirect("/fasilitas_admin")->with('alert', 'Tambah fasilitas berhasil');
    }

    public function update_fasilitas(Request $request)
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
            $validatedData['foto'] = $request->file('foto')->store('foto-fasilitas', 'public');
        }

        Fasilitas::where('id', $request->id)->update($validatedData);

        return redirect("/fasilitas_admin")->with('alert', 'Update fasilitas berhasil');
    }

    public function delete_fasilitas($id)
    {
        //get data fasilitas
        $data = Fasilitas::where('id', $id)->first();

        $delete = Fasilitas::where('id', $id)->delete();
        Storage::delete($data->foto);
        return redirect("/fasilitas_admin")->with('alert', 'fasilitas berhasil di hapus ');
    }
}
