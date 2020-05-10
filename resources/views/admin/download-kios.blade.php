<!DOCTYPE html>
<html>
<head>
	<title>Kios PPI</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 6pt;
            padding: 1px;
            border:1px;
		}
	</style>
	<center>
		<h5>Kios PPI</h4>
	</center>
 
	<table class='table table-bordered'>
		<tr>
            <th>Nama Kios</th>
            <th>Pemilik</th>
            <th>Alamat</th>
            <th>Desa</th>
            <th>Kecamatan</th>
            <th>No_Telpon</th>
            <th>Kode_Pengecer</th>
          </tr>
          @foreach($data as $kios)
          <tr>
            <td>{{$kios->nama_kios}}</td>
            <td>{{$kios->pemilik}}</td>
            <td>{{$kios->alamat}}</td>
            <td>{{$kios->desa}}</td>
            <td>{{$kios->daerah->kecamatan}}</td>
            <td>{{$kios->no_telpon}}</td>
            <td>{{$kios->kode}}</td>
           </tr>
           @endforeach

	</table>
 
</body>
</html>