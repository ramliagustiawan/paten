
@extends('front.templates.default')

@section('content')

<nav class="navbar navbar-dark justify-content-center  mt-5" style="background-color:lightblue">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/images/kota.png') }}" width="50" height="50" alt="" class="rounded mx-auto d-block">
                    <h4 class="text-justify">Informasi Pelayanan</h4>
                </a>
              </nav>

              <div class="container">

                    <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="box-title">1. Informasi Status Layanan</h4>
                            </div>
                            <div class="card-body">

                                <div class="box">
                                    <div class="box-header">

                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                      <table id="status" class="table table-bordered  table-hover">
                                        <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Jenis</th>
                                          <th>Deskripsi</th>


                                        </tr>
                                        </thead>

                                      </table>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /.box -->




                            </div>
                          </div>
                  {{-- batas --}}

                  <div class="card mt-3">
                      <div class="card-header">
                          <h4 class="box-title">2. Informasi Syarat Dan Ketentuan Layanan</h4>
                      </div>
                      <div class="card-body">

                          <div class="box">
                              <div class="box-header">

                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                <table id="dataTable" class="table table-bordered  table-hover">
                                  <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Jenis</th>
                                    <th>Deskripsi</th>


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




              </div>




@endsection


{{-- css untuk datatables --}}
@push('datatable')

  <link rel="stylesheet" href="{{ asset('assets/datatable/datatables-bs4/css/dataTables.bootstrap4.css')}}">

@endpush

@push('scripts')


        <!-- DataTables -->

        <script src="{{ asset('assets/datatable/datatables/jquery.dataTables.js') }}"></script>
        <script src=" {{ asset('assets/datatable/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('front.templates.partials.alerts')

        {{-- script query datatable --}}

        <script>
                $(function()
                {
                    $('#status').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:'{{ route('info.non') }}',
                        columns: [

                            {data:'id'},
                            {data:'nama'},
                            {data: 'controller'},
                        ]
                    });
                });
            </script>


        <script>
            $(function()
            {
                $('#dataTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax:'{{ route('info.data') }}',
                    columns: [

                        {data:'id'},
                        {data:'nama'},
                        {data: 'controller'},
                    ]
                });
            });
        </script>

@endpush



