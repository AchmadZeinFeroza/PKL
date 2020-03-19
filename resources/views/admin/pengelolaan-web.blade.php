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
            <div>Pengelolaan Web 
                <div class="page-title-subheading">Web Perusahaan Perdangan Indonesia
                </div>
            </div>
        </div>
     </div>
</div>

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
<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
    <li class="nav-item">
        <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
            <span>Form</span>
        </a>
    </li>
    <li class="nav-item">
        <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
            <span>Content</span>
        </a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Form Pengelolaan Web</h5>
                        <form action="{{route('pengelolaan-web.store')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="position-relative form-group"><label for="exampleText" class="">Judul</label><textarea name="judul" id="exampleText" class="form-control"></textarea></div>
                            <div class="position-relative form-group"><label for="exampleText" class="">Deskripsi 1</label><textarea name="deskripsi_1" id="exampleText" class="form-control"></textarea></div>
                            <div class="position-relative form-group"><label for="exampleText" class="">Deskripsi 2</label><textarea name="deskripsi_2" id="exampleText" class="form-control"></textarea></div>
                            <div class="position-relative form-group"><label for="exampleFile" class="">Foto 1</label><input name="foto_1"  type="file" class="form-control-file">
                                <small class="form-text text-muted">Format JPEG, JPG, PNG (Foto Utama) </small>
                            </div>
                            <div class="position-relative form-group"><label for="exampleFile" class="">Foto 2</label><input name="foto_2"  type="file" class="form-control-file">
                                <small class="form-text text-muted">Format JPEG, JPG, PNG (Foto Utama)</small>
                            </div>
                            <div class="position-relative form-group"><label for="exampleFile" class="">Foto 3</label><input name="foto_3"  type="file" class="form-control-file">
                                <small class="form-text text-muted">Format JPEG, JPG, PNG </small>
                            </div>
                            <div class="position-relative form-group"><label for="exampleFile" class="">Foto 4</label><input name="foto_4"  type="file" class="form-control-file">
                                <small class="form-text text-muted">Format JPEG, JPG, PNG </small>
                            </div>
                            <div class="position-relative form-group"><label for="exampleFile" class="">Foto 5</label><input name="foto_5"  type="file" class="form-control-file">
                                <small class="form-text text-muted">Format JPEG, JPG, PNG </small>
                            </div>
                            <button class="mt-1 btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3 card">
                    <div class="card-body">
                        <ul class="tabs-animated-shadow tabs-animated nav">
                            @php
                                $i = 1 ;   
                            @endphp
                            @foreach ($data as $tab)
                            <li class="nav-item">
                                @if ( $i === 1)
                                <a role="tab" class="nav-link active" id="tab-c-0" data-toggle="tab" href="#tab-animated-{{$tab->id_content}}">
                                    <span>Content {{ $i }}</span>
                                </a>
                                @else
                                <a role="tab" class="nav-link" id="tab-c-0" data-toggle="tab" href="#tab-animated-{{$tab->id_content}}">
                                    <span>Content {{ $i }}</span>
                                </a>
                                @endif
                            </li>
                            @php
                            $i++;    
                            @endphp  
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @php
                                $j = 1 ;   
                            @endphp
                            @foreach ($data as $content)
                            @if ( $j === 1)
                            <div class="tab-pane active" id="tab-animated-{{$content->id_content}}" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Grid</h5>
                                        <form action="{{route('pengelolaan-web.update' , $content->id_content)}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}{{method_field('PATCH')}}
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Judul</label>
                                            <div class="col-sm-10"><input name="judul" id="exampleEmail" placeholder="Kosong" type="text" class="form-control no-border" value="{{ $content->judul }}"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Deskripsi 1</label>
                                                <div class="col-sm-10"><textarea name="deskripsi_1" id="exampleText" class="form-control no-border" id="autoresizing">{{ $content->deskripsi_1 }}</textarea>
                                                    <small class="form-text text-muted">Tarik pojok kanan bawah untuk meresize form  </small>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Deskripsi 2</label>
                                                <div class="col-sm-10"><textarea name="deskripsi_2" id="exampleText" class="form-control no-border" id="autoresizing">{{ $content->deskripsi_2 }}</textarea>
                                                    <small class="form-text text-muted">Tarik pojok kanan bawah untuk meresize form  </small>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto 1</label>
                                                <div class="col-sm-10"><input name="foto_1" id="exampleFile" type="file" class="form-control-file no-border">
                                                    <img src="{{ asset('Content')}}/{{$content->foto_1}}" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto 2</label>
                                                <div class="col-sm-10"><input name="foto_2" id="exampleFile" type="file" class="form-control-file no-border">
                                                    <img src="{{ asset('Content')}}/{{$content->foto_2}}" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto 3</label>
                                                <div class="col-sm-10"><input name="foto_3" id="exampleFile" type="file" class="form-control-file no-border">
                                                    <img src="{{ asset('Content')}}/{{$content->foto_3}}" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto 4</label>
                                                <div class="col-sm-10"><input name="foto_4" id="exampleFile" type="file" class="form-control-file no-border">
                                                    <img src="{{ asset('Content')}}/{{$content->foto_4}}" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto 5</label>
                                                <div class="col-sm-10"><input name="foto_5" id="exampleFile" type="file" class="form-control-file no-border">
                                                    <img src="{{ asset('Content')}}/{{$content->foto_5}}" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="position-relative row btn-group form-inline offset-md-3 col-md-5">
                                                <div class="col-sm-10 offset-sm-2 col-md-2 form-group">
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                                <div class="col-sm-10 offset-sm-2 col-md-2 form-group">
                                                <a class="btn btn-danger" href="{{ route('pengelolaan-web.destroy' , $content->id_content) }}">Hapus</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="tab-pane" id="tab-animated-{{$content->id_content}}" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Grid</h5>
                                        <form action="{{route('pengelolaan-web.update' , $content->id_content)}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}{{method_field('PATCH')}}
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Judul</label>
                                            <div class="col-sm-10"><input name="judul" id="exampleEmail" placeholder="Kosong" type="text" class="form-control no-border" value="{{ $content->judul }}"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Deskripsi 1</label>
                                                <div class="col-sm-10"><textarea name="deskripsi_1" id="exampleText" class="form-control no-border" id="autoresizing">{{ $content->deskripsi_1 }}</textarea>
                                                    <small class="form-text text-muted">Tarik pojok kanan bawah untuk meresize form  </small>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Deskripsi 2</label>
                                                <div class="col-sm-10"><textarea name="deskripsi_2" id="exampleText" class="form-control no-border" id="autoresizing">{{ $content->deskripsi_2 }}</textarea>
                                                    <small class="form-text text-muted">Tarik pojok kanan bawah untuk meresize form  </small>
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto 1</label>
                                                <div class="col-sm-10"><input name="foto_1" id="exampleFile" type="file" class="form-control-file no-border">
                                                    <img src="{{ asset('Content')}}/{{$content->foto_1}}" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto 2</label>
                                                <div class="col-sm-10"><input name="foto_2" id="exampleFile" type="file" class="form-control-file no-border">
                                                    <img src="{{ asset('Content')}}/{{$content->foto_2}}" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto 3</label>
                                                <div class="col-sm-10"><input name="foto_3" id="exampleFile" type="file" class="form-control-file no-border">
                                                    <img src="{{ asset('Content')}}/{{$content->foto_3}}" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto 4</label>
                                                <div class="col-sm-10"><input name="foto_4" id="exampleFile" type="file" class="form-control-file no-border">
                                                    <img src="{{ asset('Content')}}/{{$content->foto_4}}" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Foto 5</label>
                                                <div class="col-sm-10"><input name="foto_5" id="exampleFile" type="file" class="form-control-file no-border">
                                                    <img src="{{ asset('Content')}}/{{$content->foto_5}}" class="img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="position-relative row btn-group form-inline offset-md-3 col-md-5">
                                                <div class="col-sm-10 offset-sm-2 col-md-2 form-group">
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </form>
                                                <div class="col-sm-10 offset-sm-2 col-md-2 form-group">
                                                    <form action="{{ route('pengelolaan-web.destroy' , $content->id_content) }}" method="POST">
                                                        {{csrf_field()}}{{method_field('DELETE')}}
                                                        <button type="submit" class="btn btn-danger" >Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                                  
                            @php
                            $j++;    
                            @endphp 
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection


