@extends('layout',['tittle'=> "PAUD ASSIBYAN SELAMAT DATANG PESERTA DIDIK BARU TAHUN AJARAN 2022/2023"])
@section('content')
<div class="container-fluid content p-0">
    <div class="image">
        <img
            class="img-fluid"
            src="{{asset('storage/images/pendaftar 1.jpg')}}"
            alt=""
        />
    </div>
    <div class="date">
        <div class="date-box">
            <div class="date-box-first">
                <h1>DI BUKA</h1>
            </div>
            <div class="date-box-second">
                <h1>20 JUNI 2022</h1>
            </div>
        </div>
        <div class="date-box-title">
            <h1>ingat tanggalnya ya....!</h1>
        </div>
    </div>
    <div class="register-intro">
        <div class="img-container">
            <img
                class="img-fluid"
                src="{{asset('storage/images/rumah-removebg-preview 1.svg')}}"
                alt=""
            />
        </div>
        <h1>daftar sekolah dari rumah lebih mudah.....!</h1>
    </div>
    <div class="register-cta-container">
        <a href="{{route("pendaftaran")}}"><button class="button-cust">DAFTAR ONLINE</button></a>
        <h1>klik disini....!</h1>
    </div>
    <div class="login">
        <button class="button-cust" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">LOGIN</button>
        <h1>Sudah Daftar ?Login disini....!</h1>
    </div>
    <div class="invitation">
        <h1>Ayo Daftar...</br> Kuota Terbatas</h1>
        

    </div>
</div>


<!-- Modal -->
       
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title mx-auto" id="exampleModalLabel">Login To Your Account</h3>
          <button type="button" class="btn-close border border-4 border-dark rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="bg-blue text-center py-2">
                    <h2><b>LOGIN</b></h2>
                </div>
                <div class="bg-secondary-blue px-5 py-5">
                    <form action="">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username">
                          </div>
                          <div class="mb-3">
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                          </div>
                          <div class="d-flex justify-content-center">
                              <button class="btn  bg-blue border border-dark border-1" type="submit">Login</button>
                          </div>
                    </form>
                </div>

            </div>

        </div>
      </div>
    </div>
  </div>
@endsection