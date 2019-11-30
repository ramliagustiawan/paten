
@extends('front.templates.default')

@section('content')

<nav class="navbar navbar-dark justify-content-center  mt-5" style="background-color:lightblue">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/images/kota.png') }}" width="50" height="50" alt="" class="rounded mx-auto d-block">
                    <h4 class="text-justify">Informasi Pelayanan</h4>
                </a>
</nav>


              <div class="container">

                    {{-- tabel datatable --}}

                    <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="box-title">1. Informasi Status Layanan</h5>
                            </div>
                            <div class="card-body">

                                <div class="box">
                                    <div class="box-header">

                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                      <table id="status" class="table table-bordered  table-hover" style="font-size:14px; width:100%">
                                        <thead>
                                        <tr class="table-success">
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Layanan</th>
                                            {{-- <th>Layanan</th> --}}
                                            <th scope="col">Tanggal Pengajuan</th>
                                            <th scope="col">Persyaratan</th>
                                            <th scope="col">Proses</th>
                                             <th scope="col">Tanggal Selesai</th>
                                             <th scope="col">Keterangan</th>

                                        </tr>
                                        </thead>

                                      </table>

                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /.box -->

                            </div>
                          </div>

                          <br>

                          {{-- batas tabel  --}}

                          <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="box-title">2. Persyaratan dan Ketentuan Layanan</h5>
                                </div>
                                <div class="card-body">

                                    <div class="box">
                                        <div class="box-header">

                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                          <table id="layanan" class="table table-bordered  table-hover" style="font-size:14px; width:100%">
                                            <thead>
                                            <tr class="table-info">
                                                <th scope="col">No</th>
                                                <th scope="col">Layanan</th>
                                                <th scope="col">Kategori</th>
                                                {{-- <th>Layanan</th> --}}
                                                <th scope="col">Biaya</th>
                                                <th scope="col">Waktu</th>
                                                <th scope="col">Persyaratan</th>


                                            </tr>
                                            </thead>

                                          </table>

                                        </div>
                                        <!-- /.box-body -->
                                      </div>
                                      <!-- /.box -->

                                </div>
                              </div>




              </div>





@endsection


{{-- css untuk datatables --}}
@push('datatable')

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

@endpush

@push('scripts')


        <!-- DataTables -->



        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('front.templates.partials.alerts')

        {{-- script query datatable --}}

        <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>

        <script>
                $(function()
                {
                    $('#status').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:'{{ route('info.proses') }}',
                        columns: [

                            {data:'DT_RowIndex',orderable:false,searchable:false},
                            {data:'nama'},
                            {data: 'finish_at'},
                            {data: 'tglajuan'},
                            {data: 'syarat'},
                            {data: 'proses'},
                            {data: 'created_at'},
                            {data: 'ket'},

                        ]
                    });
                });
            </script>


        <script>
            $(function()
            {
                $('#layanan').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax:'{{ route('info.syarat') }}',
                    columns: [

                        {data:'DT_RowIndex',orderable:false,searchable:false},
                        {data:'layanan'},
                        {data: 'kategori'},
                        {data: 'biaya'},
                        {data: 'waktu'},
                        // {data: 'syarat'},
                        {data:'action'},
                    ]
                });
            });
        </script>

@endpush



