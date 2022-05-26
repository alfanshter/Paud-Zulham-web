@extends('layout',['tittle'=> "DATA SISWA",'is_login' => true])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue row px-5" style="min-height:20vw;">

    <form action="/laporan">
        @csrf
        <div class="d-flex mt-3" style="gap:20px;">
            <div class="">
                <button class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">Date</button>
            </div>
            <div class="fs-3 align-self-center">From</div>
            <input type="date" name="from_date" class="form-control" id="from_date" placeholder="NAMA SISWA">
            <div class="fs-3 align-self-center">To</div>
            <input type="date" name="to_date" class="form-control" id="to_date" placeholder="NAMA SISWA">
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" name="diterima" value="1" id="diterima" autocomplete="off">
                <label class="btn btn-outline-primary" for="diterima">Diterima</label>

                <input type="checkbox" class="btn-check" value="2" name="ditolak" id="ditolak" autocomplete="off">
                <label class="btn btn-outline-primary" style="margin-left: 20px" for="ditolak">Tidak Diterima</label>

            </div>
        </div>

        <div class="d-flex mt-3" style="gap:20px;">
            <div class="">
                <button class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">NAMA</button>
            </div>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="NAMA">
            <button type="submit" class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">Search</button>
            <a href="/laporan" class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">Reset</a>

        </div>

    <button type="submit" id="unduh" name="unduh" value="unduh"  style="width: 300px" class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 border border-2 border-dark">Unduh</button></br>


    </form>



    <table class="table table-bordered border border-2 border-dark mt-5 fs-3">
        <thead class="bg-blue">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA</th>
                <th scope="col">TANGGAL PENDAFTARAN</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datasiswa as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->nama}}</td>
                <td>{{$item->created_at->format('d-m-Y')}}</td>
                <td class="text-center">
                    @if ($item->is_status == 1)
                    DITERIMA
                    @else
                    TIDAK DITERIMA
                    @endif
                </td>
            </tr>
            <!-- Modal Edit Pendaftaran -->
            <div class="modal fade" id="edit_siswa{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <form action="/update_siswa" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="oldImage" value="{{$item->foto}}">
                        <input type="hidden" name="oldImage_kk" value="{{$item->foto_kk}}">
                        <input type="hidden" name="oldImage_akte" value="{{$item->foto_akte}}">
                        <div class="modal-content">

                            <div class="modal-header bg-secondary-blue border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body bg-secondary-blue">
                                <div class="bg-blue py-2 px-4">
                                    <h2><b>EDIT BIODATA SISWA</b></h2>
                                </div>
                                <div class="bg-secondary-blue px-5 py-5">
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA SISWA</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" disabled value="{{$item->nama}}" id="nama" name="nama" placeholder="NAMA SISWA">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="tempat_lahir" value="{{$item->tempat_lahir}}" id="inputEmail3" placeholder="TEMPAT LAHIR">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="tanggal_lahir" value="{{$item->tanggal_lahir}}" id="inputEmail3" placeholder="TANGGAL">
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
                                            <select class="form-select" name="jk" aria-label="Default select example">
                                                <option selected>{{$item->jk}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nik" value="{{$item->nik}}" id="inputEmail3" placeholder="NIK">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">ALAMAT</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="alamat" id="inputEmail3" value="{{$item->alamat}}" placeholder="ALAMAT">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">AGAMA</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="agama" value="{{$item->agama}}" id="inputEmail3" placeholder="AGAMA">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">NO TELPON</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="no_telp" value="{{$item->no_telp}}" id="inputEmail3" placeholder="NO TELPON">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Apakah siswa penerima KPS</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="penerima_kps" value="{{$item->penerima_kps}}" id="inputEmail3" placeholder="YA/TIDAK">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">NO KPS</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="no_kps" value="{{$item->no_kps}}" id="inputEmail3" placeholder="YA/TIDAK">
                                            <small class="fs-5">*Jika Tidak Memiliki Harap Diisi “0”</small>
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO</label>
                                        <div class="col-sm-4">
                                            <img class="img-preview" src="{{asset('storage/'. $item->foto)}}" width="200" height="200" alt="" srcset="">
                                            <input type="file" name="foto" id="foto" onchange="previewImage()"><br><br>
                                            <script>
                                                function previewImage() {
                                                    const image =
                                                        document.querySelector(
                                                            "#foto"
                                                        );
                                                    const imgPreview =
                                                        document.querySelector(
                                                            ".img-preview"
                                                        );

                                                    imgPreview.style.display =
                                                        "block";

                                                    const oFReader =
                                                        new FileReader();
                                                    oFReader.readAsDataURL(
                                                        foto.files[0]
                                                    );

                                                    oFReader.onload = function(
                                                        oFREvent
                                                    ) {
                                                        imgPreview.src =
                                                            oFREvent.target.result;
                                                    };
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO KK</label>
                                        <div class="col-sm-4">
                                            <img class="img-preview2" src="{{asset('storage/'. $item->foto_kk)}}" width="200" height="200" alt="" srcset="">
                                            <input type="file" name="foto_kk" id="foto_kk" onchange="previewImage2()"><br><br>
                                            <script>
                                                function previewImage2() {
                                                    const image =
                                                        document.querySelector(
                                                            "#foto_kk"
                                                        );
                                                    const imgPreview =
                                                        document.querySelector(
                                                            ".img-preview2"
                                                        );

                                                    imgPreview.style.display =
                                                        "block";

                                                    const oFReader =
                                                        new FileReader();
                                                    oFReader.readAsDataURL(
                                                        foto_kk.files[0]
                                                    );

                                                    oFReader.onload = function(
                                                        oFREvent
                                                    ) {
                                                        imgPreview.src =
                                                            oFREvent.target.result;
                                                    };
                                                }
                                            </script>

                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">FOTO AKTE</label>
                                        <div class="col-sm-4">
                                            <img class="img-preview3" src="{{asset('storage/'. $item->foto_akte)}}" width="200" height="200" alt="" srcset="">
                                            <input type="file" name="foto_akte" id="foto_akte" onchange="previewImage3()"><br><br>
                                            <script>
                                                function previewImage3() {
                                                    const image =
                                                        document.querySelector(
                                                            "#foto_akte"
                                                        );
                                                    const imgPreview =
                                                        document.querySelector(
                                                            ".img-preview3"
                                                        );

                                                    imgPreview.style.display =
                                                        "block";

                                                    const oFReader =
                                                        new FileReader();
                                                    oFReader.readAsDataURL(
                                                        foto_akte.files[0]
                                                    );

                                                    oFReader.onload = function(
                                                        oFREvent
                                                    ) {
                                                        imgPreview.src =
                                                            oFREvent.target.result;
                                                    };
                                                }
                                            </script>

                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">EMAIL</label>
                                        <div class="col-sm-4">
                                            <input type="email" class="form-control" name="email" value="{{$item->email}}" id="inputEmail3" placeholder="EMAIL">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">JENIS TINGGAL</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="jenis_tinggal" id="inputEmail3" value="{{$item->jenis_tinggal}}" placeholder="JENIS TINGGAL">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">ALAT TRANSPORTASI</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="alat_transportasi" id="inputEmail3" value="{{$item->alat_transportasi}}" placeholder="ALAT TRANSPORTASI">
                                        </div>
                                    </div>

                                </div>


                                <div class="bg-blue py-2 px-4 mt-5">
                                    <h2><b>BIODATA AYAH</b></h2>
                                </div>
                                <div class="bg-secondary-blue px-5 py-5">
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA AYAH</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nama_ayah" id="inputEmail3" value="{{$item->nama_ayah}}" placeholder="NAMA AYAH">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3" name="tempat_lahir_ayah" value="{{$item->tempat_lahir_ayah}}" placeholder="TEMPAT LAHIR">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputEmail3" name="tanggal_lahir_ayah" value="{{$item->tanggal_lahir_ayah}}" placeholder="TANGGAL">
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
                                            <input type="text" class="form-control" id="inputEmail3" name="nik_ayah" value="{{$item->nik_ayah}}" placeholder="NIK">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENDIDIKAN TERAKHIR</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3" name="pendidikan_terakhir_ayah" value="{{$item->pendidikan_terakhir_ayah}}" placeholder="PENDIDIKAN TERAKHIR">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">PEKERJAN</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3" name="pekerjaan_ayah" value="{{$item->pekerjaan_ayah}}" placeholder="PEKERJAN">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">STATUS</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3" name="status_ayah" value="{{$item->status_ayah}}" placeholder="MASIH HIDUP/MENINGGAL">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENGHASILAN</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3" name="penghasilan_ayah" value="{{$item->penghasilan_ayah}}" placeholder="PENGHASILAN">
                                        </div>
                                    </div>


                                </div>

                                <div class="bg-blue py-2 px-4 mt-5">
                                    <h2><b>BIODATA IBU</b></h2>
                                </div>
                                <div class="bg-secondary-blue px-5 py-5">
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">NAMA ibu</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nama_ibu" id="inputEmail3" value="{{$item->nama_ibu}}" placeholder="NAMA ibu">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">TEMPAT LAHIR</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="tempat_lahir_ibu" id="inputEmail3" value="{{$item->tempat_lahir_ibu}}" placeholder="TEMPAT LAHIR">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputEmail3" name="tanggal_lahir_ibu" value="{{$item->tanggal_lahir_ibu}}" placeholder="TANGGAL">
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
                                            <input type="text" class="form-control" id="inputEmail3" name="nik_ibu" value="{{$item->nik_ibu}}" placeholder="NIK">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENDIDIKAN TERAKHIR</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3" name="pendidikan_terakhir_ibu" value="{{$item->pendidikan_terakhir_ibu}}" placeholder="PENDIDIKAN TERAKHIR">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">PEKERJAN</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3" name="pekerjaan_ibu" value="{{$item->pekerjaan_ibu}}" placeholder="PEKERJAN">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">STATUS</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3" name="status_ibu" value="{{$item->status_ibu}}" placeholder="MASIH HIDUP/MENINGGAL">
                                        </div>
                                    </div>
                                    <div class="row mb-3 px-5">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">PENGHASILAN</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputEmail3" name="penghasilan_ibu" value="{{$item->penghasilan_ibu}}" placeholder="PENGHASILAN">
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="modal-footer bg-primary border-0 d-flex">

                                <input type="hidden" name="id" value="{{$item->id}}">
                                <button type="submit" class="btn bg-blue ms-auto">Update</button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
            @endforeach


        </tbody>
    </table>

</div>


@endsection