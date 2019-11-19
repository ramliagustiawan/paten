@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Detail dan Ketentuan Layanan</h4>

                    <a href="{{ route('admin.syarat.create')}}" class="btn btn-primary pull-right modal-show" title="Tambah Layanan">Tambah Layanan</a>

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
                          <table id="status" class="table table-bordered  table-hover" style="font-size:14px; width:100%">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Layanan</th>
                              <th>Kategori</th>
                              <th>Biaya</th>
                              <th>Waktu</th>
                              {{-- <th>syarat</th> --}}
                              {{-- <th>ket</th> --}}
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


      {{-- modal tambah --}}
      @include('admin.templates.partials.modal')



      <!-- Modal edit -->



@endsection


@push('scripts')


        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('admin.templates.partials.alerts')

        {{--  swal  --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <script>
                $(function()
                {
                    $('#status').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:'{{ route('admin.syarat.syarat') }}',
                        columns: [

                            {data:'DT_RowIndex',orderable:false,searchable:false},
                            {data:'layanan'},
                            {data:'kategori'},
                            {data:'biaya'},
                            {data:'waktu'},
                            // {data:'syarat'},
                            {data:'action'},
                        ]
                    });
                });
            </script>

          {{-- ajaxcrud --}}
          @include('admin.templates.partials.ajaxcrud')

@endpush



