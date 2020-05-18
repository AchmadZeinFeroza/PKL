<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png')}} ">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
          Segera Daftarkan Kios Anda
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- CSS Files -->
        <link href="{{ asset('css/bootstrap.min.css')}} " rel="stylesheet" />
        <link href="{{ asset('css/now-ui-kit.css?v=1.3.0')}} " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{ asset('demo/demo.css')}} " rel="stylesheet" />
      </head>
<body>
    
    <div class="section section-signup" style="background-image: url('{{asset("img/bg1.jpg")}}'); background-size: cover; background-position: top center; min-height: 700px;">
        <div class="container">
          <div class="row">
            <div class="card card-signup" data-background-color="orange">
            <form class="form" method="post" action="{{route('postRegristasi')}}" enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="card-header text-center">
                  <h3 class="card-title title-up">Pendaftaran Kios</h3>
                  <div class="social-line">
                    <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">    
                    </a>
                    <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round p-2">
                      <img src="{{asset('img/favicon.png')}}">
                    </a>
                    <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
            
                    </a>
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
                <div class="card-body">
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </span>
                    </div>
                    <input name="pemilik" type="text" class="form-control" placeholder="Nama Pemilik">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons shopping_shop"></i>
                      </span>
                    </div>
                    <input type="text" name="nama_kios" placeholder="Nama Kios" class="form-control" />
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                      </span>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Email...">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons location_compass-05"></i>
                      </span>
                    </div>
                    <select class="custom-select form-control" id="kecamatan" name="kecamatan">
                      <option selected class="text-dark">-- Pilih Kecamatan --</option>
                      <option value="1" class="text-dark">Ajung</option>
                      <option value="2" class="text-dark">Jenggawah</option>
                      <option value="3" class="text-dark">Mumbulsari</option>
                      <option value="4" class="text-dark">Silo</option>
                    </select>
                  </div>
                  <small class="mx-auto">Untuk Warga Ajung , Jenggawah , Mumbulsari , Silo</small>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons location_pin"></i>
                      </span>
                    </div>
                    <select class="custom-select form-control" id="inputGroupSelect04" name="desa">
                      <option selected class="text-dark">-- Pilih Desa --</option>
                      <option value="1" class="text-dark sembunyi 1">Klompangan</option>
                      <option value="2" class="text-dark sembunyi 2">Mangaran</option>
                      <option value="3" class="text-dark sembunyi 3">Pancakarya</option>
                      <option value="4" class="text-dark sembunyi 4">Rowo Indah</option>
                      <option value="5" class="text-dark sembunyi 5">Sukamakmur</option>
                      <option value="6" class="text-dark sembunyi 6">Wirowongso</option>
                      <option value="7" class="text-dark sembunyi 7">Wonojati</option>
                      <option value="8" class="text-dark sembunyi 8">Kertonegoro</option>
                      <option value="9" class="text-dark sembunyi 9">Kemuningsari</option>
                      <option value="10" class="text-dark sembunyi 10">Sruni</option>
                      <option value="11" class="text-dark sembunyi 11">Jatisari</option>
                      <option value="12" class="text-dark sembunyi 12">Jatimulyo</option>
                      <option value="13" class="text-dark sembunyi 13">Cangkring</option>
                      <option value="14" class="text-dark sembunyi 14">Jenggawah</option>
                      <option value="15" class="text-dark sembunyi 15">Karang Kedawung</option>
                      <option value="16" class="text-dark sembunyi 16">Lengkong</option>
                      <option value="17" class="text-dark sembunyi 17">Lempeji</option>
                      <option value="18" class="text-dark sembunyi 18">Kawangrejo</option>
                      <option value="19" class="text-dark sembunyi 19">Mumbulsari</option>
                      <option value="20" class="text-dark sembunyi 20">Tamansari</option>
                      <option value="21" class="text-dark sembunyi 21">Suco</option>
                      <option value="22" class="text-dark sembunyi 22">Garahan</option>
                      <option value="23" class="text-dark sembunyi 23">Karangharjo</option>
                      <option value="24" class="text-dark sembunyi 24">Harjomulyo</option>
                      <option value="25" class="text-dark sembunyi 25">Mulyorejo</option>
                    </select>
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-home"></i>
                      </span>
                    </div>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat (Harus Detail)">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-phone"></i>
                      </span>
                    </div>
                    <input type="number" name="no_telpon" class="form-control" placeholder="Nomor Telepon">
                  </div>
                  <br>
                  <p>File Upload JPEG/PDF</p>
                  <hr>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons business_badge"></i>
                      </span>
                      <span class="input-group-text">KTP</span>
                    </div>
                    <input type="file" name="ktp" class="form-control" placeholder="Identitas KTP" >
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons business_briefcase-24"></i>
                      </span>
                      <span class="input-group-text">SIUP</span>
                    </div>
                    
                    <input type="file" class="form-control" name="siup" placeholder="SIUP">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons business_bank"></i>
                      </span>
                      <span class="input-group-text">TDP</span>
                    </div>
                    
                    <input type="file" class="form-control" name="tdp" placeholder="Tanda Daftar Perusahaan">
                  </div>
                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-neutral btn-round btn-lg">DAFTAR</button>
                </form>
                </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer footer-default">
        <div class=" container ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
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
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>




 <!--   Core JS Files   -->
  <script src="{{ asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{ asset('js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/now-ui-kit.js?v=1.3.0')}}" type="text/javascript"></script>
  <script>
      
      $(document).ready(function () {
     $('.sembunyi').hide();
      $('#kecamatan').change(function () {
        var kecamatan = this.value;
        var updateurl = "{{url('tampilkan')}}" + '/' + kecamatan;
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        $.ajax({
          type: "GET",
          dataType: 'json',
          crossDomain: true,
          url: updateurl,
          data: { '_token': $('input[name=_token]').val() },
          success: function (data) {
            $('.sembunyi').hide();
            console.log(data);
            $.each(data, function (index, value) {
            // console.log(value.id_district);
              $('.'+value.id_desa+'').show()
            });
          }
          }).done(function (data) {
          console.log('suksess');
        });
      });
      });
  </script>
</body>


</html>