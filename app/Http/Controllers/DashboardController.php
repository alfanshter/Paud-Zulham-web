<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_admin()
    {
        return view('dashboard.dashboard-admin');
    }

    public function dashboard()
    {
        $data_siswa = User::where('role', 1)
            ->where('is_status', 1)
            ->where('id', auth()->user()->id)
            ->first();


        return view('dashboard.dashboard', ['item' => $data_siswa]);
    }
}
