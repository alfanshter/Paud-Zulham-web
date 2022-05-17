@extends('layout',['tittle'=> "KEGIATAN"])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue text-center">
    <div class="row">

        @foreach ($kegiatan as $item)
            <div class="col-md-6 col-sm-12">
                <img class="" src="{{asset('storage/'.$item->foto)}}" style="width: 400px; height:400px" alt="struktur-organisasi">
                <h2 class="text-center mt-4">{{$item->nama}}</h2>
            </div>
                    
        @endforeach
   
</div>

</div>
@endsection