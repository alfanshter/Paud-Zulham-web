@extends('layout',['tittle'=> "CARD"])
@section('content')
<div class="row justify-content-center">
    <div class="card mt-5 col-md-6" style="min-height:40vw;background-image: url('{{asset("img/images/card.png")}}');background-size:contain">
        <div class="card-body" >
            <div class="row" style="margin-top:15.2rem">
                <div class="col-md-4">
                    <img src="{{asset("img/images/card-photo.png")}}" alt="" width="320" class="ps-5">
                </div>
                <div class="col-md-8 fs-3">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>&nbsp;:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td>&nbsp;:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>&nbsp;:</td>
                            <td></td>
                        </tr>
                    </table>
                    <h2 style="margin-top:3rem" class="text-end"><b>Kepala Sekolah</b></h2>
                    <h2 style="margin-top:7rem" class="text-end"><b>Zulfa Luthfiana</b></h2>
                   
                </div>
                
            </div>
        </div>
      </div>
</div>
  
  @endsection