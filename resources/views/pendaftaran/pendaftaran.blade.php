                    @if (session()->has('success'))
                        <div class="alert alert-success mt-2" role="alert">
                            {{session('success')}}  
                        </div>
                    @endif

@extends('layout',['tittle'=> "FORMULIR PENDAFTARAN SISWA BARU"])
@section('content')

                     @error('foto')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{$message}}  
                    </div>                        
                    @enderror

                     @error('foto_kk')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{$message}}  
                    </div>                        
                    @enderror

                     @error('foto_akte')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{$message}}  
                    </div>                        
                    @enderror


<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue row">
    <div class="col-md-3">
        <div class="bg-blue text-center py-2">
            <h2><b>LOGIN</b></h2>
        </div>
        <div class="bg-secondary-blue px-5 py-5">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" required name="username" class="form-control" id="exampleFormControlInput1" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" required name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn  bg-blue border border-dark border-1" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    <form action="/pendaftaran" class="col-md-9" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <div class="bg-blue py-2 px-4">
                <h2><b>BIODATA SISWA</b></h2>
            </div>
            <div class="bg-secondary-blue px-5 py-5">
                <form action="" class="fs-4">
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA SISWA</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama" name="nama" required placeholder="NAMA SISWA">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required placeholder="TEMPAT LAHIR">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required placeholder="TANGGAL">
                        </div>
                        {{--<div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="BULAN">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="TAHUN">
                        </div>--}}
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                        <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" name="jk" required>
                                <option value="PRIA">PRIA</option>
                                <option value="WANITA">WANITA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nik" name="nik" required placeholder="NIK">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ALAMAT</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="alamat" required name="alamat" placeholder="ALAMAT">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">AGAMA</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="agama" required id="agama" placeholder="AGAMA">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NO TELPON</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="no_telp" required id="no_telp" placeholder="NO TELPON">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Apakah siswa penerima KPS</label>
                        <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" name="penerima_kps" required>
                                <option value="1">YA</option>
                                <option value="0">TIDAK</option>
                            </select>

                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NO KPS</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="no_kps" name="no_kps" required placeholder="YA/TIDAK">
                            <small class="fs-5">*Jika Tidak Memiliki Harap Diisi “0”</small>
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO</label>
                        <div class="col-sm-4">
                            <input class="form-control" name="foto" required type="file" id="formFile">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO KK</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="file" name="foto_kk" required id="formFile">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO AKTE</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="file" name="foto_akte" required id="formFile">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-sm-4">
                            <input type="email" name="email" required class="form-control" id="email" placeholder="EMAIL">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">JENIS TINGGAL</label>
                        <div class="col-sm-4">
                            <input type="text" name="jenis_tinggal" required class="form-control" id="jenis_tinggal" placeholder="JENIS TINGGAL">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ALAT TRANSPORTASI</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="alat_transportasi" name="alat_transportasi" required placeholder="ALAT TRANSPORTASI">
                        </div>
                    </div>
                </form>
            </div>


            <div class="bg-blue py-2 px-4 mt-5">
                <h2><b>BIODATA AYAH</b></h2>
            </div>
            <div class="bg-secondary-blue px-5 py-5">
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA AYAH</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nama_ayah" required id="nama_ayah" placeholder="NAMA AYAH">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="tempat_lahir_ayah" id="tempat_lahir_ayah" required placeholder="TEMPAT LAHIR">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" required placeholder="TANGGAL">
                        </div>
                        {{--<div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="BULAN">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="TAHUN">
                        </div>--}}
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nik_ayah" required id="nik_ayah" placeholder="NIK">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENDIDIKAN TERAKHIR</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="pendidikan_terakhir_ayah" required id="pendidikan_terakhir_ayah" placeholder="PENDIDIKAN TERAKHIR">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PEKERJAN</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="pekerjaan_ayah" required id="pekerjaan_ayah" placeholder="PEKERJAN">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">STATUS</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="status_ayah" required id="status_ayah" placeholder="MASIH HIDUP/MENINGGAL">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENGHASILAN</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" required name="penghasilan_ayah" id="penghasilan_ayah" placeholder="PENGHASILAN">
                        </div>
                    </div>


            </div>

            <div class="bg-blue py-2 px-4 mt-5">
                <h2><b>BIODATA IBU</b></h2>
            </div>
            <div class="bg-secondary-blue px-5 py-5">
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA IBU</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nama_ibu" required id="nama_ibu" placeholder="NAMA IBU">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" required name="tempat_lahir_ibu" id="tempat_lahir_ibu" placeholder="TEMPAT LAHIR">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" required placeholder="TANGGAL">
                        </div>
                        {{--<div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="BULAN">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="TAHUN">
                        </div>--}}
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nik_ibu" required id="nik_ibu" placeholder="NIK">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENDIDIKAN TERAKHIR</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="pendidikan_terakhir_ibu" required id="pendidikan_terakhir_ibu" placeholder="PENDIDIKAN TERAKHIR">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PEKERJAN</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="pekerjaan_ibu" required id="pekerjaan_ibu" placeholder="PEKERJAN">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">STATUS</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="status_ibu" name="status_ibu" required placeholder="MASIH HIDUP/MENINGGAL">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENGHASILAN</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="penghasilan_ibu" required id="penghasilan_ibu" placeholder="PENGHASILAN">
                        </div>
                    </div>

            </div>

            <button type="submit" class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 rounded">KIRIM</button>
            <p class="fs-4">*Dengan Mengirim, berarti menyetujui untuk mengikuti segala ketentuan dan tata tertib
                yang sudah di berlakukan oleh Paud Assbiyan.
            </p>



        </div>
    </form>



</div>
@endsection