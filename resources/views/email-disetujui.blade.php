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
    <p>Penerimaan permohonan Calon Kios Baru PT Perusahaan Perdagangan Indoneisa Sub Cabang Jember</p>
    <br>
    <p>Kepada Yth</p>
    <p>{{$kios['pemilik']}}</p>
    <p>{{$kios['alamat']}}</p>
    <br>
    <p>Dengan Hormat,</p>
    <br>
    <p>Selamat permintaan anda sebagai kios perusahaan perdagangan indonesia diterima, selanjutnya segera datang ke tempat kami dengan membawa berkas sebagai berikut:</p>
    <ol>
        <li>Fotocopy KTP</li>
        <li>Fotocopy KK</li>
        <li>Fotocopy Tanda Daftar Perusahaan</li>
        <li>Fotocopy SIUP</li>
        <li>Materai 6000</li>
    </ol>
    <br>
    <p>Silahkan mengajukan permohonan kembali.Terimakasih</p>
    <br>
    <p>PT Perusahaan Perdagangan Indonesia Sub Cabang Jember </p>
</body>
</html>