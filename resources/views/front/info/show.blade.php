
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
                                <h5 class="box-title">Persyaratan dan Ketentuan Layanan : {{ $layanan->layanan }}</h5>
                            </div>
                            <div class="card-body">

                                <div class="box">
                                    <div class="box-header">
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                          <strong>1. Biaya :</strong>
                                        </div>
                                        <div class="card-body">
                                          <span>{{ $layanan->biaya }}</span>
                                        </div>
                                        </div>

                                    <div class="card">
                                        <div class="card-header">
                                          <strong>2. Waktu :</strong>
                                        </div>
                                        <div class="card-body">
                                          <span>{{ $layanan->waktu }}</span>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                          <strong>3. Persyaratan :</strong>
                                        </div>
                                        <div class="card-body">
                                          <span>{{ $layanan->syarat }}</span>
                                        </div>
                                    </div>


                                    <!-- /.box-body -->
                                  </div>
                                  <!-- /.box -->

                            </div>
                          </div>

                          <br>



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



@endpush



