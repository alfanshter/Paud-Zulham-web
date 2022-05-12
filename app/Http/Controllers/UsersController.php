<?php

namespace App\Http\Controllers;

use App\Mail\Mailusername;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function pendaftaran()
    {
        return view('pendaftaran.pendaftaran');
    }
    public function pendaftaran_lanjutan()
    {
        return view('pendaftaran.pendaftaran-lanjutan');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'image|file|max:1024',
            'foto_kk' => 'image|file|max:1024',
            'foto_akte' => 'image|file|max:1024'
        ]);

        $data = $request->all();

        $text_username = strtolower($request->nama) . substr($request->nik, -4);
        $username = preg_replace('/\s+/', '', $text_username);
        // remove special karakter
        $password = $this->RemoveSpecialChar($request->tanggal_lahir);
        //dd($this->RemoveSpecialChar('20-06-1998'));
        //upload foto
        if ($request->file('foto') && $request->file('foto_kk') && $request->file('foto_akte')) {
            $data['foto'] = $request->file('foto')->store('public/foto-siswa');
            $data['foto_kk'] = $request->file('foto_kk')->store('public/foto-siswa');
            $data['foto_akte'] = $request->file('foto_akte')->store('public.foto-siswa');
        }


        $data['password'] = Hash::make($password);
        $data['username'] = $username;

        User::create($data);

        return redirect('/pendaftaran-lanjutan');

        //$details = [
        //    'title' => 'Mail from ItSolutionStuff.com',
        //    'body' => 'This is for testing email using smtp'
        //];
        //Mail::to('paudassibyan36@gmail.com')->send(new Mailusername($details));

        //dd('email send');
    }

    // Function to remove the spacial 
    function RemoveSpecialChar($str)
    {

        // Using str_ireplace() function 
        // to replace the word 
        $res = str_ireplace(array(
            '\'', '"',
            '-', ';', '<', '>'
        ), '', $str);

        // returning the result 
        return $res;
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return redirect()->back()->with('alert', 'Login gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function pendaftaran_pdf(Request $request)
    {
        //get data
        $pendaftaran = User::where('id', auth()->user()->id)->first();
        //idpelatih;
        $pdf = Pdf::loadview('pendaftaran.pdf-bukti-pendaftaran', [
            'pendaftaran' => $pendaftaran

        ]);
        return $pdf->stream();
    }
}
