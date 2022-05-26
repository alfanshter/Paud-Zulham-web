<?php

$bulan = array(
    1 =>       'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style type="text/css">
        div.judul {
            display: inline-flex;
            background-color: red
        }

        .tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:9px 19px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:9px 19px;word-break:normal;}
.tg .tg-9o1m{border-color:inherit;font-size:12px;text-align:center;vertical-align:middle}
.tg .tg-nrix{text-align:center;vertical-align:middle}
div.absolute {
  position: absolute;
  right: 0;
}

    </style>

    <table>
        <tr>
            <td width="130"> <img style="flex:1" src="{{public_path('img/logo/logopaud.png')}}" alt="" width="113" height="109">
            </td>
            <td>
                <center>
                    <div>
                        <p style="font-weight: bold;text-transform:uppercase; font-size:20px">PENDIDIKAN ANAK USIA DINI (PAUD)</p>
                        <p style=" font-weight: bold;text-transform:uppercase; font-size:20px">BKB KEMAS ASSIBYAN</p>
                        <p style=" font-weight: bold;font-size:14px">Alamat : Kp. Panyirapan Desa Panyirapan kec. Baros Kab. Serang
                        </p>
                    </div>
                </center>
            </td>
        </tr>
    </table>

    <hr>
    <hr>
    <br><br>

    <center>
        LAPORAN HASIL SELEKSI PENDAFTARAN PAUD ASSIBYAN 
    </center><br><br>

    <center>
          <table class="tg" style="width: 100%">
<thead>
  <tr>
    <th class="tg-9o1m">NO</th>
    <th class="tg-nrix">NAMA</th>
    <th class="tg-nrix">TANGGAL PENDAFTARAN</th>
    <th class="tg-nrix">HASIL</th>
  </tr>
</thead>
<tbody>
    @foreach ($datasiswa as $item)
        <tr>
    <td class="tg-nrix">{{$loop->iteration}}</td>
    <td class="tg-nrix">{{$item->nama}}</td>
    <td class="tg-nrix">{{$item->created_at->format('d-m-Y')}}</td>
     <td class="tg-nrix">
                    @if ($item->is_status == 1)
                    DITERIMA
                    @else
                    TIDAK DITERIMA
                    @endif
                </td>
  </tr>
    @endforeach
  
</tbody>
</table>


    </center>

<br><br><br><br><br>
     <div id="flex" class="absolute">
    <table id="tabel1" style="border: 0ch">
      <tr>
        <td id="tabel1">Kepala Sekolah</td>
      </tr>
      <br><br><br><br>
      <tr>
        <td id="tabel1" style="text-align: center">Zulfa Luthfiana</td>
      </tr>
    </table>
  
  </div>

    <script>
        window.print();
    </script>
</body>

</html>