@extends('layout',['tittle'=> "Visi Misi"])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue justify-content-start">
    <div class="bg-blue">
        <div class="container py-3">
            <h1 class="float-start">
                <b>VISI</b>
            </h1>
            <div class="text-end">
                <a data-bs-toggle="modal" data-bs-target="#editvisi"><img src="{{asset("img/images/edit.png")}}" alt="" style="cursor:pointer;" width="75"></a>
            </div>
        </div>
    </div>
    <h2 class="container mt-5" style="margin-bottom:170px;">
        @if ($visi==null)
            
        @else
        {!!$visi->visi!!}
   
        @endif 

    </h2>
    <div class="bg-blue">
        <div class="container py-3">
            <h1 class="float-start">
                <b>MISI</b>
            </h1>
            <div class="text-end">
                <a data-bs-toggle="modal" data-bs-target="#editmisi"><img src="{{asset("img/images/edit.png")}}" alt="" style="cursor:pointer;" width="75"></a>
            </div>
        </div>
    </div>
    <h2 class="container mt-5">
        @if ($misi==null)
            
        @else
        <p>{!!$misi->misi!!}</p>
   
        @endif 
    </h2>

     <!-- Modal Edit Misi -->
    <div class="modal fade" id="editmisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form action="/update_misi" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">

                    <div class="modal-header bg-secondary-blue border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body bg-secondary-blue">
                        <div class="bg-blue py-2 px-4">
                            <h2><b>EDIT MISI</b></h2>
                        </div>
                        <div class="bg-secondary-blue px-5 py-5">
                            <div class="row mb-3 px-5">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">MISI</label>
                                   @if ($misi==null)
                                    <input name="misi" id="misi" type="hidden">
                                    <trix-editor input="misi" class="trix-content"></trix-editor>

                                    @else
                                    <input name="misi" id="misi" value="{{$misi->misi}}" type="hidden">
                                    <trix-editor input="misi" class="trix-content"></trix-editor>
                               
                                    @endif  
                            
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer bg-primary border-0 d-flex">

                        <button type="submit" class="btn bg-blue ms-auto">Update</button>

                    </div>

                </div>
            </form>
        </div>
    </div>

         <!-- Modal Edit Visi -->
    <div class="modal fade" id="editvisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form action="/update_visi" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">

                    <div class="modal-header bg-secondary-blue border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body bg-secondary-blue">
                        <div class="bg-blue py-2 px-4">
                            <h2><b>EDIT VISI</b></h2>
                        </div>
                        <div class="bg-secondary-blue px-5 py-5">
                            <div class="row mb-3 px-5">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">VISI</label>
                                    @if ($visi==null)
                                    <input name="visi" id="visi" type="hidden">
                                    <trix-editor input="visi" class="trix-content"></trix-editor>

                                    @else
                                    <input name="visi" id="visi" value="{{$visi->visi}}" type="hidden">
                                    <trix-editor input="visi" class="trix-content"></trix-editor>
                               
                                    @endif 
            


                            </div>

                        </div>


                    </div>
                    <div class="modal-footer bg-primary border-0 d-flex">

                        <button type="submit" class="btn bg-blue ms-auto">Update</button>

                    </div>

                </div>
            </form>
        </div>
    </div>

</div>
@endsection