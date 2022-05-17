<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Paud</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- HERO -->
        @include('components/nav')
        

        <!-- TITLE -->
        
        @if (isset($is_login))
        <div class="bg-blue container-fluid d-flex px-5 py-4">
                @if (isset($is_navdashboard))
                    {{--<a href="{{route('dashboard')}}"><button class="btn btn-primary px-4 py-3 flex-shrink-0">Dashboard</button></a>--}}
                    <a href="/"><button class="btn btn-primary px-4 py-3 flex-shrink-0">Dashboard</button></a>
                @endif
                <h1 class="flex-grow-1 {{isset($is_navdashboard) ? 'text-center' : ''}}">
                    {{($tittle) ? $tittle : "PAUD ASSIBYAN SELAMAT DATANG PESERTA DIDIK BARU TAHUN AJARAN 2022/2023"}}
                </h1>
                <form action="/logout" method="post">
                    @csrf
                 <button type="submit" class="btn btn-primary px-4 flex-shrink-0 py-3">LOGOUT</button>
                    
                </form>
        </div>
        @else
        <div class="title container-fluid">
            <h1 {{isset($is_edit) ? 'float-start' : ''}}">
                {{($tittle) ? $tittle : "PAUD ASSIBYAN SELAMAT DATANG PESERTA DIDIK BARU TAHUN AJARAN 2022/2023"}}
            </h1>
            @if (isset($is_edit))
            <div class="text-end">
                <a  data-bs-toggle="modal" data-bs-target="#editstruktur" href=""><img src="{{asset("img/images/edit.png")}}" alt="" style="cursor:pointer;" width="75"></a>
            </div>
            @endif
        </div>
        @endif

        <!-- CONTENT -->
        <div class="d-flex flex-column ">
            
            @yield('content')
<a href="whatsapp://send?phone=6285655021997" class="wa-container">
              
                <img
                    class="img-fluid"
                    src="{{asset('storage/images/wa.svg')}}"
                    width="80px"
                    alt=""
                />
                <h1>HUBUNGI KAMI</h1>
</a>
            
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
