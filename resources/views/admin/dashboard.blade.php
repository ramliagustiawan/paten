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
        text: 'Grafik Pelayanan Kecamatan Dungingi'
    },
    subtitle: {
        text: 'SIP PATEN Dungingi'
    },
    xAxis: {
        // memakai echo special !! untuk menghilangkan html
        categories: [
            'Total Proses Layanan',
            'IUMK',
            'Dispensasi Nikah',
            'Surat Keterangan',
            'layanan Lainnya',
            ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        // pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        //     '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
        name: 'Jumlah',
        data:  {!! json_encode($data) !!},

    }
    ]
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
