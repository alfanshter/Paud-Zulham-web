<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function laporan(Request $request)
    {

        $nama = $request->get('nama');
        $tgl_from = $request->get('from_date');
        $to_date = $request->get('to_date');
        $ditolak = $request->get('ditolak');
        $diterima = $request->get('diterima');
        $laporan = User::where('role', 1)
            ->where('is_status', 1)
            ->orWhere('is_status', 2)
            ->get();

        //jika pencarian 
        if ($tgl_from && $to_date && $diterima) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('is_status', $diterima)
                ->where('role', 1)
                ->where('created_at', '>=', $tgl_from)
                ->where('is_status', $diterima)
                ->get();
        } else if ($tgl_from && $to_date && $ditolak) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('is_status', $ditolak)
                ->where('role', 1)
                ->where('created_at', '>=', $tgl_from)
                ->where('is_status', $ditolak)
                ->get();
        } else if ($tgl_from && $diterima && $ditolak) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('role', 1)
                ->where('is_status', $diterima)
                ->orWhere('is_status', $ditolak)
                ->where('created_at', '>=', $tgl_from)
                ->get();
        } else if ($tgl_from && $diterima) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('role', 1)
                ->where('is_status', $diterima)
                ->get();
        } else if ($tgl_from && $ditolak) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('role', 1)
                ->where('is_status', $ditolak)
                ->get();
        } else if ($nama && $diterima) {
            $laporan = User::where('role', 1)
                ->where('is_status', $diterima)
                ->where('nama', 'LIKE', "%$nama%")
                ->get();
        } else if ($nama && $ditolak) {
            $laporan = User::where('role', 1)
                ->where('is_status', $ditolak)
                ->where('nama', 'LIKE', "%$nama%")
                ->get();
        } else if ($nama && $tgl_from) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('nama', 'LIKE', "%$nama%")
                ->where('role', 1)
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->where('created_at', '>=', $tgl_from)
                ->where('nama', 'LIKE', "%$nama%")
                ->get();
        } else if ($nama && $tgl_from && $to_date) {
            $laporan = User::where('role', 1)
                ->where('nama', 'LIKE', "%$nama%")
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->where('nama', 'LIKE', "%$nama%")
                ->get();
        } else if ($tgl_from && $to_date) {
            $laporan = User::where('role', 1)
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->get();
        } else if ($tgl_from) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('role', 1)
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->where('created_at', '>=', $tgl_from)
                ->get();
        } else if ($diterima) {
            $laporan = User::where('role', 1)
                ->where('is_status', $diterima)
                ->get();
        } else if ($ditolak) {
            $laporan = User::where('role', 1)
                ->where('is_status', $ditolak)
                ->get();
        } else if ($nama) {
            $laporan = User::where('role', 1)
                ->where('nama', 'LIKE', "%$nama%")
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->where('nama', 'LIKE', "%$nama%")

                ->get();
        }



        if ($request->unduh) {
            //idpelatih;
            $pdf = PDF::loadView('laporan.cetak_laporan', [
                'datasiswa' => $laporan

            ]);
            $pdf->setPaper('A4', '');


            return $pdf->stream();
        }

        return view('laporan.laporan', ['datasiswa' => $laporan]);
    }

    public function cetak_laporan(Request $request)
    {


        $laporan = User::where('role', 1)
            ->where('is_status', 1)
            ->orWhere('is_status', 2)
            ->get();

        $nama = $request->get('nama');
        $tgl_from = $request->get('from_date');
        $to_date = $request->get('to_date');
        $ditolak = $request->get('ditolak');
        $diterima = $request->get('diterima');
        //jika pencarian 
        if ($tgl_from && $to_date && $diterima) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('is_status', $diterima)
                ->where('role', 1)
                ->where('created_at', '>=', $tgl_from)
                ->where('is_status', $diterima)
                ->get();
        } else if ($tgl_from && $to_date && $ditolak) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('is_status', $ditolak)
                ->where('role', 1)
                ->where('created_at', '>=', $tgl_from)
                ->where('is_status', $ditolak)
                ->get();
        } else if ($tgl_from && $diterima && $ditolak) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('role', 1)
                ->where('is_status', $diterima)
                ->orWhere('is_status', $ditolak)
                ->where('created_at', '>=', $tgl_from)
                ->get();
        } else if ($tgl_from && $diterima) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('role', 1)
                ->where('is_status', $diterima)
                ->get();
        } else if ($tgl_from && $ditolak) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('role', 1)
                ->where('is_status', $ditolak)
                ->get();
        } else if ($nama && $diterima) {
            $laporan = User::where('role', 1)
                ->where('is_status', $diterima)
                ->where('nama', 'LIKE', "%$nama%")
                ->get();
        } else if ($nama && $ditolak) {
            $laporan = User::where('role', 1)
                ->where('is_status', $ditolak)
                ->where('nama', 'LIKE', "%$nama%")
                ->get();
        } else if ($nama && $tgl_from) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('nama', 'LIKE', "%$nama%")
                ->where('role', 1)
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->where('created_at', '>=', $tgl_from)
                ->where('nama', 'LIKE', "%$nama%")
                ->get();
        } else if ($nama && $tgl_from && $to_date) {
            $laporan = User::where('role', 1)
                ->where('nama', 'LIKE', "%$nama%")
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->where('nama', 'LIKE', "%$nama%")
                ->get();
        } else if ($tgl_from && $to_date) {
            $laporan = User::where('role', 1)
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->whereBetween('created_at', [$tgl_from, $to_date])
                ->get();
        } else if ($tgl_from) {
            $laporan = User::where('created_at', '>=', $tgl_from)
                ->where('role', 1)
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->where('created_at', '>=', $tgl_from)
                ->get();
        } else if ($diterima) {
            $laporan = User::where('role', 1)
                ->where('is_status', $diterima)
                ->get();
        } else if ($ditolak) {
            $laporan = User::where('role', 1)
                ->where('is_status', $ditolak)
                ->get();
        } else if ($nama) {
            $laporan = User::where('role', 1)
                ->where('nama', 'LIKE', "%$nama%")
                ->where('is_status', 1)
                ->orWhere('is_status', 2)
                ->where('nama', 'LIKE', "%$nama%")
                ->get();
        }

        //idpelatih;
        $pdf = PDF::loadView('laporan.cetak_laporan', [
            'datasiswa' => $laporan

        ]);
        $pdf->setPaper('A4', '');


        return $pdf->stream();
    }
}
