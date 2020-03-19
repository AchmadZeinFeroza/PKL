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
                <div>Pesan
                    <div class="page-title-subheading">Cabang Jember
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="list-group">
                @foreach ($data as $pesan)
                  <li class="list-group-item p-3" data-toggle="modal" data-target="#exampleModalCenter{{$pesan->id_pesan}}"><i class="fas fa-envelope text-info mx-5 "></i>{{$pesan->email}}<span class="d-flex justify-content-end"><small>{{$pesan->created_at}}</small></span>
                  </li>                          
                @endforeach
              </ul>
        </div>
    </div>
    
    @endsection
    @foreach ($data as $pesan)
    <div class="modal fade " id="exampleModalCenter{{$pesan->id_pesan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">{{$pesan->nama}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             {{ $pesan->pesan}}
            </div>
            <div class="modal-footer">
                <form action="{{ route('hapus-pesan' , $pesan->id_pesan) }}" method="POST">
                    {{csrf_field()}}{{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger" >Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
                 <button type="button" class="btn btn-success">Balas</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach

    @section('script')
    <script>
        $( ".list-group-item" ).mouseover(function() {
             $(this).addClass( "active" );
        });
        $( ".list-group-item" ).mouseout(function() {
             $(this).removeClass( "active" );
        });
    </script>
    @endsection