<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paud</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- CONTENT -->
    <div class="d-flex flex-column ">

        <div class="row justify-content-center">
            <div class="card mt-5 col-md-6" style="min-height:40vw;background-image: url('{{asset("img/images/card.png")}}');background-size:contain">
                <div class="card-body">
                    <div class="row" style="margin-top:7rem">
                        <div class="col-md-4">
                            <img src="{{asset("img/images/card-photo.png")}}" alt="" width="250" class="ps-5">
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


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>