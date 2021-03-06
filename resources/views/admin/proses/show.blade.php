@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Detail Surat</h4>



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

                                <tr>
                                    <th>Nama Pemohon</th>
                                    <td>{{ $daftar->nama }}</td>
                                </tr>

                                <tr>
                                        <th>Layanan</th>
                                        <td>{{ $daftar->finish_at }}</td>
                                    </tr>

                                <tr>
                                    <th>Tanggal Pengajuan Surat</th>
                                    <td>{{ $daftar->tglajuan }}</td>
                                </tr>

                                <tr>
                                    <th>Persyaratan</th>
                                     <td>{{ $daftar->syarat }}</td>
                                </tr>

                                <tr>
                                    <th>Proses</th>
                                    <td>{{ $daftar->proses }}</td>
                                </tr>

                                <tr>
                                    <th>Tanggal Selesai</th>
                                    <td>{{ $daftar->created_at}}</td>
                                </tr>

                                <tr>
                                    <th>Update Surat</th>
                                    <td>{{ $daftar->updated_at }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan Proses</th>
                                    <td>{{ $daftar->ket }}</td>
                                </tr>



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


@endpush



