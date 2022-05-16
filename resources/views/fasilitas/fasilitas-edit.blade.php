 <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@extends('layout',['tittle'=> "FASILITAS"])
@section('content')

<button  data-bs-toggle="modal" data-bs-target="#tambahfasilitas"  class="btn btn-lg bg-blue boder-pill mt-2 mb-4 fs-4 border border-2 border-dark col-md-1">Tambah</button>
<div class="container-fluid content text-center pb-5 pt-5 bg-secondary-blue">
  @foreach ($fasilitas as $item)
       <div class="position-relative">
            <img class="img-fluid" src="{{asset('storage/'.$item->foto)}}" alt="" style="width: 350; height:350px" />
            <h2 class="mt-4 text-center">{{$item->nama}}</h2>
            <a  data-bs-toggle="modal" data-bs-target="#editfasilitas{{$item->id}}"><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="50"></a>
        </div>
        <!-- Modal Edit fasilitas -->
         <div class="modal fade" id="editfasilitas{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-xl">
                 <form action="/update_fasilitas" method="post" enctype="multipart/form-data">
                     @csrf
                        <input type="hidden" name="oldImage" value="{{$item->foto}}">
                        <input type="hidden" name="id" value="{{$item->id}}">             
                         <div class="modal-content">

                         <div class="modal-header bg-secondary-blue border-0">
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>

                         <div class="modal-body bg-secondary-blue">
                             <div class="bg-blue py-2 px-4">
                                 <h2><b>Edit fasilitas</b></h2>
                             </div>
                             <div class="bg-secondary-blue px-5 py-5">
                                 <div class="row mb-3 px-5">
                                     <label for="inputEmail3" class="col-sm-2 col-form-label">Foto fasilitas</label>
                                     <img class="img-preview img-fluid" src="{{asset('storage/'.$item->foto)}}" style="width: 400px;height:400px" alt="struktur-organisasi">
                                     <input type="file" class="form-control" id="foto"  name="foto" value="{{old('foto')}}" onchange="previewImage()">
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

                                 <div class="row mb-3 px-5">
                                     <label for="inputEmail3" class="col-sm-2 col-form-label">Nama fasilitas</label>
                                     <input type="text" class="form-control" id="nama" value="{{$item->nama}}" required name="nama">
                                 </div>

                             </div>


                         </div>
                         <div class="modal-footer bg-primary border-0 d-flex">

                             <button type="submit" class="btn bg-blue ms-auto">Update</button>
                            <a href="/delete_fasilitas/{{$item->id}}" onclick="return confirm('Are you sure?');"  type="button" class="btn btn-danger">Hapus</a>

                         </div>

                     </div>
                 </form>
             </div>
         </div>
  @endforeach

</div>
{{--<div class="text-end">
    <button class="btn btn-lg bg-blue boder-pill mt-4 fs-3 border border-2 border-dark col-md-1 text-right" type="submit">Simpan</button>
</div>--}}


 <!-- Modal Tambah Fasilitas -->
 <div class="modal fade" id="tambahfasilitas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <form action="/tambah_fasilitas" method="post" enctype="multipart/form-data">
             @csrf
             <div class="modal-content">

                 <div class="modal-header bg-secondary-blue border-0">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>

                 <div class="modal-body bg-secondary-blue">
                     <div class="bg-blue py-2 px-4">
                         <h2><b>Tambah fasilitas</b></h2>
                     </div>
                     <div class="bg-secondary-blue px-5 py-5">
                         <div class="row mb-3 px-5">
                             <label for="inputEmail3" class="col-sm-2 col-form-label">Foto fasilitas</label>
                             <img class="img-preview img-fluid" src="http://placehold.jp/3d4070/ffffff/400x400.png" style="width: 400px;height:400px" alt="struktur-organisasi">
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

                         <div class="row mb-3 px-5">
                             <label for="inputEmail3" class="col-sm-2 col-form-label">Nama fasilitas</label>
                             <input type="text" class="form-control" id="nama" required name="nama">
                         </div>

                     </div>


                 </div>
                 <div class="modal-footer bg-primary border-0 d-flex">

                     <button type="submit" class="btn bg-blue ms-auto">Tambah</button>

                 </div>

             </div>
         </form>
     </div>
 </div>
@endsection