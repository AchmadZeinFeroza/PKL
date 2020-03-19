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
                <div>SPJB & Penunjukan
                    <div class="page-title-subheading">Surat
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <br>
                  <table class="table table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kios</th>
                        <th scope="col">SPJB</th>
                        <th scope="col">Penunjukan</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                        @php
                         $i = 1;   
                        @endphp
                    @foreach ($data as $kios)    
                    <tr>
                      <td scope="row">{{$i}}</td>
                      <td>{{$kios->nama_kios}}</td>
                      <td>
                        <div class="btn-group">
                            <form action="{{route('letter.update' , $kios->id_kios)}}" method="post">
                                {{csrf_field()}}{{method_field('PATCH')}}
                                <input type="date" class="form-control" name="tanggal">
                                <button type="submit" class="btn btn-rounded btn-secondary"> Cetak</button>
                            </form>
                      </div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <form action="{{route('penunjukan' , $kios->id_kios)}}" method="get">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-rounded btn-secondary"> Cetak</button>
                            </form>
                        </div>
                    </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                    </tbody>
                </table>
                {{$data->links()}}	
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                  $(".search-input").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                  });
                });
            </script>

            @endsection