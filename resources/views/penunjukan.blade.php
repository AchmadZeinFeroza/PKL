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
        }
        .header{
            width: 600px;
            margin: auto;
            text-align: center;
        }
        .judul{
            margin-top: 60px;
        }
        .judul2{
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
      font-size: 11.5pt;
    }
        .font-header2{
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-weight: bold;
      font-size: 10.5pt;
    }
    .font-content{
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-size: 11pt;
    }
    .font-content-halaman{
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-size: 10.5pt;
      margin-top: 17px;
    }
    .font-content-footer-2{
      font-family: Arial, Helvetica, sans-serif;
      font-size: 10pt;
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
      <div class="logo" style="margin-top:-25px;">
          <img src="{{ asset('images/Picture1.png') }}" style="margin: auto; width: 100px;">
      </div>
      <div class="header">
          <div class="judul">
              <p class="font-header">PENUNJUKAN PENGECER PUPUK BERSUBSIDI PT PETROKIMIA GRESIK</p>
          </div>
      </div>
      <hr style="width: 87%; margin-top:-2px;">
      <div class="header" style="margin-top:-10px;">
          <div class="judul2">
              <p class="font-content"> Nomor : {{$surat->spjb}}/PPI/Sub Cab-Jbr/SPK/PKG-Jbr/{{$tanggal[3]}}/{{$tgl_angka[0]}}</p>
          </div>
      </div>
      <p class="font-content" style="margin-top: -10px;">Pada hari ini, {{$hari}}, tanggal {{$tanggal[2]}}, bulan {{$tanggal[1]}}, tahun dua ribu {{$tanggal[4]}}
          ({{$tgl}}), kami yang bertanda tangan di bawah ini :
      </p>
      <div class="inline" style="margin-top:15px;">
          <div style="width: 25%; display:inline-block;">
              <span class="font-content-2">IMAM SUPINGI </span>
          </div>
          <div style="width: 2%; display:inline-block;">
              <span class="font-content-2">: </span>
          </div>
          <div style="width: 73%; display:inline-block;">
              <p class="font-content" style="margin-top: -3px; text-align:justify;">Pimpinan PT. Perusahaan Perdagangan Indonesia (Persero), dalam hal ini bertindak untuk dan atas nama PT. Perusahaan Perdagangan Indonesia (Persero), berkedudukan di Jl. Rajawali No. 54 Surabaya.
                  selaku Distributor PT Petrokimia Gresik Berdasarkan Surat Penunjukan Nomor : 7132/B/SA.04.02/24/DR/2019
                  </p>
          </div>
      </div>
      <br>
      <div class="header" style="margin-top: -14px;">
        <div class="judul2">
            <p class="font-content"> MENUNJUK</p>
            <p class="font-header">{{$surat->nama_kios}}</p>
            <p class="font-content"> Sebagai Pengecer Pupuk Bersubsidi PT Petrokimia Gresik</p>
        </div>
      </div>
      <div class="inline" style="margin-top:8px;">
        <div style="width: 3%; display: inline-block;margin-right:1%;">
            <p class="font-content">1.</p>
        </div>
        <div style="width: 96%; display: inline-block;">
            <p class="font-content"  style="margin-top: -3px; text-align:justify;">Dasar Pertimbangan</p>
        </div>
       </div>
       <br>
      <div class="inline" style="margin-top:-14px;">
          <div style="width: 3%; display: inline-block;margin-right:1%;margin-left:5%;">
              <p class="font-content">a.</p>
          </div>
          <div style="width: 91%; display: inline-block;">
              <p class="font-content"  style="margin-top: -7px; text-align:justify;">Segala persyaratan telah dipenuhi untuk dapat ditunjuk sebagai Pengecer Pupuk Bersubsidi PT Petrokimia Gresik;</p>
          </div>
      </div>
      <br>
      <div class="inline" style="margin-top:-14px;">
          <div style="width: 3%; display: inline-block;margin-right:1%;margin-left:5%;">
              <p class="font-content">b.</p>
          </div>
          <div style="width: 91%; display: inline-block;">
              <p class="font-content"  style="margin-top: -7px; text-align:justify;">Hasil evaluasi terhadap kemampuan dan kinerja menunjukan hasil yang baik sebagai Pengecer Pupuk Bersubsidi PT Petrokimia Gresik.</p>
          </div>
      </div>
      <br>
      <div class="inline" style="margin-top:-14px;">
        <div style="width: 3%; display: inline-block;margin-right:1%;">
            <p class="font-content">2.</p>
        </div>
        <div style="width: 96%; display: inline-block;">
            <p class="font-content"  style="margin-top: -3px; text-align:justify;">Data Pengecer</p>
        </div>
       </div>
       <br>
      <div class="inline" style="margin-top:-16px;">
          <div style="width: 3%; display: inline-block;margin-right:1%;margin-left:5%;">
              <p class="font-content">a.</p>
          </div>
          <div style="width: 91%; display: inline-block;">
              <p class="font-content"  style="margin-top: -3px; text-align:justify;">Nama Perusahaan   &nbsp; &nbsp; &nbsp; : {{$surat->nama_kios}}</p>
              <p class="font-content"  style="margin-top: -3px; text-align:justify;">Nama Pimpinan    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{$surat->pemilik}}</p>
              <p class="font-content"  style="margin-top: -3px; text-align:justify;">Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; : {{$surat->nama_kios}} {{$surat->desa}} {{$surat->kecamatan}} </p>
          </div>
      </div>
      <br>
      <div class="inline" style="margin-top:-20px;">
        <div style="width: 3%; display: inline-block;margin-right:1%;">
            <p class="font-content">3.</p>
        </div>
        <div style="width: 96%; display: inline-block;">
            <p class="font-content"  style="margin-top: -3px; text-align:justify;">Adapun ketentuan-ketentuan umum yang harus dipatuhi dan dilaksanakan oleh Pengecer, antara lain : </p>
        </div>
       </div>
       <br>
      <div class="inline" style="margin-top:-14px;">
          <div style="width: 3%; display: inline-block;margin-right:1%;margin-left:5%;">
              <p class="font-content">a.</p>
          </div>
          <div style="width: 91%; display: inline-block;">
              <p class="font-content"  style="margin-top: -6px; text-align:justify;">Peraturan Menteri Perdagangan RI yang berlaku beserta aturan tambahan dan perubahannya tentang Pengadaan dan Penyaluran Pupuk Bersubsidi untuk sektor Pertanian.</p>
          </div>
      </div>
      <br>
      <div class="inline" style="margin-top:-14px;">
        <div style="width: 3%; display: inline-block;margin-right:1%;margin-left:5%;">
            <p class="font-content">b.</p>
        </div>
        <div style="width: 91%; display: inline-block;">
            <p class="font-content"  style="margin-top: -6px; text-align:justify;">Peraturan Menteri Pertanian RI yang berlaku beserta aturan tambahan dan perubahannya tentang Kebutuhan dan Harga Eceran Tertinggi  (HET) Pupuk Bersubsidi untuk sektor Pertanian.</p>
        </div>
    </div>
      <br>
      <div class="inline" style="margin-top:-14px;">
        <div style="width: 3%; display: inline-block;margin-right:1%;margin-left:5%;">
            <p class="font-content">c.</p>
        </div>
        <div style="width: 91%; display: inline-block;">
            <p class="font-content"  style="margin-top: -6px; text-align:justify;">Ketentuan dan Kebijakan PT Pupuk Indonesia (Persero) dan/atau PT Petrokimia Gresik yang berkaitan dengan Pupuk Bersubsidi.</p>
        </div>
    </div>
    <br>
      <div class="inline" style="margin-top:-5px;">
        <div style="width: 3%; display: inline-block;margin-right:1%;">
            <p class="font-content">4.</p>
        </div>
        <div style="width: 96%; display: inline-block;">
            <p class="font-content"  style="margin-top: -3px; text-align:justify;">Penunjukan pengecer ini berlaku terhitung mulai tanggal satu, bulan Januari, tahun dua ribu {{$tanggal[4]}} (01-01-{{$tgl_angka[0]}}) sampai dengan tanggal tiga puluh satu, bulan Desember, tahun dua ribu {{$tanggal[4]}} (31-12-{{$tgl_angka[0]}}).</p>
        </div>
    <br>
    <div class="inline" style="margin-top:-20px;">
        <div style="width: 3%; display: inline-block;margin-right:1%;">
            <p class="font-content">5.</p>
        </div>
        <div style="width: 96%; display: inline-block;">
            <p class="font-content"  style="margin-top: -3px; text-align:justify;">Penunjukan dapat diakhiri secara sepihak Distributor dengan Persetujuan Perwakilan
                PT Petrokimia Gresik.
                </p>
        </div>
    <br>
    <div class="inline" style="margin-top:-20px;">
        <div style="width: 3%; display: inline-block;margin-right:1%;">
            <p class="font-content">6.</p>
        </div>
        <div style="width: 96%; display: inline-block;">
            <p class="font-content"  style="margin-top: -3px; text-align:justify;">Surat Penunjukan ini secara rinci diatur tersendiri dalam Surat Perjanjian Jual Beli (SPJB) dan merupakan bagian yang tidak terpisahkan.
                </p>
        </div>
    <br>
    <p class="font-content" style="margin-top: -23px;"> Demikian Surat Penunjukan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
     <div class="inline" style="margin-top:15px;">
         <div style="width: 33%; display: inline-block;">
             <p class="font-header2">PT Perusahaan Perdagangan Indonesia ( Persero ),</p>
         </div>
         <div style="width: 33%; display: inline-block;">
             <p class="font-header2">Menyetujui,<br>{{$surat->nama_kios}}
                 </p>
         </div>
         <div style="width: 33%; display: inline-block; margin-top:-8px;">
             <p class="font-header2">Menyetujui,<br>PT Petrokimia Gresik 
                 </p>
         </div>
     </div>
     <br>
     <div class="inline" style="margin-top:10px;">
        <div style="width: 33%; display: inline-block; text-align:left;">
            <p class="font-header2">IMAM SUPINGI</p><hr style="margin-top:-2px; width:45%; margin-left:-0%;">
        </div>
        <div style="width: 33%; display: inline-block;">
            <p class="font-header2">{{$surat->pemilik}}</p><hr style="margin-top:-2px;width:55%; margin-left:-0%;">
        </div>
        <div style="width: 33%; display: inline-block; margin-top:-8px;">
            <p class="font-header2">(Hijradma Pandika Hardono)
                </p><hr style="margin-top:-2px;width:86%; margin-left:-0%;">
        </div>
    </div>
     <br>
     <div class="inline" style="margin-top:-30px;">
        <div style="width: 33%; display: inline-block; text-align:left;">
            <p class="font-content">General Manager</p>
        </div>
        <div style="width: 33%; display: inline-block;">
            <p class="font-content">Pimpinan</p>
        </div>
        <div style="width: 33%; display: inline-block; margin-top:-8px;">
            <p class="font-content">SPDP  Kab. Jember
                </p>
        </div>
    </div>
    <br>
    <div class="inline" style="margin-top:-10px;">
        <div style="width: 33%; display: inline-block; text-align:left;">
            <p class="font-content">PIHAK PERTAMA : ..... / .....</p>
        </div>
        <div style="width: 33%; display: inline-block;">
            <p class="font-content"></p>
        </div>
        <div style="width: 33%; display: inline-block; margin-top:-8px;">
            <p class="font-content">PIHAK KEDUA : ..... / .....
                </p>
        </div>
    </div>

  </div>
</body>
</html>