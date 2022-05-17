
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paud</title>
    <style>
      .card-body {
          flex: 1 1 auto;
          padding: 1rem 1rem;
      }

      .d-flex {
          display: flex !important;
      }

      .d-md-flex {
          display: flex !important;
      }

      .col-md-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }

  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }

  .td {
      text-transform: uppercase; font-size: 12px
  }
  

      
  </style>
</head>

<body>
    <!-- CONTENT -->
    <div class="d-flex flex-column ">
        <div class="row justify-content-center" style="width: 900">
            <div class="card mt-5 col-md-6"  style="min-height:40vw;background-image: url('{{public_path("img/images/card.png")}}');background-size:600px 400px; background-repeat: no-repeat;">
                <div class="card-body">
                    <div class="row" style="margin-top:8rem; margin-left:1rem">
                        <div class="col-md-4">
                            <img src="{{public_path('storage/'.$data->foto)}}" alt="" style="width: 140px;height:160px" class="ps-5">
                        </div>
                        <div class="col-md-8 fs-3" style="margin-left: 14%;margin-top :-25%">
                            <table  style="width: 380px">
                                <tr>
                                    <td class="td">Nama</td>
                                    <td>:</td>
                                    <td class="td">{{$data->nama}}</td>
                                </tr>
                                <tr>
                                    <td class="td">Tempat, Tanggal Lahir</td>
                                    <td class="td">:</td>
                                    <td class="td">{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
                                </tr>
                                <tr>
                                    <td class="td">Alamat</td>
                                     <td class="td">:</td>

                                    <td class="td">{{$data->alamat}}</td>
                                </tr>
                            </table>
                            <h4 style="margin-top:2rem;margin-left: 35%;" class="text-end"><b>Kepala Sekolah</b></h4>
                            <h4 style="margin-top:3rem;margin-left: 35%;" class="text-end"><b>Zulfa Luthfiana</b></h4>

                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
   
   <script>
    window.print();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>