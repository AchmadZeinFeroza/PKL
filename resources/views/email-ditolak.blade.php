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
    <p>Penolakan permohonan Calon Kios Baru PT Perusahaan Perdagangan Indoneisa Sub Cabang Jember</p>
    <br>
    <p>Kepada Yth</p>
    <p>{{$kios['pemilik']}}</p>
    <p>{{$kios['alamat']}}</p>
    <br>
    <p>Dengan Hormat,</p>
    <br>
    <p>Mohon maaf kami sampaikan bahwa permohonan menjadi kios baru PT Perdagangan Indonesia Sub Cabang Jember telah ditolak</p>
    <br>
    <p>Adapun alasan penolakan ini adalah  :</p>
    <p>{{$kios['alasan']}}</p>
    <br>
    <p>Silahkan mengajukan permohonan kembali.Terimakasih</p>
    <br>
    <p>PT Perusahaan Perdagangan Indonesia Sub Cabang Jember </p>
</body>
</html>