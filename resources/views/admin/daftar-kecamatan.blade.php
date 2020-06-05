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
<div class="col-md-5 mx-auto">
    <div class="main-card mb-3 card text-center">
          <ul class="list-group">
              @if($j->count() >= 1)
              <a href="{{ route('kios.show' , 2)}}">
                  <li class="list-group-item"><h5 class="list-group-item-heading">JENGGAWAH</h5>
                      <p class="list-group-item-text">Total {{$j->count()}} Kios</p></li>
              </a>
              @endif
              @if($m->count() >= 1)
              <a href="{{ route('kios.show' , 3)}}">
                  <li class="list-group-item"><h5 class="list-group-item-heading">MUMBULSARI</h5>
                      <p class="list-group-item-text">Total {{$m->count()}} Kios</p></li>
              </a>
              @endif
              @if($s->count() >= 1)
              <a href="{{ route('kios.show' , 4)}}">
                  <li class="list-group-item"><h5 class="list-group-item-heading">SILO</h5>
                      <p class="list-group-item-text">Total {{$s->count()}} KIos</p></li>
              </a>
              @endif
              @if($a->count() >= 1)
              <a href="{{ route('kios.show' , 1)}}">
                  <li class="list-group-item"><h5 class="list-group-item-heading">AJUNG</h5>
                      <p class="list-group-item-text">Total {{$a->count()}} Kios</p></li>  
              </a>
              @endif
            </ul>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(".list-group-item").hover(function(){
            $(this).addClass('bg-secondary text-white');
            },function(){
                $(this).removeClass('bg-secondary text-white');
        });
    </script>
@endsection