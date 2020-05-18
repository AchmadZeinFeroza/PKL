@extends('layouts.master')

@section('content')
@include('sweetalert::alert')
<div class="app-main__inner" >
    <div class="col-md-12" >
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="search-wrapper mb-3">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
                <ul class="list-group">
                    <div class="table-wrapper-scroll-y " id="content">
                    @foreach ($files as $berkas)
                    <li class="list-group-item mb-2 p-1">
                        <div class="btn-group col-md-12 text-right" role="group">
                        <h5 class="list-group-item-heading col-md-2 p-0" style="font-size: 70%;">{{$berkas->getFileName()}}</h5>
                        <p class="list-group-item-text col-md-1 " style="font-size: 60%;">{{$berkas->getSize() / 1000}} Kb</p>
                        <div class="offset-md-7 ">
                            <a href="{{basename($berkas->getPath()).'/'.$berkas->getFileName()}}" class="btn btn-sm btn-primary" download> Download </a>
                            <a href="{{route('file.show' , $berkas->getFileName())}}" class="btn btn-sm btn-danger"> Delete</a>
                        </div>
                        </div>
                    </li>
                    @endforeach
                    </div>
                </ul>
                <div class="d-flex justify-content-start">
                    <button type="button" class="btn btn-sm btn-success mt-3 " data-toggle="modal" data-target="#exampleModal">
                        Tambah
                    </button>
                    
                </div>
            </div>
        </div>
    </div>
</div>


{{--     
<form action="/file-upload" class="dropzone" method="post" enctype="multipart/form-data" id="myAwesomeDropzone">
    <div class="fallback">
      <input name="file" type="file" multiple />
      <img src="{{asset('images/upload.png')}}" alt="" srcset="">
    </div>
  </form>

--}}
@endsection
<div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Berkas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('file.store')}}" class="dropzone"  method="POST"  enctype="multipart/form-data">
                  {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>


@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/dropzone.js"></script>
<script>
window.Dropzone;
Dropzone.options.myAwesomeDropzone = {
    maxFilesize: 2, // MB
    maxFiles: 10,
    uploadmultiple: true,
    autoprocessqueue: true,
    dictresponseerror: 'error',
    uploadMultiple: true,

    headers: {
        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
    }
    
}

</script>
<script>
    $(document).ready(function(){
      $(".search-input").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#content li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>

@endsection