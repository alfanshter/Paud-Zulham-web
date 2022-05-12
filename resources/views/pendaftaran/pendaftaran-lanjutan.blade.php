                               <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@extends('layout',['tittle'=> "FORMULIR PENDAFTARAN SISWA BARU"])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue row">
    <div class="col-md-3">
        <div class="bg-blue text-center py-2">
            <h2><b>LOGIN</b></h2>
        </div>
        <div class="bg-secondary-blue px-5 py-5">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="username" required class="form-control" id="exampleFormControlInput1" placeholder="Username">
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" required class="form-control" id="exampleFormControlInput1" placeholder="Password">
                  </div>
                  <div class="d-flex justify-content-center">
                      <button class="btn  bg-blue border border-dark border-1" type="submit">Login</button>
                  </div>
            </form>
        </div>
    </div>
    <div class="col-md-9">
        <div class="bg-blue py-2 px-4">
            <h2><b>DATA BERHASIL DIDAFTARKAN</b></h2>
        </div>
        <div class="bg-secondary-blue  px-4 text-center py-5">
            <p class="fs-3 container">Data Berhasil didaftarkan silakan tunggu email untuk mendapatkan username dan password untuk login melanjutkan pendaftaran</p>
        </div>
    </div>    
</div>
@endsection