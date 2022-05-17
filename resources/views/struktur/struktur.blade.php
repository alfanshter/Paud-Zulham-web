@extends('layout',['tittle'=> "STRUKTUR ORGANISASI"])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue d-flex justify-content-center">
    @if ($struktur ==null)
    @else
    <img  src="{{asset('storage/'.$struktur->foto)}}" style="width: 700px; height : 700px">

    @endif
 
</div>
@endsection