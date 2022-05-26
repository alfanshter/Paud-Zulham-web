@extends('layout',['tittle'=> "DASHBOARD",'is_login' => true])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue row" style="min-height:20vw;">
    <div class="row text-center mt-5">
        <div class="col-md-4 col-sm-12 mt-5">
            <img class="" src="{{asset('storage/images/data.png')}}" style="width: 180px; height:200px" alt="struktur-organisasi" width="300"></br>
            <a href="/data_siswa"><button class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 py-3 rounded-pill">DATA SISWA</button></a>

        </div>
        <div class="col-md-4 col-sm-12 mt-5">
            <img class="" src="{{asset('storage/images/seleksi.png')}}" style="width: 180px; height:200px" alt="struktur-organisasi"></br>

            <a href="/seleksi-pendaftaran"><button class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 py-3 rounded-pill">SELEKSI SISWA</button></a>
        </div>
        <div class="col-md-4 col-sm-12 mt-5">
            <img class="" src="{{asset('img/btn-laporan.svg')}}" style="width: 180px; height:200px" alt="struktur-organisasi" width="300"></br>
            <a href="/laporan"><button class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 py-3 rounded-pill">Laporan</button></a>

        </div>


    </div>
</div>
@endsection