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
    <p>Sebelumynya mohon maaf, permintaan anda untuk menjadi kios kami belum memnuhi kriteria,{{$kios['alasan']}} silahkan tanya pada form pertanyaan bila ada yang ingin ditanyakan</p>
</body>
</html>