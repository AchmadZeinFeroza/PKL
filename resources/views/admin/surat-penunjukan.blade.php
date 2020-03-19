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
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="btn-shadow dropdown-toggle btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-business-time fa-w-20"></i>
                        </span>
                        Buttons
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-inbox"></i>
                                    <span>
                                        Inbox
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span>
                                        Book
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-picture"></i>
                                    <span>
                                        Picture
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a disabled href="javascript:void(0);" class="nav-link disabled">
                                    <i class="nav-link-icon lnr-file-empty"></i>
                                    <span>
                                        File Disabled
                                    </span>
                                </a>
                            </li>
                        </ul>
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
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                         $i = 1;   
                        @endphp
                    @foreach ($data as $kios)    
                    <tr>
                      <th scope="row">{{$i}}</th>
                      <td>{{$kios->nama_kios}}</td>
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
              {{-- <!-- Modal Tambah Kios -->
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
          </div> --}}
            @section('script')


            @endsection