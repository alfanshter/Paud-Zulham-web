<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeleksiController extends Controller
{
    public function seleksi_pendaftaran(Request $request)
    {

        $seleksi = User::where('role', 1)->where('is_status', 0)->get();
        $hasil_seleksi = User::where('role', 1)
            ->where('is_status', 1)
            ->orWhere('is_status', 2)
            ->get();

        //jika pencarian 
        if ($request->get('nama') || $request->get('from_date') || $request->get('to_date')) {
            $nama = $request->get('nama');
            $tgl_from = $request->get('from_date');
            $to_date = $request->get('to_date');
            $seleksi = User::where('nama', 'LIKE', "%{$nama}%")
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->where('role', 1)
                ->where('is_status', 0)
                ->get();

            $hasil_seleksi = User::where('nama', 'LIKE', "%{$nama}%")
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->where('role', 1)
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->get();
        }

        return view('seleksi.seleksi-pendaftaran', [
            'seleksi' => $seleksi,
            'hasil_seleksi' => $hasil_seleksi
        ]);
    }

    public function seleksi_diterima(Request $request)
    {
        $acc = User::where('id', $request->id)->update([
            'is_status' => 1
        ]);

        return redirect('/seleksi-pendaftaran')->with('alert', 'Seleksi diterima');
    }

    public function seleksi_ditolak(Request $request)
    {
        $acc = User::where('id', $request->id)->update([
            'is_status' => 2,
            'pesan_seleksi' => $request->pesan_seleksi
        ]);

        return redirect('/seleksi-pendaftaran')->with('alert', 'Seleksi ditolak');
    }
}
