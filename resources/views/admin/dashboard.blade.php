@extends('admin.templates.default')

@section('content')

<section class="content">

    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->

      <div >
          <h5><strong>1. Layanan dan Pelaporan</strong></h5>
      </div>
      <div class="row">

          <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{ $countlayanan }}</h3>

                  <p>Total Layanan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>

                </div>
                <a href="{{ route('admin.syarat.index') }}" class="small-box-footer">Lihat Layanan <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{ $countreport }}</h3>

              <p>Pelaporan</p>
            </div>
            <div class="icon">
              <i class="fas fa-phone-volume"></i>
            </div>
            <a href="{{ route('admin.tindak.index') }}" class="small-box-footer">Tindak Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->

        <!-- ./col -->
      </div>

      <hr>

      <div >
          <h5><strong>2. Layanan On Proses</strong></h5>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3>{{ $countproses }}</h3>

                  <p>Jumlah dan Status Layanan </p>
                </div>
                <div class="icon">

                  <i class="fas fa-chart-line"></i>

                </div>
                <a href="{{ route('admin.proses.index') }}" class="small-box-footer">Status Layanan On Proses <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $countiumk }}</h3>

                <p>Ijin Usaha Mikro Kecil</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="{{ route('admin.iumk.index') }}" class="small-box-footer">Ajukan IUMK <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $countdispensasi }}</h3>

                <p>Dispensasi Nikah</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="{{ route('admin.dispensasi.index') }}" class="small-box-footer">Ajukan Dispensasi Nikah <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $countsuket }}</h3>

                <p>Surat Keterangan</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="{{ route('admin.suket.index') }}" class="small-box-footer">Ajukan Surat Keterangan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <!-- ./col -->
      </div>

      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>onProses</h3>

              <p>Domisili Usaha</p>
            </div>
            <div class="icon">
                <i class="ion ion-clipboard"></i>
            </div>
            <a href="#" class="small-box-footer">Ajukan Domisili Usaha <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>onProses</h3>

              <p>Surat Keterangan Tidak Mampu</p>
            </div>
            <div class="icon">
                <i class="ion ion-clipboard"></i>
            </div>
            <a href="#" class="small-box-footer">Ajukan SKTM <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>onProses</h3>

              <p>Permohonan Lainnya</p>
            </div>
            <div class="icon">
                <i class="fas fa-plus-circle"></i>
            </div>
            <a href="{{ route('admin.daftar.index') }}" class="small-box-footer">Daftar Permohonan <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
      </div>
<hr>
      <div >
          <h5><strong>3. Administrasi Kantor</strong></h5>
      </div>
      <div class="row">



          <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3>onProses</h3>

                  <p>Surat Masuk</p>
                </div>
                <div class="icon">
                    <i class="fas fa-envelope-open-text"></i>

                </div>
                <a href="#" class="small-box-footer">Lihat Surat Masuk <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>onProses</h3>

              <p>Surat Keluar</p>
            </div>
            <div class="icon">
                <i class="fas fa-paper-plane"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat Surat Keluar <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->



        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>onProses</h3>

              <p>Tindak Lanjut Surat</p>
            </div>
            <div class="icon">
                <i class="fas fa-share-square"></i>
            </div>
            <a href="#" class="small-box-footer">Tindak Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
      </div>

      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
         

            {{-- highchart --}}
            <div id="container">
            </div>
            
          </div>
          <!-- /.card -->

          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        </div>

        {{-- <div class="row">
            <section class="col-lg-12 connectedSortable"> --}}
          
            {{-- highchart --}}
            {{-- <div id="container2">
            </div>
            
          </section>
        </div> --}}
       
    </div>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

  </section>


@endsection

@push('scripts')

<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Tokyo',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'New York',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'London',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }, {
        name: 'Berlin',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    }]
});


</script>

<script>
// Build the chart
Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Chrome',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Internet Explorer',
            y: 11.84
        }, {
            name: 'Firefox',
            y: 10.85
        }, {
            name: 'Edge',
            y: 4.67
        }, {
            name: 'Safari',
            y: 4.18
        }, {
            name: 'Other',
            y: 7.05
        }]
    }]
});
</script>

@endpush
