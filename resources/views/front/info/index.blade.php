
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
                      <h4 class="box-title">1. Informasi Proses dan Status Layanan</h4>
                  </div>
                  <div class="card-body">

                      <div class="box">
                          <div class="box-header">
                            
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <table id="example1" class="table table-bordered  table-hover">
                              <thead>
                              <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>Trident</td>
                                <td>Internet
                                  Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                              </tr>
                              <tr>
                                <td>Trident</td>
                                <td>Internet
                                  Explorer 5.0
                                </td>
                                <td>Win 95+</td>
                                <td>5</td>
                                <td>C</td>
                              </tr>
                             
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                              </tr>
                              </tfoot>
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
                                  <th>Rendering engine</th>
                                  <th>Browser</th>
                                  <th>Platform(s)</th>
                                  <th>Engine version</th>
                                  <th>CSS grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>Trident</td>
                                  <td>Internet
                                    Explorer 4.0
                                  </td>
                                  <td>Win 95+</td>
                                  <td> 4</td>
                                  <td>X</td>
                                </tr>
                                <tr>
                                  <td>Trident</td>
                                  <td>Internet
                                    Explorer 5.0
                                  </td>
                                  <td>Win 95+</td>
                                  <td>5</td>
                                  <td>C</td>
                                </tr>
                               
                                </tbody>
                                <tfoot>
                                <tr>
                                  <th>Rendering engine</th>
                                  <th>Browser</th>
                                  <th>Platform(s)</th>
                                  <th>Engine version</th>
                                  <th>CSS grade</th>
                                </tr>
                                </tfoot>
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
  
  <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

@endpush

@push('scripts')


        <!-- DataTables -->
        <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('front.templates.partials.alerts')

        <script>
            $(function () 
            {
              $('#example1').DataTable()
              $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
              });
            });

            $(function () 
            {
              $('#dataTable').DataTable()
              $('#dataTable2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
              });
            });




          </script>

{{-- <script>
    $(function()
    {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax:'',
            columns: [
                {data:'DT_RowIndex', orderable:false,searchable:false},
                {data:'title'},
                {data: 'description'},
                {data: 'author'},
                {data: 'cover'},
                {data: 'action'}
            ]

        });

    });

</script> --}}

       



@endpush



