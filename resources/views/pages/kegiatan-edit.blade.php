@extends('layout',['tittle'=> "KEGIATAN"])
@section('content')
<button class="btn btn-lg bg-blue boder-pill mt-2 mb-4 fs-3 border border-2 border-dark col-md-1">+ Tambah</button>
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue text-center">
    <div class="row">


    <div class="col-md-6 col-sm-12 position-relative">
        <img class="" src="http://placehold.jp/3d4070/ffffff/400x400.png" alt="struktur-organisasi">
        <h2 class="text-center mt-4">17 Agustus</h2>
        <a  href=""><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="75"></a>

    </div>
    <div class="col-md-6 col-sm-12 position-relative">
        <img class="" src="http://placehold.jp/3d4070/ffffff/400x400.png" alt="struktur-organisasi">
        <h2 class="text-center mt-4">17 Agustus</h2>
        <a  href=""><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="75"></a>
    </div>
    <div class="col-md-6 col-sm-12 mt-5 position-relative">
        <img class="" src="http://placehold.jp/3d4070/ffffff/400x400.png" alt="struktur-organisasi">
        <h2 class="text-center mt-4">17 Agustus</h2>
        <a  href=""><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="75"></a>
    </div>
    <div class="col-md-6 col-sm-12 mt-5 position-relative">
        <img class="" src="http://placehold.jp/3d4070/ffffff/400x400.png" alt="struktur-organisasi">
        <h2 class="text-center mt-4">17 Agustus</h2>
        <a  href=""><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="75"></a>
    </div>
</div>

</div>
<div class="text-end">
    <button class="btn btn-lg bg-blue boder-pill mt-4 fs-3 border border-2 border-dark col-md-1 text-right" type="submit">Simpan</button>
</div>
@endsection