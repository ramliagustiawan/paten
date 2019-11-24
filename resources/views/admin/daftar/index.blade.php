@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Daftar Permohonan Layanan</h4>

                    <a href="{{ route('admin.daftar.create')}}" class="btn btn-primary pull-right modal-show" title="Tambah Pengguna">Tambah Pengguna</a>

                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambah Pengguna
                    </button> --}}
                </div>
                <div class="card-body">

                    <div class="box">
                        <div class="box-header">

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <table id="status" class="table table-bordered  table-hover" style="width:100%">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Layanan</th>
                              <th>Kelurahan</th>
                              <th>Tanggal Pengajuan</th>
                               <th>Aksi</th>





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

      </div>



@endsection


@push('scripts')


        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('front.templates.partials.alerts')

        {{--  swal  --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <script>
                $(function()
                {
                    $('#status').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:'{{ route('admin.daftar.layanan') }}',
                        columns: [

                            {data:'DT_RowIndex',orderable:false,searchable:false},
                            {data:'nama'},
                            {data:'layanan'},
                            {data:'alamat'},
                            {data:'created_at'},
                            {data:'action'},

                        ]
                    });
                });
            </script>




@endpush



