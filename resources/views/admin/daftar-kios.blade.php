@extends('layouts.master')
@include('sweetalert::alert')
@section('content')
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
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Table with hover</h5>
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
                            <td>{{$kios->kecamatan}}</td>
                            <td>{{$kios->desa}}</td>
                            <td>{{$kios->no_telpon}}</td>
                            <td>
                                <form action="{{ route('hapus' , $kios->id_kios) }}" method="POST">
                                    {{csrf_field()}}{{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger" >Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah
                </button>
            </div>
            @endsection
              <!-- Modal Tambah Kios -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                      <form action="{{route('import.kios')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
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

            

            {{-- <script>
                $(document).ready(function () {
                    $('#usertable').DataTable({
                        processing: true,
                        serverside: true,
                        scrollX: true,
                        ajax: "{{ route('ajax-kios') }}",
                        columnDefs: [
                            { width: 200, targets: 0 },
                            { width: 250, targets: 1 },
                            { width: 300, targets: 2 },
                            { width: 100, targets: 4 },
                            
                        ],
                        columns: [
                            { data: 'nama_kios', name: 'nama_kios' },
                            { data: 'pemilik', name: 'pemilik' },
                            { data: 'alamat', name: 'alamat' },
                            { data: 'kecamatan', name: 'kecamatan' },
                            { data: 'desa', name: 'desa' },
                            { data: 'no_telpon', name: 'no_telpon' },
                            {
                                data: 'id_kios',
                                "mRender": function ( data, type, row ) {
                                 return `<a href="{{ route('kios.destroy' , '`+ row.index +`') }}" class="btn btn-danger">Hapus</a>`
                                 }
                             }
                        ]
                    });
                })
            </script> --}}

            <script>
                $('#dt').DataTable();
            </script>
            @endsection