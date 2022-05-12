@extends('layout',['tittle'=> "FASILITAS"])
@section('content')

<button class="btn btn-lg bg-blue boder-pill mt-2 mb-4 fs-3 border border-2 border-dark col-md-1">+ Tambah</button>
<div class="container-fluid content text-center pb-5 pt-5 bg-secondary-blue">
    <div class="position-relative">
        <img class="img-fluid" src="{{asset('storage/images/ellipse.png')}}" alt="" />
        <h2 class="mt-4 text-center">RUANG BELAJAR</h2>
        <a  href=""><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="75"></a>
    </div>
    <div class="position-relative">
        <img class="img-fluid" src="{{asset('storage/images/ellipse.png')}}" alt="" />
        <h2 class="mt-4 text-center">RUANG BELAJAR</h2>
        <a  href=""><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="75"></a>
    </div>
    <div class="mt-5 position-relative">
        <img class="img-fluid" src="{{asset('storage/images/ellipse.png')}}" alt="" />
        <h2 class="mt-4 text-center">RUANG BELAJAR</h2>
        <a  href=""><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="75"></a>
    </div>
    <div class="mt-5 position-relative">
        <img class="img-fluid" src="{{asset('storage/images/ellipse.png')}}" alt="" />
        <h2 class="mt-4 text-center">RUANG BELAJAR</h2>
        <a  href=""><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="75"></a>
    </div>

</div>
<div class="text-end">
    <button class="btn btn-lg bg-blue boder-pill mt-4 fs-3 border border-2 border-dark col-md-1 text-right" type="submit">Simpan</button>
</div>
@endsection