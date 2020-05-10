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
    <p>Halo {{$data['nama']}}, Terimakasih Atas Pertanyannya</p>
    <br>
    <p>{{$data['pesan']}}</p>
</body>
</html>