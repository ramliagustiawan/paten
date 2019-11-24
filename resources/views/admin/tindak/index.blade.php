@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Tindak Lanjut Laporan</h4>

                    {{-- <a href="{{ route('admin.user.create')}}" class="btn btn-primary pull-right modal-show" title="Tambah Pengguna">Tindak Lanjut Laporan</a> --}}

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
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>Kontak</th>
                              <th>Tanggal Laporan</th>
                              <th>Isi Laporan</th>
                              <th>Tindak Lanjut</th>
                              <th>Pejabat Yg Menangani</th>
                              <th>Keterangan</th>

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

      {{--  delete tindak  --}}
      <form action="" method="post" id="deleteForm">
        @csrf
        @method("DELETE")
        <input type="submit" value="Hapus" style="display:none">
    </form>



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
                        ajax:'{{ route('admin.tindak.lanjut') }}',
                        columns: [

                            {data:'DT_RowIndex',orderable:false,searchable:false},
                            {data:'name'},
                            {data:'alamat'},
                            {data:'kontak'},
                            {data:'created_at'},
                            {data:'pesan'},
                            {data:'tindakan'},
                            {data:'aparat'},
                            {data:'ket'},
                            {data:'action'},
                        ]
                    });
                });
            </script>




@endpush



