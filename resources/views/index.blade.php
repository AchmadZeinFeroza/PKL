<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: http://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (http://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png')}} ">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Perusahaan Perdagangan Indonesia (Persero)
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{ asset('css/bootstrap.min.css')}} " rel="stylesheet" />
  <link href="{{ asset('css/now-ui-kit.css?v=1.3.0')}} " rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('demo/demo.css')}} " rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  @include('sweetalert::alert')
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Menu PPI</a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form>
       <a class="dropdown-item" href="#tentang">Tentang Kami</a>
          <a class="dropdown-item" href="#tim">Karyawan Kami</a>
          <a class="dropdown-item" href="#produk">Produk Kami</a>
          <a class="dropdown-item" href="#">Home</a>
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="http://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="PT Perusahaan Perdagangan Indonesia (PERSERO) Jember" data-placement="bottom" target="_blank">
          <img src="{{ asset('img/logo.png')}}" width="30%" >
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{ asset('img/blurred-image-1.jpg')}}">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('regristasii') }}">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pertanyaan">Pertanyaan ?</a>
          </li>
          @foreach ($url as $link)              
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="{{$link->no_perusahaan}}" data-placement="bottom" target="_blank">
              <i class="fab fa fa-phone"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="{{$link->facebook}}" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="{{$link->wa}}" data-placement="bottom" target="_blank">
              <i class="fab fa-whatsapp"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header page-header-small">
      <div class="page-header-image" data-fparallax="true" style="background-image: url('{{ asset('img/bg-masthead.jpg')}}');">
      </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">PT Perusahaan Perdagangan Indonesia (PERSERO) Jember</h1>
          <div class="text-center">
            <a href="http://www.facebook.com/achmad.feroza" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa fa-phone"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-whatsapp"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-about-us" id="tentang">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Siapa Kami?</h2>
            <h5 class="description">PT PPI adalah distributor resmi, ditunjuk oleh produsen untuk melakukan pembelian, penyimpanan, penjualan serta pemasaran pupuk bersubsidi dalam partai besar untuk dijual kepada Konsumen akhir melalui Pengecernya. Pupuk yang didistribusikan PT PPI adalah Pupuk Sriwidjaja, Pupuk Kujang, Pupuk Kalimantan Timur, Pupuk Iskandar Muda, dan Pupuk Petrokimia Gresik.</h5>
          </div>
        </div>
        <div class="separator separator-primary"></div>
        <div class="section-story-overview" id="produk">
          @foreach ($data as $content)
          <div class="row">
            <div class="col-md-6">
              <div class="image-container image-left" style="background-image: url('{{ asset('Content')}}/{{$content->foto_2}}')">
                <!-- First image on the left side -->
                <p class="blockquote blockquote-primary">{{ $content->deskripsi_2}}
                  <br>
                </p>
              </div>
              <!-- Second image on the left side of the article -->
              <div id="carouselExample1" class="carousel slide z-depth-1-half image-container p-0" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 h-50" src="{{ asset('Content')}}/{{$content->foto_1}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Content')}}/{{$content->foto_2}}" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Content')}}/{{$content->foto_3}}" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Content')}}/{{$content->foto_4}}" alt="Four slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('Content')}}/{{$content->foto_5}}" alt="Five slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-md-5">
              <!-- First image on the right side, above the article -->
            <div class="image-container image-right" style="background-image: url('{{ asset('Content')}}/{{$content->foto_1}}')"></div>
              <h3>{{ $content->judul }}</h3>
              <p>{{ $content->deskripsi_1}}
              </p>
            </div>
          </div>             
          @endforeach
        </div>
      </div>
    </div>
    <div class="section section-team text-center centered" id="tim">
      <div class="container">
        <h2 class="title">Tim Kami</h2>
        <div class="team">
          <div class="row d-flex justify-content-center">
            @foreach ($users as $user)
            <div class="col-md-4">
              <div class="team-player">
                <img src="{{ $user->getAvatar() }}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title">{{$user->name}}</h4>
                  @if( $user->role === 1)
                <p class="category text-primary">Manager</p>
                <p class="description">{{$user->posisi->deskripsi}}</p>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round" rel="tooltip" title="{{$user->wa}}"><i class="fab fa fa-phone"></i></a>
                <a href="{{$user->facebook}}" class="btn btn-primary btn-icon btn-round"><i class="fab fa-facebook-square"></i></a>
                  @elseif ( $user->role === 2)
                  <p class="category text-primary">Bendahara</p>
                  <p class="description">{{$user->posisi->deskripsi}}</p>
                    <a href="#pablo" class="btn btn-primary btn-icon btn-round" rel="tooltip" title="{{$user->wa}}"><i class="fab fa fa-phone"></i></a>
                    <a href="{{$user->facebook}}" class="btn btn-primary btn-icon btn-round"><i class="fab fa-facebook-square"></i></a>
                  @else 
                  <p class="category text-primary">Kepala Gudang</p>
                  <p class="description">{{$user->posisi->deskripsi}}</p>
                    <a href="#pablo" class="btn btn-primary btn-icon btn-round" rel="tooltip" title="{{$user->wa}}"><i class="fab fa fa-phone"></i></a>
                    <a href="{{$user->facebook}}" class="btn btn-primary btn-icon btn-round"><i class="fab fa-facebook-square"></i></a>
                  @endif
                </div>
            </div>                        
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="section section-contact-us text-center" id="pertanyaan">
      <div class="container">
        <h2 class="title">Ingin menjadi kios resmi pupuk? </h2>
        <h2 class="title">Daftarkan segera kios anda</h2>
        <p class="description">Jika masih ragu silahkan Tanya melalui form dibawah </p>
        <div class="row">
          <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
          <form action="{{ route('tambah-pesan') }}" method="post">
            {{csrf_field()}}
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Nama" name="nama" required>
            </div>
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="textarea-container">
              <textarea class="form-control" name="pesan" rows="4" cols="80" placeholder="Pertanyaan Anda..." required></textarea>
            </div>
            <div class="send-button">
              <button type="submit" class="btn btn-primary btn-round btn-block btn-lg">Kirim Pesan</button>
            </form>
            </div>
            <div class="send-button ">
              <a href="{{ route('regristasii') }}" class="btn btn-primary btn-round btn-block btn-lg">DAFTAR MENJADI KIOS</a>
            </div>
          </div>
        </div>
      {{-- <div class="col-md-3 mx-auto">
        <ul class="nav nav-pills nav-pills-primary " role="tablist">
          <li class="nav-item">
            <a class="nav-link active mx-auto" data-toggle="tab" href="#active" role="tablist">
              DAFTAR MENJADI KIOS
            </a>
          </li>
        </ul>
      </div> --}}
      </div>
    </div>
    <footer class="footer footer-default">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="http://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        
        <div class="copyright" id="tentang">
          @foreach ($url as $link)
          Nomor Telepon : {{$link->no_perusahaan}} , Whatsapp : {{$link->wa}}
          @endforeach
        </div>
        <br>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="http://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: http://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{ asset('js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="http://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/now-ui-kit.js?v=1.3.0')}}" type="text/javascript"></script>
</body>

</html>