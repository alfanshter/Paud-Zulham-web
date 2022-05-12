@extends('layout',['tittle'=> "UNDUH FORM PENDAFTARAN",'is_login' => true,'is_navdashboard' => true])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue d-flex flex-column justify-content-center" style="min-height:20vw;">
    <div class="container ">

    <h1 class="text-center">Terima Kasih Telah mendaftar pada paud assibyan silakan mengunduh form pendaftaran</h1>
    <div class="text-end mt-5">
        <img class="" src="{{asset('storage/images/pdf.png')}}" alt="struktur-organisasi" width="100"></br>
        <a href="/pendaftaran-pdf">Unduh as PDF</a>
    </div>
</div>

</div>
@endsection