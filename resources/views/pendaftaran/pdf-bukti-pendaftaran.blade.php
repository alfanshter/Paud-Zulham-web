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
        PENDAFTARAN PAUD ASSIBYAN
    </center>

    <div>
        <p><b>Data Siswa</b></p>
        <p>Nama : {{$pendaftaran->nama}} </p>
        <p>Tempat/tanggal lahir : {{$pendaftaran->tempat_lahir}} / {{$pendaftaran->tanggal_lahir}}  </p>
        <p>Jenis Kelamin : {{$pendaftaran->jk}}</p>
        <p>NIK : {{$pendaftaran->nik}}</p>
        <p>Alamat : {{$pendaftaran->alamat}}</p>
        <p>Agama : {{$pendaftaran->agama}}</p>
        <p>Nomor Telepon : {{$pendaftaran->no_telp}}</p>
        <p>Apakah siswa penerima KPS ? : {{$pendaftaran->penerima_kps}}</p>
        <p>Nomor KPS : {{$pendaftaran->no_kps}}</p>
        <p>*Jika Tidak Memiliki Harap Diisi 0 </p>
        <p>E-mail : {{$pendaftaran->email}}</p>
        <p>Jenis Tinggal : {{$pendaftaran->jenis_tinggal}}</p>
        <p>Alat Transportasi {{$pendaftaran->alat_transportasi}}</p><br>
        <p><b>Data Ayah</b> </p>
        <p>Nama : {{$pendaftaran->nama_ayah}}</p>
        <p>Tempat/tanggal lahir :{{$pendaftaran->tempat_lahir_ayah}} / {{$pendaftaran->tanggal_lahir_ayah}} </p>
        <p>NIK : {{$pendaftaran->nik_ayah}}</p>
        <p>Pendidikan Terakhir : {{$pendaftaran->pendidikan_terakhir_ayah}}</p>
        <p>Pekerjaan : {{$pendaftaran->pekerjaan_ayah}}</p>
        <p>Status : {{$pendaftaran->status_ayah}}</p>
        <p>Penghasilan : {{$pendaftaran->penghasilan_ayah}}</p><br>
        <p><b>Data Ibu</b> </p>
         <p>Nama : {{$pendaftaran->nama_ibu}}</p>
        <p>Tempat/tanggal lahir :{{$pendaftaran->tempat_lahir_ibu}} / {{$pendaftaran->tanggal_lahir_ibu}} </p>
        <p>NIK : {{$pendaftaran->nik_ibu}}</p>
        <p>Pendidikan Terakhir : {{$pendaftaran->pendidikan_terakhir_ibu}}</p>
        <p>Pekerjaan : {{$pendaftaran->pekerjaan_ibu}}</p>
        <p>Status : {{$pendaftaran->status_ibu}}</p>
        <p>Penghasilan : {{$pendaftaran->penghasilan_ibu}}</p><br>
        <p>Username : {{$pendaftaran->username}} </p>
        <p>Password : </p>


    </div>


    <script>
        window.print();
    </script>
</body>

</html>