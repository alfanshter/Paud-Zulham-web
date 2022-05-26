<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function data_siswa(Request $request)
    {
        $data_siswa = User::where('role', 1)
            ->where('is_status', 1)
            ->get();

        //jika pencarian 
        if ($request->get('nama') && $request->get('from_date') || $request->get('to_date')) {
            $nama = $request->get('nama');
            $tgl_from = $request->get('from_date');
            $to_date = $request->get('to_date');

            $data_siswa = User::where('nama', 'LIKE', "%{$nama}%")
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->where('role', 1)
                ->where('is_status', 1)
                ->get();
        } else if ($request->get('nama')) {
            $nama = $request->get('nama');
            $data_siswa = User::where('nama', 'LIKE', "%{$nama}%")
                ->where('role', 1)
                ->where('is_status', 1)
                ->get();
        }



        return view('datasiswa.data-siswa', ['datasiswa' => $data_siswa]);
    }

    public function cetak_kartu($id)
    {
        //get data
        $data = User::where('id', $id)->first();
        $pdf = PDF::loadView('datasiswa.card', ['data' => $data]);
        $pdf->setPaper('A4', '');
        return $pdf->stream();
    }

    public function cetak_pdf($id)
    {
        //get data
        $pendaftaran = User::where('id', $id)->first();
        //idpelatih;
        $pdf = PDF::loadView('pendaftaran.pdf-bukti-pendaftaran', [
            'pendaftaran' => $pendaftaran

        ]);
        $pdf->setPaper('A4', '');


        return $pdf->stream();
    }
}
