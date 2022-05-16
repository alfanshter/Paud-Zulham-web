 <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@extends('layout',['tittle'=> "STRUKTUR ORGANISASI","is_edit"=>true])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue d-flex justify-content-center">
    @if ($struktur ==null)
    <img class="" src="http://placehold.jp/3d4070/ffffff/700x700.png" alt="struktur-organisasi">
    @else
    <img  src="{{asset('storage/'.$struktur->foto)}}" style="width: 200px; height:200px">

    @endif

</div>
<br>

<!-- Modal Edit Misi -->
<div class="modal fade" id="editstruktur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <form action="/update_struktur" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">

                <div class="modal-header bg-secondary-blue border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body bg-secondary-blue">
                    <div class="bg-blue py-2 px-4">
                        <h2><b>EDIT Struktur</b></h2>
                    </div>
                    <div class="bg-secondary-blue px-5 py-5">
                        <div class="row mb-3 px-5">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">MISI</label>
                            @if ($struktur == null)
                            <img class="img-preview img-fluid" src="http://placehold.jp/3d4070/ffffff/700x700.png" alt="struktur-organisasi">
                            @else
                            <img class="img-preview img-fluid" src="{{asset('storage/'.$struktur->foto)}}" style="width: 200px; height:200px">
                            @endif
                            <br>
                            <input type="file" class="form-control" id="foto" required name="foto" value="{{old('foto')}}" onchange="previewImage()">
                            <script>
                                function previewImage() {
                                    const image = document.querySelector('#foto');
                                    const imgPreview = document.querySelector('.img-preview');
                                    imgPreview.style.display = 'block';
                                    const oFReader = new FileReader();
                                    oFReader.readAsDataURL(foto.files[0]);
                                    oFReader.onload = function(oFREvent) {
                                        imgPreview.src = oFREvent.target.result;
                                    }
                                }
                            </script>

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
@endsection