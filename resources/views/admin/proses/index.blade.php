@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Daftar Permohonan Layanan</h4>

                    {{-- <a href="{{ route('admin.user.create')}}" class="btn btn-primary pull-right modal-show" title="Tambah Pengguna">Tambah Pengguna</a> --}}

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
                              <th>Layanan</th>
                              {{-- <th>Layanan</th> --}}
                              <th>Tanggal Pengajuan</th>
                              <th>Persyaratan</th>
                              <th>Proses</th>
                              <th>Tanggal Selesai</th>
                              <th>Keterangan</th>
                               <th>Aksi</th>



                            </tr>
                            </thead>

                          </table>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->


                      <a href="{{ route('admin.proses.cetak')}}" class="btn btn-danger " id="cetak" title="" style="font-size:15px;" ><span class="fa fa-file-pdf"></span> Print Daftar Layanan</a>

                </div>

              </div>
      {{-- batas --}}

      <!-- Button trigger modal -->


      <!-- Moda edit -->
      {{-- @foreach ($proses as $item)
            {{ $item->id }}
            {{ $item->proses }}
            {{ $item->ket }} --}}

      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Status Layanan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
            <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Proses</label>
                            </div>
                            <select name="proses" class="custom-select" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="Selesai Tanda Tangan">Selesai Tanda Tangan</option>
                              <option value="Menunggu">Menunggu</option>

                            </select>
                          </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Keterangan</label>
                            </div>
                            <select name="ket" class="custom-select" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="Surat Sudah Bisa Di jemput">Surat Sudah Bisa Di jemput</option>
                              <option value="Menunggu">Menunggu</option>

                            </select>
                          </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Edit</button>
            </div>


        </form>


          </div>
        </div>
      </div>
      {{-- @endforeach --}}
      {{-- modal --}}




      </div>

       {{-- hapus --}}
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
                        ajax:'{{ route('admin.proses.surat') }}',
                        columns: [

                            {data:'DT_RowIndex',orderable:false,searchable:false},
                            {data:'nama'},
                            {data:'finish_at'},
                            // {data:'proses_id'},
                            {data:'tglajuan'},
                            {data:'syarat'},
                            {data:'proses'},
                            {data:'created_at'},
                            {data:'ket'},
                            {data:'action'},
                        ]
                    });
                });
            </script>




@endpush



