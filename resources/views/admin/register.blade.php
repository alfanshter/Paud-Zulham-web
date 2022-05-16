                    @if (session()->has('success'))
                        <div class="alert alert-success mt-2" role="alert">
                            {{session('success')}}  
                        </div>
                    @endif

@extends('layout',['tittle'=> "FORMULIR PENDAFTARAN SISWA BARU"])
@section('content')

                     @error('foto')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{$message}}  
                    </div>                        
                    @enderror

                     @error('foto_kk')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{$message}}  
                    </div>                        
                    @enderror

                     @error('foto_akte')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{$message}}  
                    </div>                        
                    @enderror


<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue row">
    <div class="col-md-3">
        <div class="bg-blue text-center py-2">
            <h2><b>LOGIN</b></h2>
        </div>
        <div class="bg-secondary-blue px-5 py-5">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" required name="username" class="form-control" id="exampleFormControlInput1" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" required name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn  bg-blue border border-dark border-1" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    <form action="/register-admin" class="col-md-9" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <div class="bg-blue py-2 px-4">
                <h2><b>BIODATA SISWA</b></h2>
            </div>
            <div class="bg-secondary-blue px-5 py-5">
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="username" name="username" required placeholder="Username">
                        </div>
                    </div>
                    
                    <div class="row mb-3 px-5">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-3">
                            <input type="password" class="form-control" name="password" id="password" required placeholder="password">
                        </div>
                    </div>
                  
         
            </div>

         
            <button type="submit" class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 rounded">KIRIM</button>
            <p class="fs-4">*Dengan Mengirim, berarti menyetujui untuk mengikuti segala ketentuan dan tata tertib
                yang sudah di berlakukan oleh Paud Assbiyan.
            </p>



        </div>
    </form>



</div>
@endsection