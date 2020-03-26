<!-- Begin Page Content -->
@extends('layouts.master')

@section('content')
@include('sweetalert::alert')
<div class="app-main__inner">
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-culture icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Regritasi Kios Baru
                <div class="page-title-subheading">Cabang Jember
                </div>
            </div>
        </div>  
     </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Regristasi Kios Baru
        <div class="btn-actions-pane-right">
            <div class="nav">
                <a data-toggle="tab" href="#tab-eg2-0" class="btn-pill btn-wide active btn btn-outline-alternate btn-sm">Verifikasi</a>
                <a data-toggle="tab" href="#tab-eg2-1" class="btn-pill btn-wide mr-1 ml-1  btn btn-outline-alternate btn-sm">Disetujui</a>
                <a data-toggle="tab" href="#tab-eg2-2" class="btn-pill btn-wide  btn btn-outline-alternate btn-sm">Ditolak</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="tab-eg2-0" role="tabpanel">
                <div class="col-lg-12">
                    <div class="main-card mb-3 card">
                            <table class="mb-0 table table-hover" id="usertable">
                                <thead>
                                <tr>
                                    <th>Nama Pemilik</th>
                                    <th>Nama Kios</th>
                                    <th>Alamat</th>
                                    <th>Identitas</th>
                                    <th>SIUP</th>
                                    <th>Tanda Daftar Perusahaan</th>
                                    <th>Nomor telpon</th>
                                    <th>Desa</th>
                                    <th>Kecamatan</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach ($data as $kios)
                                  <form action="{{ route('kios.store') }}" method="post">
                                    {{csrf_field()}}
                                        <tr>
                                            <input type="hidden" name="id_regristasi" value="{{ $kios->id_regristasi }}">
                                            <td>{{ $kios->pemilik }} <input type="hidden" value="{{$kios->pemilik}}" name="pemilik"></td>
                                            <td>{{ $kios->nama_kios }} <input type="hidden" value="{{$kios->nama_kios}}" name="nama_kios"></td>
                                            <td>{{ $kios->alamat }} <input type="hidden" value="{{$kios->alamat}}" name="alamat"></td>
                                            <td><a class="btn btn-rounded detail-ktp" data-toggle="modal" data-target="#detail-ktp"  data-id="{{ $kios->id_regristasi}}"><i class="pe-7s-id"> Lihat Berkas</i></a></td>
                                            <td><a class="btn btn-rounded detail-siup" data-toggle="modal" data-target="#detail-siup"  data-id="{{ $kios->id_regristasi}}"><i class="pe-7s-home"> Lihat Berkas</i></a></td>
                                            <td><a class="btn btn-rounded detail-tdp" data-toggle="modal" data-target="#detail-tdp"  data-id="{{ $kios->id_regristasi}}"><i class="pe-7s-copy-file"> Lihat Berkas</i></a></td>
                                            <td>{{ $kios->no_telpon }} <input type="hidden" value="{{$kios->no_telpon}}" name="no_telpon"></td>
                                            <td>{{ $kios->desa }} <input type="hidden" value="{{$kios->desa}}" name="desa"></td>
                                            <td>{{ $kios->daerah->kecamatan }} <input type="hidden" value="{{$kios->kecamatan}}" name="kecamatan"></td>
                                            <td>{{ $kios->email }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="submit" class="btn btn-rounded"><i class="fa fa-check" style="color:lightgreen"></i></button>
                                                    <a class="btn btn-rounded detail-kios-ditolak" data-toggle="modal" data-target="#kiostolak"  data-id="{{ $kios->id_regristasi}}"><i class="fa fa-times" style="color:orangered;"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                      </form>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-eg2-1" role="tabpanel">
                <div class="col-lg-12">
                    <div class="main-card mb-3 card">
                            <table class="mb-0 table table-hover" id="usertable">
                                <thead>
                                <tr>
                                    <th>Nama Pemilik</th>
                                    <th>Nama Kios</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                </tr>
                                </thead>
                                @foreach ($kiosbaru as $data)
                                    <tr>
                                      <td>{{$data->pemilik}}</td>
                                      <td>{{$data->nama_kios}}</td>
                                      <td>{{$data->alamat}}</td>
                                      <td>{{$data->no_telpon}}</td>
                                    </tr>
                                @endforeach
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-eg2-2" role="tabpanel">
                <div class="col-lg-12">
                    <div class="main-card mb-3 card">
                            <table class="mb-0 table table-hover" id="usertable">
                                <thead>
                                <tr>
                                    <th>Nama Pemilik</th>
                                    <th>Nama Kios</th>
                                    <th>Alamat</th>
                                    <th>Identitas</th>
                                    <th>SIUP</th>
                                    <th>Tanda Daftar Perusahaan</th>
                                    <th>Kecamatan</th>
                                    <th>Email</th>
                                    <th>Alasan</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach ($penolakan as $kios)
                                      <tr>
                                        <td>{{ $kios->pemilik }}</td>
                                        <td>{{ $kios->nama_kios }}</td>
                                        <td>{{ $kios->alamat }}</td>
                                        <td>{{ $kios->ktp }}</td>
                                        <td>{{ $kios->siup }}</td>
                                        <td>{{ $kios->tdp }}</td>
                                        <td>{{ $kios->daerah->kecamatan }}</td>
                                        <td>{{ $kios->email }}</td>
                                        <td>{{ $kios->alasan }}</td>
                                      </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<div class="modal fade" id="detail-ktp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <img src="" class="ktp">
      </div>
   </div>
</div>

<div class="modal fade" id="detail-siup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <img src="" class="siup">
      </div>
   </div>
</div>

<div class="modal fade" id="detail-tdp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <img src="" class="tdp">
      </div>
   </div>
</div>

{{-- modal hapus --}}

<div class="modal fade" id="kiostolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('kios.ditolak') }}" method="post">
          {{csrf_field()}}
          Apakah Anda Yakin Menolak Kios Ini?
            <div class="form-group">
              <label for="alasan">Sertakan Alasan</label>
              <textarea class="form-control" rows="5" id="alasan" name="alasan"></textarea>
            </div>
      </div>
      <div class="modal-footer">
          <input type="hidden" name="id_regristasi" class="kiostolak">
          <button type="submit" class="btn btn-danger">Yakin</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>
<script>

    $('.detail-ktp').click(function () {
      var id = $(this).data('id');
      var urldata = "{{url('regristasi-ktp')}}" + '/' + id;
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        type: "POST",
        dataType: 'json',
        url: urldata,
        data: { '_token': $('input[name=_token]').val() },
        success: function (data) {

          if(data.ktp === ""){
            $('.ktp').attr("src","{{asset('profil')}}"   + '/' + 'default.png');
          }else{
            $('.ktp').attr("src","{{asset('regristasii/ktp')}}"  + '/' + data.ktp);
          }
        }
      }).done(function (data) {
        console.log('suksess');
      });
    });

  </script>

<script>

    $('.detail-siup').click(function () {
      var id = $(this).data('id');
      var urldata = "{{url('regristasi-siup')}}" + '/' + id;
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        type: "POST",
        dataType: 'json',
        url: urldata,
        data: { '_token': $('input[name=_token]').val() },
        success: function (data) {

          if(data.siup === ""){
            $('.siup').attr("src","{{asset('profil')}}"   + '/' + 'default.png');
          }else{
            $('.siup').attr("src","{{asset('regristasii/siup')}}"  + '/' + data.siup);
          }
        }
      }).done(function (data) {
        console.log('suksess');
      });
    });

  </script>

<script>

    $('.detail-tdp').click(function () {
      var id = $(this).data('id');
      var urldata = "{{url('regristasi-tdp')}}" + '/' + id;
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        type: "POST",
        dataType: 'json',
        url: urldata,
        data: { '_token': $('input[name=_token]').val() },
        success: function (data) {

          if(data.tdp === ""){
            $('.tdp').attr("src","{{asset('profil')}}"   + '/' + 'default.png');
          }else{
            $('.tdp').attr("src","{{asset('regristasii/tdp')}}"  + '/' + data.tdp);
          }
        }
      }).done(function (data) {
        console.log('suksess');
      });
    });

  </script>

  <script>

      $('.detail-kios-ditolak').click(function () {
        var id = $(this).data('id');
        var urldata = "{{url('detail-kios-ditolak')}}" + '/' + id;
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          type: "POST",
          dataType: 'json',
          url: urldata,
          data: { '_token': $('input[name=_token]').val() },
          success: function (data) {
            $('.kiostolak').val(data.id_regristasi);
          }
        }).done(function (data) {
          console.log('suksess');
        });
      });

    </script>

  @endsection