<?php

namespace App\Http\Controllers;

use App\Models\Paud;
use App\Models\PaudInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PaudController extends Controller
{
    public function info_admin()
    {
        $info = PaudInfo::first();
        $paud = Paud::all();
        return view('paud.info-edit', [
            'info' => $info,
            'paud' => $paud
        ]);
    }

    public function info()
    {
        $info = PaudInfo::first();
        $paud = Paud::all();

        return view('paud.info', [
            'info' => $info,
            'paud' => $paud
        ]);
    }

    public function update_info(Request $request)
    {
        $validatedData = $request->validate([
            'alamat' => 'required',
            'wa' => 'required',
            'email' => 'required'
        ]);
        //cek data
        $cek = PaudInfo::first();
        if ($cek == null) {
            $tambah = PaudInfo::create($validatedData);
            return redirect('/info_admin')->with('alert', 'Tambah Paud berhasil');
        }

        $update = DB::table('paud_infos')->update($validatedData);
        return redirect('/info_admin')->with('alert', 'Update Paud berhasil');
    }

    public function tambah_info(Request $request)
    {

        $validatedData = $request->validate([
            'foto' => 'image|file|max:1024',
            'nama' => 'required',
        ]);

        //jika ada foto 
        $validatedData['foto'] = $request->file('foto')->store('foto-info', 'public');
        $save = Paud::create($validatedData);
        return redirect("/info_admin")->with('alert', 'Tambah info berhasil');
    }

    public function update_paud(Request $request)
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
            $validatedData['foto'] = $request->file('foto')->store('foto-info', 'public');
        }

        Paud::where('id', $request->id)->update($validatedData);

        return redirect("/info_admin")->with('alert', 'Update paud berhasil');
    }

    public function delete_paud($id)
    {
        //get data paud
        $data = Paud::where('id', $id)->first();

        $delete = Paud::where('id', $id)->delete();
        Storage::delete($data->foto);
        return redirect("/info_admin")->with('alert', 'paud berhasil di hapus ');
    }
}
