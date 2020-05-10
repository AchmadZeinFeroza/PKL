<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EMAIL</title>
    <style>
        .container{
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/favicon.png') }}" alt="">
    </div>
    <p>Kepada Yth</p>
    <p>{{$kios['pemilik']}}</p>
    <p>{{$kios['alamat']}}</p>
    <br>
    <p>Dengan Hormat,</p>
    <br>
    <p>Selamat permintaan anda sebagai kios perusahaan perdagangan indonesia diterima, selanjutnya segera datang ke tempat kami dengan membawa berkas sebagai berikut:</p>
    <ol>
        <li>KTP</li>
        <li>KK</li>
        <li>Tanda Daftar Perusahaan</li>
        <li>SIUP</li>
    </ol>
    <p>Terimakasih atas kerja samanya</p>
</body>
</html>