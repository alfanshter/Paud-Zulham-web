<?php

namespace App\Http\Controllers;

use App\Mail\Mailusername;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    //ADMIN
    public function register()
    {
        return view('admin.register');
    }
    //pendaftaran untuk admin
    public function register_admin(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $validatedData['password'] = Hash::make($request->password);
        $validatedData['role'] = 0;

        User::create($validatedData);

        return redirect('/pendaftaran-lanjutan');
    }

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
            'foto_akte' => 'image|file|max:1024',
        ]);
        $data = $request->all();
        $text_username = strtolower($request->nama) . substr($request->nik, -4);
        $username = preg_replace('/\s+/', '', $text_username);
        // remove special karakter
        $password = $this->RemoveSpecialChar($request->tanggal_lahir);
        //dd($this->RemoveSpecialChar('20-06-1998'));
        //upload foto
        if ($request->file('foto') && $request->file('foto_kk') && $request->file('foto_akte')) {
            $data['foto'] = $request->file('foto')->store('foto-siswa', 'public');
            $data['foto_kk'] = $request->file('foto_kk')->store('foto-siswa', 'public');
            $data['foto_akte'] = $request->file('foto_akte')->store('foto-siswa', 'public');
        }


        $data['password'] = Hash::make($password);
        $data['username'] = $username;

        User::create($data);

        if (auth()->user() && auth()->user()->role == 0) {
            $details = [
                'title' => 'Pendafataran Siswa PAUD ASSIBYAN',
                'body' => "berikut adalah username dan password siswa. username : $username dan password : $password"
            ];
            Mail::to($request->email)->send(new Mailusername($details));
            return redirect('/seleksi-pendaftaran')->with('alert', 'Pendaftaran berhasil');
        }
        $details = [
            'title' => 'Pendafataran Siswa PAUD ASSIBYAN',
            'body' => "berikut adalah username dan password siswa. username : $username dan password : $password"
        ];
        Mail::to($request->email)->send(new Mailusername($details));

        return redirect('/pendaftaran-lanjutan');
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
            if (auth()->user()->role == 1) {
                return redirect()->intended('/');
            } else if (auth()->user()->role == 0) {
                return redirect()->intended('/dashboard-admin');
            }
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
        $pdf = PDF::loadView('pendaftaran.pdf-bukti-pendaftaran', [
            'pendaftaran' => $pendaftaran

        ]);
        $pdf->setPaper('A4', '');


        return $pdf->stream();
    }

    public function update_siswa(Request $request)
    {

        $validatedData = $request->except(['_token', 'oldImage', 'oldImage_kk', 'oldImage_akte']);
        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto'] = $request->file('foto')->store('foto-siswa', 'public');
        }

        if ($request->file('foto_kk')) {
            if ($request->oldImage_kk) {
                Storage::delete($request->oldImage_kk);
            }

            $validatedData['foto_kk'] = $request->file('foto_kk')->store('foto-siswa', 'public');
        }

        if ($request->file('foto_akte')) {
            if ($request->oldImage_akte) {
                Storage::delete($request->oldImage_akte);
            }
            $validatedData['foto_akte'] = $request->file('foto_akte')->store('foto-siswa', 'public');
        }

        User::where('id', $request->id)->update($validatedData);

        return redirect("/seleksi-pendaftaran")->with('alert', 'Update data berhasil');
    }

    public function hapus_siswa($id)
    {
        //get data siswa
        $data = User::where('id', $id)->first();
        //hapus foto
        Storage::delete($data->foto);
        Storage::delete($data->foto_kk);
        Storage::delete($data->foto_akte);

        User::where('id', $id)->delete();

        return redirect("/seleksi-pendaftaran")->with('alert', 'Hapus Siswa berhasil');
    }
}
