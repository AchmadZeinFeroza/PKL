@extends('layouts.master')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-culture icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Daftar Kecamatan
                    <div class="page-title-subheading">Cabang Jember
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">{{$kecamatan->daerah->kecamatan}}</h5>
                <table id="dt" class="mb-0 table table-hover" id="usertable">
                    <thead>
                        <tr>
                            <th>Nama Kios</th>
                            <th>Pemilik</th>
                            <th>Alamat</th>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>No Telpon</th>
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
                            <td>
                                <form action="{{ route('hapus' , $kios->id_kios) }}" method="POST">
                                    {{csrf_field()}}{{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection

    @section('script')

    <script>
        $('#dt').DataTable();
    </script>
    
    @endsection