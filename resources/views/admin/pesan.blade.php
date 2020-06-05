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
        <li class="list-group-item p-3 pesan" data-toggle="modal" data-target="#exampleModalCenter{{$pesan->id_pesan}}">
          @if($pesan->aksi === null)
            <br><small style="color: red;">Belum Dibalas</small>
          @else
           <br><small style="color: green;">Sudah Dibalas</small>
          @endif
          <i class="fas fa-envelope text-info mx-5 "></i>{{$pesan->email}}<span
          class="d-flex justify-content-end"><small>{{$pesan->created_at->diffForHumans()}}</small> </span>
        </li>
        @endforeach
      </ul>
    </div>
  </div>

  @endsection
  @foreach ($data as $pesan)
  <div class="modal fade " id="exampleModalCenter{{$pesan->id_pesan}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">{{$pesan->nama}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>{{ $pesan->pesan}}</p>
          <form action="{{route('email')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="nama" value="{{$pesan->nama}}">
            <input type="hidden" name="email" value="{{$pesan->email}}">
            <input type="hidden" name="id_pesan" value="{{$pesan->id_pesan}}">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Balas Pesan  :</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-alternate" id="kirim">Kirim</button>
          </form>
        </div>
        <div class="modal-footer">
          <form action="{{ route('hapus-pesan' , $pesan->id_pesan) }}" method="POST">
            {{csrf_field()}}{{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  @section('script')
  <script>
    $(".list-group-item").mouseover(function () {
      $(this).addClass("active");
    });
    $(".list-group-item").mouseout(function () {
      $(this).removeClass("active");
    });
  </script>
  <script>
    $('.pesan').click(function(){
      $(this).find('.badge-dark').detach();
    });
  </script>
  @endsection