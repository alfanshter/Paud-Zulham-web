@extends('layout',['tittle'=> "SELEKSI PENDAFTARAN",'is_login' => true])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue row px-5" style="min-height:20vw;">
    <form action="">
        <button class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 border border-2 border-dark">+ Tambah</button></br>
        <div class="d-flex mt-3" style="gap:20px;">
            <div class="">
                <button class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">Date</button>
            </div>
            <div class="fs-3 align-self-center">From</div>
            <input type="date" class="form-control" id="inputEmail3" placeholder="NAMA SISWA">
            <div class="fs-3 align-self-center">To</div>
            <input type="date" class="form-control" id="inputEmail3" placeholder="NAMA SISWA">
            <button class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">Search</button>
            <button class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">Reset</button>
        </div>      
    </form>
    <form action="" class="col-md-4">
        <div class="d-flex mt-3" style="gap:20px;">
            <div class="">
                <button class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">NAMA</button>
            </div>
            <input type="text" class="form-control" id="inputEmail3" placeholder="NAMA">
        </div>      
    </form>

    <table class="table table-bordered border border-2 border-dark mt-5 fs-3">
        <thead class="bg-blue">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">TANGGAL PENDAFTARAN</th>
            <th scope="col">STATUS</th>
            <th scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Audrey</td>
            <td>08-03-2022</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Gabrielle</td>
            <td>08-03-2022</td>
            <td>Diterima</td>
            <td class="text-center">
                <a class="border-0 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('storage/images/edit.png')}}" alt="" width="50" style="cursor:pointer"></a>
                <a class="border-0"><img src="{{asset('storage/images/delete.png')}}" alt="" width="50" style="cursor:pointer"></a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Steven</td>
            <td>08-03-2022</td>
            <td>Tidak Diterima</td>
            <td class="text-center">
                <a class="border-0 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('storage/images/edit.png')}}" alt="" width="50" style="cursor:pointer"></a>
                <a class="border-0"><img src="{{asset('storage/images/delete.png')}}" alt="" width="50" style="cursor:pointer"></a>
            </td>
          </tr>
         
        </tbody>
      </table>
    
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header bg-secondary-blue border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-secondary-blue">
            <div class="bg-blue py-2 px-4">
                <h2><b>BIODATA SISWA</b></h2>
            </div>
            <div class="bg-secondary-blue px-5 py-5">
                <form action="" class="fs-4">
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA SISWA</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="NAMA SISWA">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="TEMPAT LAHIR">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="TANGGAL">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="BULAN">
                          </div>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="TAHUN">
                          </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
                        <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>JENIS KELAMIN</option>
                                <option value="Pria">PRIA</option>
                                <option value="Wanita">WANITA</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="NIK">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ALAMAT</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="ALAMAT">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">AGAMA</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="AGAMA">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NO TELPON</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="NO TELPON">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Apakah siswa penerima KPS</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="YA/TIDAK">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NO KPS</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="YA/TIDAK">
                          <small class="fs-5">*Jika Tidak Memiliki  Harap Diisi “0”</small>
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO KK</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO AKTE</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-sm-4">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="EMAIL">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">JENIS TINGGAL</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="JENIS TINGGAL">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ALAT TRANSPORTASI</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="ALAT TRANSPORTASI">
                        </div>
                    </div>
                </form>
            </div>
    
    
            <div class="bg-blue py-2 px-4 mt-5">
                <h2><b>BIODATA AYAH</b></h2>
            </div>
            <div class="bg-secondary-blue px-5 py-5">
                <form action="" class="fs-4">
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA AYAH</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="NAMA AYAH">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="TEMPAT LAHIR">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="TANGGAL">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="BULAN">
                          </div>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="TAHUN">
                          </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="NIK">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENDIDIKAN TERAKHIR</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="PENDIDIKAN TERAKHIR">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PEKERJAN</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="PEKERJAN">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">STATUS</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="MASIH HIDUP/MENINGGAL">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENGHASILAN</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="PENGHASILAN">
                        </div>
                    </div>
                    
                </form>
            </div>
    
            <div class="bg-blue py-2 px-4 mt-5">
                <h2><b>BIODATA IBU</b></h2>
            </div>
            <div class="bg-secondary-blue px-5 py-5">
                <form action="" class="fs-4">
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA IBU</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="NAMA IBU">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="TEMPAT LAHIR">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="TANGGAL">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="BULAN">
                          </div>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="TAHUN">
                          </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="NIK">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENDIDIKAN TERAKHIR</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="PENDIDIKAN TERAKHIR">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PEKERJAN</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="PEKERJAN">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">STATUS</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="MASIH HIDUP/MENINGGAL">
                        </div>
                    </div>
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENGHASILAN</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="PENGHASILAN">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="modal-footer bg-primary border-0 d-flex">
                <button type="button" class="btn bg-blue">Diterima</button>
                <button data-bs-toggle="modal" data-bs-target="#exampleModal1" type="button" class="btn bg-blue ms-auto">Tidak Diterima</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header bg-secondary-blue border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-secondary-blue d-flex justify-content-center" style="height:30vw">
          <h1 class=" align-self-center">MAAF ANDA DINYATAKAN TIDAK LOLOS</h1>
        </div>
        <div class="modal-footer bg-primary border-0 d-flex">
                <button type="button" class="btn bg-blue ms-auto">Kirim</button>
        </div>
      </div>
    </div>
  </div>
@endsection