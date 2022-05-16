 <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
 @extends('layout',['tittle'=> "INFO PAUD"])
 @section('content')

 <div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue justify-content-start">
     <div class="container">
         <div class=" d-flex align-items-center">
             <img class="image-thumbnail flex-shrink-0" src="{{asset('storage/images/icon-address.png')}}" alt="" width="70">
             @if ($info !=null)
             <h1 class="flex-grow-1 ms-3">{{$info->alamat}}</h1>
             @else
             <h1 class="flex-grow-1 ms-3">Jl. Kp. Panyirapan Desa Panyirapan kec. Baros Kab. Serang</h1>
             @endif

         </div>
         <div class=" d-flex align-items-center mt-3">
             <img class="image-thumbnail flex-shrink-0" src="{{asset('storage/images/icon-wa.png')}}" alt="" width="70">
             @if ($info !=null)
             <h1 class="flex-grow-1 ms-3">{{$info->wa}}</h1>
             @else
             <h1 class="flex-grow-1 ms-3">whatsapp : 0895358318714</h1>
             @endif

         </div>
         <div class=" d-flex align-items-center mt-3">
             <img class="image-thumbnail flex-shrink-0" src="{{asset('storage/images/icon-email.png')}}" alt="" width="70">
             @if ($info !=null)
             <h1 class="flex-grow-1 ms-3">{{$info->email}}</h1>
             @else
             <h1 class="flex-grow-1 ms-3">E-mail : paudassibyan@gmail.com</h1>
             @endif
             <a href="" data-bs-toggle="modal" data-bs-target="#info_edit"><img src="{{asset("img/images/edit.png")}}" alt="" style="cursor:pointer;" width="50"></a>

         </div>
         <button data-bs-toggle="modal" data-bs-target="#tambahinfo" class="btn btn-lg bg-blue boder-pill mt-5 fs-3 border border-2 border-dark">+ Tambah</button>

         <div class="row text-center mt-5">
             @foreach ($paud as $item)
             <div class="col-md-6 col-sm-12 mt-5 position-relative">
                 <img class="" src="{{asset('storage/'.$item->foto)}}" style="width: 400px;height:400px" alt="struktur-organisasi">
                 <h2 class="text-center mt-4">{{$item->nama}}</h2>
                 <a href="" data-bs-toggle="modal" data-bs-target="#editpaud{{$item->id}}"><img src="{{asset("img/images/edit.png")}}" class="position-absolute top-0 end-0" alt="" style="cursor:pointer;" width="50"></a>
             </div>
             <!-- Modal Edit Paud -->
             <div class="modal fade" id="editpaud{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-xl">
                     <form action="/update_paud" method="post" enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" name="id" value="{{$item->id}}">
                         <div class="modal-content">

                             <div class="modal-header bg-secondary-blue border-0">
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>

                             <div class="modal-body bg-secondary-blue">
                                 <div class="bg-blue py-2 px-4">
                                     <h2><b>Edit info paud</b></h2>
                                 </div>
                                 <div class="bg-secondary-blue px-5 py-5">
                                     <div class="row mb-3 px-5">
                                         <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
                                         <img class="img-preview_edit_paud img-fluid" src="{{asset('storage/'.$item->foto)}}" style="width: 400px;height:400px" alt="struktur-organisasi">
                                         <input type="file" class="form-control" id="foto_editpaud"  name="foto" value="{{old('foto')}}" onchange="previewImage_editpaud()">
                                         <script>
                                             function previewImage_editpaud() {
                                                 const image = document.querySelector('#foto_editpaud');
                                                 const imgPreview_editpaud = document.querySelector('.img-preview_edit_paud');
                                                 imgPreview_editpaud.style.display = 'block';
                                                 const oFReader = new FileReader();
                                                 oFReader.readAsDataURL(foto_editpaud.files[0]);
                                                 oFReader.onload = function(oFREvent) {
                                                     imgPreview_editpaud.src = oFREvent.target.result;
                                                 }
                                             }
                                         </script>

                                     </div>

                                     <div class="row mb-3 px-5">
                                         <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                         <input type="text" class="form-control" value="{{$item->nama}}" id="nama" required name="nama">
                                     </div>

                                 </div>


                             </div>
                             <div class="modal-footer bg-primary border-0 d-flex">

                                 <button type="submit" class="btn bg-blue ms-auto">Update</button>
                                 <a href="/delete_paud/{{$item->id}}" onclick="return confirm('Are you sure?');"  type="button" class="btn btn-danger">Hapus</a>


                             </div>

                         </div>
                     </form>
                 </div>
             </div>
             @endforeach

         </div>
     </div>

 </div>

 <!-- Modal Edit info-edit -->
 <div class="modal fade" id="info_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <form action="/update_info" method="post" enctype="multipart/form-data">
             @csrf
             <div class="modal-content">

                 <div class="modal-header bg-secondary-blue border-0">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>

                 <div class="modal-body bg-secondary-blue">
                     <div class="bg-blue py-2 px-4">
                         <h2><b>Edit </b></h2>
                     </div>
                     <div class="bg-secondary-blue px-5 py-5">
                         <div class="row mb-3 px-5">
                             <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Alamat</label>
                             @if ($info !=null)
                             <input type="text" class="form-control" id="nama" value="{{$info->alamat}}" required name="alamat">
                             @else
                             <input type="text" class="form-control" id="nama" required name="alamat">
                             @endif

                         </div>

                         <div class="row mb-3 px-5">
                             <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Wa</label>
                             @if ($info !=null)
                             <input type="text" class="form-control" id="wa" value="{{$info->wa}}" required name="wa">
                             @else
                             <input type="text" class="form-control" id="wa" required name="wa">
                             @endif
                         </div>

                         <div class="row mb-3 px-5">
                             <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Email</label>
                             @if ($info !=null)
                             <input type="text" class="form-control" id="email" value="{{$info->email}}" required name="email">
                             @else
                             <input type="text" class="form-control" id="email" required name="email">
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

 <!-- Modal Tambah info -->
 <div class="modal fade" id="tambahinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl">
         <form action="/tambah_info" method="post" enctype="multipart/form-data">
             @csrf
             <div class="modal-content">

                 <div class="modal-header bg-secondary-blue border-0">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>

                 <div class="modal-body bg-secondary-blue">
                     <div class="bg-blue py-2 px-4">
                         <h2><b>Tambah info</b></h2>
                     </div>
                     <div class="bg-secondary-blue px-5 py-5">
                         <div class="row mb-3 px-5">
                             <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
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
                             <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
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