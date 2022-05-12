@extends('layout',['tittle'=> "SELEKSI PENDAFTARAN",'is_login' => true])
@section('content')
<div class="container-fluid mt-2 pb-5 pt-5 bg-secondary-blue row px-5" style="min-height:20vw;">
    <form action="">
        <button class="btn btn-lg bg-blue boder-pill mt-5 fs-3 px-5 border border-2 border-dark">+ Tambah</button></br>
        <div class="d-flex mt-3" style="gap:20px;">
            <div class="">
                <button class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">Date</button>
            </div>
            <div class="fs-3 align-self-center">From</div>
            <input type="date" class="form-control" id="inputEmail3" placeholder="NAMA SISWA">
            <div class="fs-3 align-self-center">To</div>
            <input type="date" class="form-control" id="inputEmail3" placeholder="NAMA SISWA">
            <button class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">Search</button>
            <button class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">Reset</button>
        </div>      
    </form>
    <form action="" class="col-md-4">
        <div class="d-flex mt-3" style="gap:20px;">
            <div class="">
                <button class="btn btn-lg bg-blue fs-3 px-5 border border-2 border-dark">NAMA</button>
            </div>
            <input type="text" class="form-control" id="inputEmail3" placeholder="NAMA">
        </div>      
    </form>

    <table class="table table-bordered border border-2 border-dark mt-5 fs-3">
        <thead class="bg-blue">
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">TANGGAL PENDAFTARAN</th>
            <th scope="col">STATUS</th>
            <th scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Audrey</td>
            <td>08-03-2022</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Gabrielle</td>
            <td>08-03-2022</td>
            <td>Diterima</td>
            <td class="text-center">
                <a class="border-0 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('storage/images/edit.png')}}" alt="" width="50" style="cursor:pointer"></a>
                <a class="border-0"><img src="{{asset('storage/images/delete.png')}}" alt="" width="50" style="cursor:pointer"></a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Steven</td>
            <td>08-03-2022</td>
            <td>Tidak Diterima</td>
            <td class="text-center">
                <a class="border-0 me-3"><img src="{{asset('storage/images/edit.png')}}" alt="" width="50" style="cursor:pointer"></a>
                <a class="border-0"><img src="{{asset('storage/images/delete.png')}}" alt="" width="50" style="cursor:pointer"></a>
            </td>
          </tr>
         
        </tbody>
      </table>
    
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header bg-secondary-blue border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-secondary-blue">
          <h1>MAAF ANDA DINYATAKAN TIDAK LOLOS</h1>
        </div>
        <div class="modal-footer bg-primary border-0 d-flex">
                <button type="button" class="btn bg-blue">Close</button>
                <button type="button" class="btn bg-blue ms-auto">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection