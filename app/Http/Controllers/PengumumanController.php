<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function pengumuman()
    {
        if (auth()->user()->is_status == 0) {
            return view('pengumuman.hasil-seleksi');
        } elseif (auth()->user()->is_status == 1) {
            return view('pengumuman.hasil-seleksi-diterima');
        } elseif (auth()->user()->is_status == 2) {
            return view('pengumuman.hasil-seleksi-gagal');
        }
    }
}
