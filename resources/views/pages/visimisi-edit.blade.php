@extends('layout',['tittle'=> "Visi Misi"])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue justify-content-start">
    <div class="bg-blue">
        <div class="container py-3">
            <h1 class="float-start">
                <b>VISI</b>
            </h1>
            <div class="text-end">
                <a  href=""><img src="{{asset("img/images/edit.png")}}" alt="" style="cursor:pointer;" width="75"></a>
            </div>
        </div>
    </div>
    <h2 class="container mt-5" style="margin-bottom:170px;">
        <ol>
            <li class="mb-2">Lorem ipsum</li>
            <li>Lorem ipsum</li>
        </ol>
    </h2>
    <div class="bg-blue">
        <div class="container py-3">
            <h1 class="float-start">
                <b>MISI</b>
            </h1>
            <div class="text-end">
                <a  href=""><img src="{{asset("img/images/edit.png")}}" alt="" style="cursor:pointer;" width="75"></a>
            </div>
        </div>
    </div>
    <h2 class="container mt-5">
        <ol>
            <li class="mb-2">Lorem ipsum</li>
            <li>Lorem ipsum</li>
        </ol>
    </h2>

</div>
@endsection