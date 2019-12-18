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
                                    <th>Nama Perusahaan</th>
                                     <td>{{ $daftar->naper }}</td>
                                </tr>

                                <tr>
                                    <th>Bentuk Usaha</th>
                                    <td>{{ $daftar->bentuk }}</td>
                                </tr>

                                <tr>
                                    <th>NPWP</th>
                                    <td>{{ $daftar->npwp }}</td>
                                </tr>

                                <tr>
                                    <th>Kegiatan Usaha</th>
                                    <td>{{ $daftar->giatusaha }}</td>
                                </tr>

                                <tr>
                                    <th>Sarana Usaha</th>
                                    <td>{{ $daftar->statusbangunan }}</td>
                                </tr>

                                <tr>
                                    <th>Alamat Usaha</th>
                                    <td>{{ $daftar->alamatusaha }}</td>
                                </tr>

                                <tr>
                                    <th>Modal</th>
                                    <td>{{ $daftar->modal }}</td>
                                </tr>

                                <tr>
                                    <th>KTP</th>
                                    <td><img src="{{ asset($daftar->getCover()) }}" height="250px"></td>
                                    

                                </tr>

                                <tr>
                                    <th>Surat Keterangan Usaha</th>
                                    <td><img src="{{ asset($daftar->getSku()) }}" height="250px"></td>
                                </tr>

                                <tr>
                                    <th>Pajak Bumi Bangunan</th>
                                    <td><img src="{{ asset($daftar->getPbb()) }}" height="250px"></td>
                                </tr>

                                <tr>
                                    <th>Foto Diri</th>
                                    <td><img src="{{ asset($daftar->getDiri()) }}" height="250px"></td>
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



