@extends('layout',['tittle'=> "Visi Misi"])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue justify-content-start">
    <div class="bg-blue">
        <div class="container py-3">
            <h1>
                <b>VISI</b>
            </h1>
        </div>
    </div>
    <h2 class="container mt-5" style="margin-bottom:170px;">
        @if ($visi==null)
            
        @else
        <p>{{$visi->visi}}</p>
   
        @endif 
       </h2>
    <div class="bg-blue">
        <div class="container py-3">
            <h1>
                <b>MISI</b>
            </h1>
        </div>
    </div>
    <h2 class="container mt-5">
        @if ($misi==null)
            
        @else
        <p>{{$misi->misi}}</p>
   
        @endif 
    </h2>

</div>
@endsection