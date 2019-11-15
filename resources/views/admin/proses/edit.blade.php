@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Update Informasi Surat</h4>



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
                                    <td>{{ old('syarat') ?? $proses->syarat }}</td>

                                </tr>

                                <tr>
                                        <th>Layanan</th>
                                        <td>{{ old('layanan') ?? $proses->layanan }}</td>
                                    </tr>

                                <tr>
                                    <th>Tanggal Pengajuan Surat</th>
                                    <td>{{ $proses->tglajuan }}</td>
                                </tr>

                                <tr>
                                    <th>Tanggal Selesai</th>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>Update Surat</th>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>Proses</th>
                                    <td>{{ $proses->kontak }}</td>
                                </tr>

                                <tr>
                                    <th>ket</th>
                                     <td>{{ $proses->naper }}</td>
                                </tr>

                                <tr>
                                    <th>Nomor Surat</th>
                                    <td>{{ $proses->bentuk }}</td>
                                </tr>

                                <tr>
                                    <th>Pejabat</th>
                                    <td>{{ $proses->npwp }}</td>
                                </tr>

                                <tr>
                                    <th>NIP</th>
                                    <td>{{ $proses->giatusaha }}</td>
                                </tr>

                                <tr>
                                    <th>Barcode</th>
                                    <td>{{ $proses->statusbangunan }}</td>
                                </tr>

                                <tr>
                                    <th>finish_at</th>
                                    <td>{{ $proses->alamatusaha }}</td>
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



