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
                <div>Daftar Kios
                    <div class="page-title-subheading">Cabang Jember
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
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
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Daftar Kios</h5>
                <table id="dt" class="mb-0 table table-hover" id="usertable">
                    <thead>
                        <tr>
                            <th>Nama Kios</th>
                            <th>Pemilik</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>No Telpon</th>
                            <th>Kode Pengecer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $kios)
                        <tr>
                            <td>{{$kios->nama_kios}}</td>
                            <td>{{$kios->pemilik}}</td>
                            <td>{{$kios->alamat}}</td>
                            <td>{{$kios->daerah->kecamatan}}</td>
                            <td>{{$kios->desa}}</td>
                            <td>{{$kios->no_telpon}}</td>
                            <td>{{$kios->kode}}</td>
                            <td>
                                <div class="form-inline">
                                    <form action="{{ route('hapus' , $kios->id_kios) }}" class="mr-2" method="POST">
                                        {{csrf_field()}}{{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                    <form>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal{{$kios->id_kios}}">Ubah</button>
                                    </form>
                                    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Tambah</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                    Tambah Massal
                </button> <small>       ( contoh berkas massal bisa didownload di menu berkas )</small>
            </div>
            @endsection
            <!-- Modal Tambah Kios -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Massal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('import.kios')}}" method="post" enctype="multipart/form-data"
                                class="form-horizontal">
                                @csrf
                                <input type="file" name="kios">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            @section('script')
            <script>
                $('#dt').DataTable({
                    "scrollX": true
                });
            </script>
            @endsection

            <!-- Modal Tambah Admin -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kios</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('tambah-kios')}}" method="POST">
                                {{csrf_field()}}
                                <div class="position-relative form-group">
                                    <label for="nama_kios">Nama Kios</label>
                                    <input name="nama_kios" id="nama_kios" placeholder="Masukkan Nama Kios" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="pemilik">Pemilik</label>
                                    <input name="pemilik" id="pemilik" placeholder="Masukkan Nama Pemilik" class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="alamat">Alamat</label>
                                    <input name="alamat" id="alamat" placeholder="Masukkan Alamat" type="text"
                                        class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="desa">Desa</label>
                                    <input name="desa" id="desa" placeholder="Masukkan Nama Desa" type="text"
                                        class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <select class="custom-select form-control" id="inputGroupSelect04" name="kecamatan">
                                        <option selected class="text-dark">-- Pilih Kecamatan --</option>
                                        <option value="1" class="text-dark">Ajung</option>
                                        <option value="2" class="text-dark">Jenggawah</option>
                                        <option value="3" class="text-dark">Mumbulsari</option>
                                        <option value="4" class="text-dark">Silo</option>
                                    </select>
                                </div>
                                <div class="position-relative form-group">
                                    <label for="no_telpon">No Telpon</label>
                                    <input name="no_telpon" id="no_telpon" placeholder="Masukkan Nomor Telpon" type="text"
                                        class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="kode">Kode Pengecer</label>
                                    <input name="kode" id="kode" placeholder="Masukkan Kode Pengecer" type="text"
                                        class="form-control">
                                </div>
                                <div class="position-relative form-group">
                                    <label for="spjb">No SPJB</label>
                                    <input name="spjb" id="spjb" placeholder="Masukkan Nomor SPJB" type="text"
                                        class="form-control">
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

            {{-- Ubah Data Kios --}}
            @foreach ($data as $kios)      
        <div class="modal fade" id="exampleModal{{ $kios->id_kios }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Kios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('kios.update' , $kios->id_kios )}}" method="POST">
                            {{csrf_field()}}{{method_field('PATCH')}}
                        <div class="position-relative form-group">
                            <label for="nama_kios">Nama Kios</label>
                        <input name="nama_kios" id="nama_kios" placeholder="Masukkan Nama Kios" class="form-control" value="{{ $kios->nama_kios }}">
                        </div>
                        <div class="position-relative form-group">
                            <label for="pemilik">Pemilik</label>
                            <input name="pemilik" id="pemilik" placeholder="Masukkan Nama Pemilik" class="form-control" value="{{ $kios->pemilik }}">
                        </div>
                        <div class="position-relative form-group">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" id="alamat" placeholder="Masukkan Alamat" type="text"
                                class="form-control" value="{{ $kios->alamat }}">
                        </div>
                        <div class="position-relative form-group">
                            <label for="desa">Desa</label>
                            <input name="desa" id="desa" placeholder="Masukkan Nama Desa" type="text"
                                class="form-control" value="{{ $kios->desa }}">
                        </div>
                        <div class="position-relative form-group">
                            <label for="">Kecamatan</label>
                            <select class="custom-select form-control" id="inputGroupSelect04" name="kecamatan">
                            <option selected class="text-dark" value="{{$kios->kecamatan}}">{{ $kios->daerah->kecamatan }}</option>
                                <option value="1" class="text-dark">Ajung</option>
                                <option value="2" class="text-dark">Jenggawah</option>
                                <option value="3" class="text-dark">Mumbulsari</option>
                                <option value="4" class="text-dark">Silo</option>
                            </select>
                        </div>
                        <div class="position-relative form-group">
                            <label for="no_telpon">No Telpon</label>
                            <input name="no_telpon" id="no_telpon" placeholder="Masukkan Nomor Telpon" type="text"
                                class="form-control" value="{{ $kios->no_telpon }}">
                        </div>
                        <div class="position-relative form-group">
                            <label for="kode">Kode Pengecer</label>
                            <input name="kode" id="kode" placeholder="Masukkan Kode Pengecer" type="text"
                                class="form-control" value="{{ $kios->kode }}">
                        </div>
                        <div class="position-relative form-group">
                            <label for="spjb">No SPJB</label>
                            <input name="spjb" id="spjb" placeholder="Masukkan Nomor SPJB" type="text"
                                class="form-control" value="{{ $kios->spjb }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    @endforeach
            {{-- End Ubah Data Kios --}}