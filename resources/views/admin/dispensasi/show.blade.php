@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Detail Permohonan Dispensasi Nikah</h4>



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
                                    <th>Permohonan KUA</th>
                                    <td>{{ $daftar->kua }}</td>
                                </tr>

                                <tr>
                                    <th>Layanan</th>
                                    <td>{{ $daftar->layanan->layanan }}</td>
                                </tr>

                                <tr>
                                    <th>Kontak</th>
                                    <td>{{ $daftar->kontakcln }}</td>
                                </tr>

                                <tr>
                                    <th>Waktu Pelaksanaan Akad</th>
                                    <td>{{ $daftar->waktuakad }}</td>
                                </tr>

                                <tr>
                                    <th>Tempat Pelaksanaan Akad</th>
                                    <td>{{ $daftar->tempatakad }}</td>

                                </tr>

                                <tr>
                                    <th>1. Calon Suami</th>
                                    <td>{{ $daftar->nama}}</td>
                                </tr>

                                <tr>
                                    <th>NIK</th>
                                    <td>{{ $daftar->nik}}</td>
                                </tr>

                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $daftar->alamat }}</td>
                                </tr>

                                <tr>
                                    <th>Tempat Tanggal Lahir</th>
                                    <td>{{ $daftar->tempat}}, {{ $daftar->tgllhr }}</td>
                                </tr>

                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $daftar->jk }}</td>
                                </tr>

                                <tr>
                                    <th>Warga Negara</th>
                                     <td>{{ $daftar->wn}}</td>
                                </tr>

                                <tr>
                                    <th>Pekerjaan</th>
                                    <td>{{ $daftar->kerja }}</td>
                                </tr>

                                <tr>
                                    <th>Agama</th>
                                    <td>{{ $daftar->agama }}</td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>{{ $daftar->status }}</td>
                                </tr>

                                <tr>
                                    <th>Bin</th>
                                    <td>{{ $daftar->bin }}</td>
                                </tr>

                                <tr>
                                    <th>Alamat </th>
                                    <td>{{ $daftar->alamat }},{{ $daftar->kelurahan }}</td>
                                </tr>

                                {{-- calon istri --}}

                                <tr>
                                    <th>2. Calon Istri</th>
                                    <td>{{ $daftar->namacln}}</td>
                                </tr>

                                <tr>
                                    <th>NIK</th>
                                    <td>{{ $daftar->nikcln}}</td>
                                </tr>

                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $daftar->alamatcln }}</td>
                                </tr>

                                <tr>
                                    <th>Tempat Tanggal Lahir</th>
                                    <td>{{ $daftar->tempatcln}}, {{ $daftar->tgllhrcln }}</td>
                                </tr>

                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $daftar->jkcln }}</td>
                                </tr>

                                <tr>
                                    <th>Warga Negara</th>
                                     <td>{{ $daftar->wncln}}</td>
                                </tr>

                                <tr>
                                    <th>Pekerjaan</th>
                                    <td>{{ $daftar->kerjacln }}</td>
                                </tr>

                                <tr>
                                    <th>Agama</th>
                                    <td>{{ $daftar->agamacln }}</td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>{{ $daftar->statuscln }}</td>
                                </tr>

                                <tr>
                                    <th>Bin</th>
                                    <td>{{ $daftar->binti }}</td>
                                </tr>

                                <tr>
                                    <th>Alamat </th>
                                    <td>{{ $daftar->alamatcln }},{{ $daftar->kelurahancln }}</td>
                                </tr>

                                {{-- batas --}}

                                
                                <tr>
                                    <th>Permohonan KUA</th>
                                    <td><img src="{{ url($daftar->getCover()) }}" height="250px"></td>
                                </tr>

                                <tr>
                                    <th>Pajak Bumi Bangunan</th>
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
         @include ('admin.templates.partials.alerts')

        {{--  swal  --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


@endpush



