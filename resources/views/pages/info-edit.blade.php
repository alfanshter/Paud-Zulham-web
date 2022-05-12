@extends('layout',['tittle'=> "INFO PAUD"])
@section('content')

<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue justify-content-start">
    <div class="container">
        <div class=" d-flex align-items-center">
            <img class="image-thumbnail flex-shrink-0" src="{{asset('storage/images/icon-address.png')}}" alt="" width="70">
            <h1 class="flex-grow-1 ms-3">Jl. Kp. Panyirapan  Desa Panyirapan  kec. Baros Kab. Serang</h1>
        </div>
        <div class=" d-flex align-items-center mt-3">
             <img class="image-thumbnail flex-shrink-0" src="{{asset('storage/images/icon-wa.png')}}" alt="" width="70">
             <h1 class="flex-grow-1 ms-3">whatsapp : 0895358318714</h1>
         </div>
         <div class=" d-flex align-items-center mt-3">
             <img class="image-thumbnail flex-shrink-0" src="{{asset('storage/images/icon-email.png')}}" alt="" width="70">
             <h1 class="flex-grow-1 ms-3">E-mail : paudassibyan@gmail.com</h1>
         </div>
<button class="btn btn-lg bg-blue boder-pill mt-5 fs-3 border border-2 border-dark">+ Tambah</button>

         <div class="row text-center mt-5">
            <div class="col-md-6 col-sm-12 mt-5 position-relative">
                <img class="" src="http://placehold.jp/3d4070/ffffff/400x400.png" alt="struktur-organisasi">
                <h2 class="text-center mt-4">Biaya Gratis</h2>
                <a  href=""><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="75"></a>
            </div>
            <div class="col-md-6 col-sm-12 mt-5 position-relative">
                <img class="" src="http://placehold.jp/3d4070/ffffff/400x400.png" alt="struktur-organisasi">
                <h2 class="text-center mt-4">Seragam Paud</h2>
                <a  href=""><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="75"></a>
            </div>
         </div>
    </div>

</div>
@endsection