@extends('layout',['tittle'=> "INFO PAUD"])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue justify-content-start">
    <div class="container">
        <div class=" d-flex align-items-center">
            <img class="image-thumbnail flex-shrink-0" src="{{asset('storage/images/icon-address.png')}}" alt="" width="70">
                     @if ($info !=null)
             <h1 class="flex-grow-1 ms-3">{{$info->alamat}}</h1>
             @else
             @endif
        </div>
        <div class=" d-flex align-items-center mt-3">
             <img class="image-thumbnail flex-shrink-0" src="{{asset('storage/images/icon-wa.png')}}" alt="" width="70">
             @if ($info !=null)
             <h1 class="flex-grow-1 ms-3">{{$info->wa}}</h1>
             @else
             @endif

         </div>
         <div class=" d-flex align-items-center mt-3">
             <img class="image-thumbnail flex-shrink-0" src="{{asset('storage/images/icon-email.png')}}" alt="" width="70">
              @if ($info !=null)
             <h1 class="flex-grow-1 ms-3">{{$info->email}}</h1>
             @else
             @endif
         </div>
         <div class="row text-center mt-5">
             @foreach ($paud as $item)
                <div class="col-md-6 col-sm-12 mt-5">
                    <img class="" src="{{asset('storage/'.$item->foto)}}" style="width: 400px;height:400px" alt="struktur-organisasi">
                    <h2 class="text-center mt-4">{{$item->nama}}</h2>
                </div>
                    
             @endforeach
         </div>
    </div>

</div>
@endsection