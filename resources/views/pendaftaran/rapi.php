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
        <p>Data Siswa</p>
        <p>Nama : </p>
        <p>Tempat/tanggal lahir : </p>
        <p>Jenis Kelamin : </p>
        <p>NIK : </p>
        <p>Alamat : </p>
        <p>Agama : </p>
        <p>Nomor Telepon : </p>
        <p>Apakah siswa penerima KPS ? : </p>
        <p>Nomor KPS : </p>
        <p>*Jika Tidak Memiliki Harap Diisi 0 </p>
        <p>E-mail : </p>
        <p>Jenis Tinggal</p>
        <p>Alat Transportasi</p><br>
        <p><b>Data Ayah</b> </p>
        <p>Nama</p>
        <p>Tempat/tanggal lahir : </p>
        <p>NIK : </p>
        <p>Pendidikan Terakhir : </p>
        <p>Pekerjaan : </p>
        <p>Status : </p>
        <p>Penghasilan : </p>

    </div>


    <script>
        window.print();
    </script>
</body>

</html>