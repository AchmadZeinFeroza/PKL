<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p{
            line-height: 20px;
        }
        @page{
            margin-bottom: 0;
        }
        .container{
            width: 93%;
            margin:auto;
        }
        .logo{
            margin: auto;
            width: 150px;
            margin-top: 4%;
        }
        .header{
            width: 500px;
            margin: auto;
            text-align: center;
        }
        .judul{
            margin-top: 100px;
        }
        .judul2{
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .inline{
            display: inline-block;
            width: 100%;
        }

        /* font */

        .font-header{
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-weight: bold;
      font-size: 12pt;
      margin-top: 6px;
    }
    .font-content{
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-size: 11.5pt;
    }
    .font-content-halaman{
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-size: 10.5pt;
      margin-top: 17px;
    }
    .font-content-footer-2{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 10.5pt;
    }
    .font-content-footer{
      font-family: 'Courier New', Courier, monospace;
      font-size: 9pt;
    }
    .font-content-2{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 10.5pt;
      font-weight: bold;
    }
    .garis-header{
      color:black;
    }
    p{
      margin:0;
    }
    .left-6{
      margin-left: -6%;
    }
    .left-4{
      margin-left: -4%;
    }
    .left-1{
      margin-left: -1%;
    }
    .top6{
      margin-top: 6%;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/Picture1.png') }}" style="margin: auto; width: 150px;">
        </div>
        <div class="header">
            <div class="judul">
                <p class="font-header">PERJANJIAN</p>
                <p class="font-header">antara</p>
                <p class="font-header">PT. PERUSAHAAN PERDAGANGAN INDONESIA (Persero)</p>
                <p class="font-header">dengan</p>
                <p class="font-header">{{$surat->nama_kios}}</p>
                <p class="font-header">tentang</p>
                <p class="font-header">JUAL BELI PUPUK BERSUBSIDI PT PETROKIMIA GRESIK</p>
            </div>
        </div>
        <hr style="margin-top: 25px;">
        <div class="header">
            <div class="judul2">
                <p class="font-content"> Nomor : 69/PPI/Sub Cab-Jbr/SPJB/PKG-Jbr/{{$tanggal[3]}}/{{$tgl_angka[0]}}</p>
            </div>
        </div>
        <p class="font-content">Pada hari ini, Jumat, tanggal {{$tanggal[2]}}, bulan {{$tanggal[1]}}, tahun dua ribu Sembilan belas
            ({{$tgl}}), kami yang bertanda tangan di bawah ini :
        </p>
        <div class="inline" style="margin-top:15px;">
            <div style="width: 35%; display:inline-block;">
                <span class="font-content-2">1. IMAM SUPINGI </span>
            </div>
            <div style="width: 5%; display:inline-block;">
                <span class="font-content-2">: </span>
            </div>
            <div style="width: 60%; display:inline-block;">
                <p class="font-content" style="margin-top: -3px; text-align:justify;">Pimpinan PT. Perusahaan Perdagangan Indonesia (Persero), dalam hal ini bertindak untuk dan atas nama PT. Perusahaan Perdagangan Indonesia (Persero), berkedudukan di Jl. Rajawali No. 54 Surabaya.
                    selaku Distributor PT Petrokimia Gresik Berdasarkan Surat Penunjukan Nomor : 7132/B/SA.04.02/24/DR/2019
                    Selanjutnya disebut “PIHAK PERTAMA”.
                    </p>
            </div>
        </div>
        <br>
        <div class="inline" style="margin-top:5px;">
            <div style="width: 35%; display:inline-block;">
                <span class="font-content-2">2.	LIEM DJIENG HWIE </span>
            </div>
            <div style="width: 5%; display:inline-block;">
                <span class="font-content-2">: </span>
            </div>
            <div style="width: 60%; display:inline-block;">
                <p class="font-content" style="margin-top: -3px; text-align:justify;">Pemilik / Penanggung Jawab Tani Mandiri TK  dalam hal ini bertindak untuk dan atas nama {{$surat->nama_kios}}   berkedudukan di {{$surat->alamat}} {{$surat->desa}} {{$surat->kecamatan}} Kabupaten Jember
                    Selanjutnya disebut “PIHAK KEDUA”.                    Jalan Budi 
                    </p>
            </div>
        </div>
        <p class="font-content">PIHAK PERTAMA dan PIHAK KEDUA secara bersama-sama, selanjutnya disebut “PARA PIHAK”, dan secara sendiri-sendiri disebut “PIHAK”.
        </p>
        <div class="inline" style="margin-top:8px;">
            <div style="width: 3%; display: inline-block;margin-right:1%;">
                <p class="font-content">a.</p>
            </div>
            <div style="width: 96%; display: inline-block;">
                <p class="font-content"  style="margin-top: -3px; text-align:justify;">bahwa PIHAK PERTAMA selaku Distributor PT Petrokimia Gresik bermaksud akan menyalurkan pupuk bersubsidi PT Petrokimia Gresik yang dikuasainya, berdasarkan surat penunjukan distributor Nomor : 7132/B/SA.04.02/24/DR/2019 dan Perjanjian Jual Beli Nomor : 2081/B/HK.01.02/24/SP/2019;</p>
            </div>
        </div>
        <br style="margin-top:-10px;display:block;">
        <div class="inline" style="margin-top:8px;">
            <div style="width: 3%; display: inline-block;margin-right:1%;">
                <p class="font-content">b.</p>
            </div>
            <div style="width: 96%; display: inline-block;">
                <p class="font-content"  style="margin-top: -10px; text-align:justify;">bahwa PIHAK KEDUA adalah Pengecer PIHAK PERTAMA sebagaimana Penunjukan Pengecer Pupuk Bersubsidi PT Petrokimia Gresik Nomor : 69/PPI/Sub Cab-Jbr/SPJB/PKG- </p>
            </div>
        </div>
        <footer style="margin-top:-5px;">
            <div style="width: 30%; display: inline-block;">
                <p class="font-content-footer-2" style="margin-top:-35%;">
                    PIHAK PERTAMA : .... / ....
                  </p>
            </div>
            <div style="width: 40%; display: inline-block; text-align:center;">
                <p class="font-content-halaman">
                    Halaman 1 dari 11
                </p>
                <div style="margin-top: 30px;">
                    <p class="font-content-footer">
                        SPJB Distributor dengan Pengecer
                    </p>
                </div>
            </div>
            <div style="width: 30%; display: inline-block;">
                <p class="font-content-footer-2"  style="margin-top:12%;">
                    PIHAK KEDUA : .... / ....
                  </p>
            </div>
          </footer>
    </div>
</body>
</html>