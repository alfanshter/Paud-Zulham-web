<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisiMisiController extends Controller
{

    public function index()
    {
        $visi = Visimisi::select('visi')->first();
        $misi = Visimisi::select('misi')->first();

        return view('visimisi.visimisi', [
            'visi' => $visi,
            'misi' => $misi
        ]);
    }

    public function edit_visimisi()
    {
        $visi = Visimisi::select('visi')->first();
        $misi = Visimisi::select('misi')->first();
        return view('visimisi.visimisi-edit', [
            'visi' => $visi,
            'misi' => $misi
        ]);
    }

    public function update_visi(Request $request)
    {
        $validatedData = $request->validate([
            'visi' => 'required'
        ]);

        //update
        $update = DB::table('visimisis')->update([
            'visi' => $request->visi
        ]);

        return redirect('/visimisi-edit')->with('alert', 'Update visi berhasil');
    }

    public function update_misi(Request $request)
    {
        $validatedData = $request->validate([
            'misi' => 'required'
        ]);

        //update
        $update = DB::table('visimisis')->update([
            'misi' => $request->misi
        ]);

        return redirect('/visimisi-edit')->with('alert', 'Update misi berhasil');
    }
}
