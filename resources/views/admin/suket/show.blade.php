@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Detail Permohonan IUMK</h4>



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
                                        <th>NIK</th>
                                        <td>{{ $daftar->nik }}</td>
                                    </tr>

                                <tr>
                                    <th>Layanan</th>
                                    <td>{{ $daftar->layanan->layanan}}</td>
                                </tr>

                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $daftar->alamat }}</td>
                                </tr>

                                <tr>
                                    <th>Kelurahan</th>
                                    <td>{{ $daftar->kelurahan }}</td>
                                </tr>

                                <tr>
                                    <th>No Telp</th>
                                    <td>{{ $daftar->kontak }}</td>
                                </tr>

                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $daftar->tempat }}</td>
                                </tr>

                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $daftar->tgllhr }}</td>
                                </tr>

                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $daftar->jk }}</td>
                                </tr>

                                <tr>
                                    <th>Agama</th>
                                    <td>{{ $daftar->agama }}</td>
                                </tr>

                                <tr>
                                    <th>Pekerjaan</th>
                                    <td>{{ $daftar->pekerjaan }}</td>
                                </tr>

                                <tr>
                                    <th>Keterangan</th>
                                    <td>{{ $daftar->keterangan }}</td>

                                </tr>

                                <tr>
                                    <th>Keperluan</th>
                                    <td>{{ $daftar->keperluan }}</td>
                                </tr>

                                <tr>
                                    <th>KTP</th>
                                    <td><img src="{{ url($daftar->getCover()) }}" height="250px"></td>
                                </tr>

                                <tr>
                                    <th>Pajak Bumi dan Bangunan</th>
                                    <td><img src="{{ url($daftar->getPbb()) }}" height="250px"></td>
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



