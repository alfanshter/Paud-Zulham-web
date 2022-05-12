@extends('layout',['tittle'=> "DASHBOARD",'is_login' => true])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue row" style="min-height:20vw;">
    <div class="row text-center mt-5">
        <div class="col-md-6 col-sm-12 mt-5">
            <img class="" src="{{asset('storage/images/pdf.png')}}" alt="struktur-organisasi"></br>

            <a href="{{route('dashboard-unduh')}}"><button class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 py-3 rounded-pill">UNDUH FORM PENDAFTARAN</button></a>
        </div>
        <div class="col-md-6 col-sm-12 mt-5">
            <img class="" src="{{asset('storage/images/pengumuman.png')}}" alt="struktur-organisasi" width="300"></br>
            <a href="{{route('hasil-seleksi')}}"><button class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 py-3 rounded-pill">PENGUMUMAN HASIL SELEKSI PENDAFTARAN</button></a>

        </div>
     </div>  
</div>
@endsection