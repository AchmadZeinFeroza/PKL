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
            <a href="{{ route('kios.show' , 'JENGGAWAH')}}">
                  <li class="list-group-item"><h5 class="list-group-item-heading">JENGGAWAH</h5>
                      <p class="list-group-item-text">Total {{$j->count()}} Kios</p></li>
              </a>
              <a href="{{ route('kios.show' , 'MUMBULSARI')}}">
                  <li class="list-group-item"><h5 class="list-group-item-heading">MUMBULSARI</h5>
                      <p class="list-group-item-text">Total {{$m->count()}} Kios</p></li>
              </a>
              <a href="{{ route('kios.show' , 'SILO')}}">
                  <li class="list-group-item"><h5 class="list-group-item-heading">SILO</h5>
                      <p class="list-group-item-text">Total {{$s->count()}} KIos</p></li>
              </a>
              <a href="{{ route('kios.show' , 'AJUNG')}}">
                  <li class="list-group-item"><h5 class="list-group-item-heading">AJUNG</h5>
                      <p class="list-group-item-text">Total {{$a->count()}} Kios</p></li>  
              </a>
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