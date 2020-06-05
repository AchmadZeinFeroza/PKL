@extends('layouts.master')

@section('content')
<div class="row mt-5 mr-5 ml-5">
  <div class="col-md-6 col-xl-4">
      <a href="{{ route('kios.index') }}">
          <div class="card mb-3 widget-content bg-midnight-bloom">
              <div class="widget-content-wrapper text-white">
                  <div class="widget-content-left">
                      <div class="widget-heading">Total Kios</div>
                      <div class="widget-subheading">Kios Aktif</div>
                  </div>
                  <div class="widget-content-right">
                      <div class="widget-numbers text-white"><span>{{$kios->count()}}</span></div>
                  </div>
              </div>
          </div>
      </a>
  </div>
  <div class="col-md-6 col-xl-4">
    <a href="{{ route('user-admin') }}">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total User</div>
                    <div class="widget-subheading">Admin / Karyawan</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$user->count()}}</span></div>
                </div>
            </div>
        </div>
    </a>
    </div>
  <div class="col-md-6 col-xl-4">
      <div class="card mb-3 widget-content bg-grow-early">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Pesan</div>
                  <div class="widget-subheading">Orang Umum</div>
              </div>
              <div class="widget-content-right">
                <div class="widget-numbers text-white"><span>{{$pesan->count()}}</span></div>
              </div>
          </div>
      </div>
  </div>  
  <div class="row">
      <div class="col-md-12 pl-5">
        <div id="chart" class="ml-5">
        </div>
      </div>
  </div>
@endsection

@section('script')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('chart', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Kios Baru'
    },
    legend: {
        layout: 'vertical',
        align: 'center',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
    },
    xAxis: {
        categories: [
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        ],
        plotBands: [{ // visualize the weekend
            from: 4.5,
            to: 6.5,
            color: 'rgba(68, 170, 213, .2)'
        }]
    },
    yAxis: {
        title: {
            text: ' Web PPI'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' Pengguna Web'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [ {
        name: 'Kios Baru',
        data: [{{$senin}}, {{$selasa}}, {{$rabu}}, {{$kamis}}, {{$jumat}}, {{$sabtu}}, {{$minggu}}]
    }]
});
    </script>
@endsection