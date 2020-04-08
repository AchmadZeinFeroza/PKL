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
                <div>Daftar Admin
                    <div class="page-title-subheading">Cabang Jember
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-sm-12 mx-auto">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="main-card mb-3 card py-5 ">
            <table class="mb-0 table table-striped ">
                <tbody>
                    @foreach ($data as $user)
                    @if($user->id % 2 == 0)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                    <tr>
                        <td class="px-py-5 d-flex justify-content-end mr-5">
                            <img src="{{ $user->getAvatar() }}" class="rounded-circle " width="150px">
                        </td>
                        <td>
                            <h5>{{ $user->name }}</h5>
                            <p>{{ $user->posisi->posisi }}</p>
                            <button  type="button" class="mb-2 mr-2 btn btn-alternate button-detail"
                            data-toggle="modal" data-target="#detail-profil"  data-id='{{ $user->id}}'>
                                Detail
                            </button>
                            <button  type="button" class="mb-2 mr-2 btn btn-danger"
                            data-toggle="modal" data-target="#hapus-profil{{ $user->id }}">
                                Hapus
                            </button>
                        </td>

                    </tr>
                    @endif
                    @if($user->id % 2 == 1)
                    <tr>
                        <td class="text-right px-5">
                            <h5>{{ $user->name }}</h5>
                            <p>{{ $user->posisi->posisi }}</p>
                            <button  type="button" class="mb-2 mr-2 btn btn-alternate button-detail"
                            data-toggle="modal" data-target="#detail-profil"  data-id='{{ $user->id}}' >
                                Detail
                            </button>
                            <button  type="button" class="mb-2 mr-2 btn btn-danger"
                            data-toggle="modal" data-target="#hapus-profil{{ $user->id }}">
                                Hapus
                            </button>
                        </td>
                        <td class=" px-py-5 ml-5 d-flex justify-content-start "><img
                                src="{{ $user->getAvatar()  }}" class="rounded-circle" width="150px">
                        </td>

                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6 mx-auto  d-flex justify-content-center mb-5">
            <button type="button" class="btn btn-primary p-3 px-5" data-toggle="modal" data-target="#exampleModal">
                Tambah
            </button>
        </div>
    </div>
</div>
@endsection



@section('script')
<!-- Modal Tambah Admin -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('tambah-admin')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="position-relative form-group">
                        <label for="name">Nama</label>
                        <input name="name" id="name" placeholder="Masukkan Nama"  class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="email">Email</label>
                        <input name="email" id="email" placeholder="Masukkan Email" type="email" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="password">Password</label>
                        <input name="password" id="password" placeholder="Masukkan Password" type="password" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="alamat">Alamat</label>
                        <input name="alamat" id="alamat" placeholder="Masukkan alamat" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="role">Posisi</label>
                        <select class="custom-select form-control" id="inputGroupSelect04" name="role">
                            <option selected class="text-dark">-- Pilih Posisi --</option>
                            <option value="1" class="text-dark">Manager</option>
                            <option value="2" class="text-dark">Bendahara</option>
                            <option value="3" class="text-dark">Kepala Gudang</option>
                        </select>
                    </div>
                    <div class="position-relative form-group">
                        <label for="nik">NIK</label>
                        <input name="nik" id="nik" placeholder="Masukkan nik" type="number" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="facebook">Facebook</label>
                        <input name="facebook" id="facebook" placeholder="Masukkan Facebook" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="wa">Whats App</label>
                        <input name="wa" id="wa" placeholder="Masukkan WhatsApp" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="avatar">Image</label>
                        <input name="avatar" id="avatar" type="file" class="form-control-file">
                        <small class="form-text text-muted">File harus berupa jpg , png dan jpeg</small>
                        <small class="form-text text-muted">Pastikan Semua data terisi dengan benar</small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>

{{-- End Modal Tambah Admin --}}

{{-- Modal Detail Profil --}}

<div class="modal fade profil" id="detail-profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 mx-auto">
                            <img  src="{{asset('img/default-avatar.png')}}" class="rounded-circle fotoprofil" width="90%"></td>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <form class="col-md-9 offset-md-2" method="POST" id="form-ubah" enctype="multipart/form-data" >
                            @method('PATCH') 
                            @csrf       
                            <div class="form-group row mx-auto ">
                              <label for="name" class="col-sm-4 col-form-label text-right">Nama</label>
                              <div class="col-sm-8">
                                <input type="text" name="name" id="name" class="form-control-plaintext text-left data-name" value="">
                              </div>
                            </div>
                            <div class="form-group row mx-auto ">
                                <label for="role" class="col-sm-4 col-form-label text-right">Posisi</label>
                                <div class="col-sm-8">
                                        <select class="custom-select form-control" id="inputGroupSelect04" name="role">
                                            <option selected class="text-dark data-role">-- Pilih Posisi --</option>
                                            <option value="1" class="text-dark">Manager</option>
                                            <option value="2" class="text-dark">Bendahara</option>
                                            <option value="3" class="text-dark">Kepala Gudang</option>
                                        </select>
                                        <small>Kode 1 = Manager , 2 = Bendahara , 3 = Kepala Gudang</small>
                                </div>
                              </div>
                            <div class="form-group row mx-auto ">
                                <label for="email" class="col-sm-4 col-form-label text-right">Email</label>
                                <div class="col-sm-8">
                                  <input type="text" name="email" id="email" class="form-control-plaintext text-left data-email" value="">
                                </div>
                            </div>
                            <div class="form-group row mx-auto ">
                                <label for="nik" class="col-sm-4 col-form-label text-right">NIK</label>
                                <div class="col-sm-8">
                                  <input type="text" name="nik" id="nik" class="form-control-plaintext text-left data-nik" value="">
                                </div>
                            </div>
                            <div class="form-group row mx-auto ">
                                <label for="facebook" class="col-sm-4 col-form-label text-right">Facebook</label>
                                <div class="col-sm-8">
                                  <input type="text" name="facebook" id="facebook" class="form-control-plaintext text-left data-facebook" value="">
                                </div>
                            </div>
                            <div class="form-group row mx-auto ">
                                <label for="wa" class="col-sm-4 col-form-label text-right">Whats App</label>
                                <div class="col-sm-8">
                                  <input type="text" name="wa" id="wa" class="form-control-plaintext text-left data-wa" value="">
                                </div>
                            </div>
                            <div class="form-group row mx-auto ">
                                <label for="avatar" class="col-sm-4 col-form-label text-right">Foto</label>
                                <div class="col-sm-8">
                                  <input type="file" name="avatar" id="avatar" class="form-control-plaintext text-left data-avatar" value="">
                                  <small>File harus berupa jpg , png dan jpeg</small>
                                </div>
                            </div>
                            <div class="form-group row mx-auto ">
                                <div class="col-sm-8">
                                  <input type="hidden" name="id" id="id" class="form-control-plaintext text-left data-id" value="">
                                  {{-- <input type="hidden" name="role" id="role" class="form-control-plaintext text-left data-role" value=""> --}}
                                </div>
                            </div>
                            <div class="form-group row mx-auto ">
                                <label for="alamat" class="col-sm-4 col-form-label text-right">Alamat</label>
                                <div class="col-sm-8">
                                  <textarea class="form-control-plaintext text-left data-alamat" name="alamat" id="alamat" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="submit" class="btn btn-danger">Hapus</button> --}}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning"  id="ubah">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Modal Detail Profil --}}


{{-- modal hapus user --}}
@foreach ($data as $pengguna)
<div class="modal fade" id="hapus-profil{{ $pengguna->id }}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                     Yakin Ingin Menghapus user {{$pengguna->name}} ini ?
            <div class="modal-footer">
                <form action="{{ route('hapus-admin' , $pengguna->id) }}" class="mr-2" method="POST">
                    {{csrf_field()}}{{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach

{{-- end modal hapus user --}}


  <script>

    $('.button-detail').click(function () {
      var id = $(this).data('id');
      var urldata = "{{url('user')}}" + '/' + id;
 
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

          if(data.avatar === ""){
            $('.fotoprofil').attr("src","{{asset('profil')}}"   + '/' + 'default.png');
          }else{
            $('.fotoprofil').attr("src","{{asset('profil')}}"  + '/' + data.avatar);
          }
          
          $('.data-name').val(data.name);
          $('.data-id').val(data.id);
          $('.data-email').val(data.email);
          $('.data-role').html(data.role);
          $('.data-alamat').val(data.alamat);
          $('.data-facebook').val(data.facebook);
          $('.data-wa').val(data.wa);
          $('.data-nik').val(data.nik);
          $('.data-avatar').val(data.avatar);
          var data =  $('#id').val();
          var action = "{{url('user/ubah')}}" + '/' + data;
          $('#form-ubah').attr('action', action);
        }
      }).done(function (data) {
        console.log('suksess');
      });
    });

  </script>

@endsection
