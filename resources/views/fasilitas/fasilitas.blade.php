@extends('layout',['tittle'=> "FASILITAS"])
@section('content')
<div class="container-fluid content text-center pb-5 pt-5 bg-secondary-blue">
    @foreach ($fasilitas as $item)
        <div >
            <img class="img-fluid"  src="{{asset('storage/'.$item->foto)}}" alt=""  style="width: 350px; height:350px"/>
            <h2 class="mt-4 text-center">{{$item->nama}}</h2>
        </div>
        
    @endforeach

 
</div>

@endsection