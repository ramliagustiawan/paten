@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-body">

                    <div class="box">
                        <div class="box-header">

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <table id="status" class="table table-bordered  table-hover" style="width:100%">

                               {{-- iumk --}}

                               <div class="container">

                                    <div class="card">
                                            <div class="card-header">
                                                    <h4 class="text-center">Ijin Usaha Mikro Kecil</h4>

                                            </div>
                                            <div class="card-body">
                                              <h6 class="card-title">Validasi Data dan Perbaiki Apabila Masih Ada Kesalahan</h6>
                                              <p class="card-text"></p>
                                              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                            </div>


                                            <div class="row justify-content-center mt-4">


                                                  <div class="col-xs-10 col-md-10 col-lg-10 mt-1">

                                                      <form action="{{ route('admin.iumk.update',$iumk) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method("PUT")

                                                        <p> Berdasarkan Peraturan Presiden Nomor 98 Tahun 2014 Tentang Perizinan Untuk Usaha Mikro dan Kecil (Lembar Negera Republik Indonesia Tahun 2014 Nomor 222);Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberikan Izin Usaha Mikro Kecil; Peraturan Walikota Gorontalo tentang Pelimpahan Sebagian Usuran Pemerintahan dari Walikota Gorontalo kepada Camat, bersama ini menyatakan dan memberikan izin kepada :
                                                        </p>

                                                        <div class="form-group row @error('nama') has-error @enderror">
                                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nama </strong></label>
                                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda" value="{{ old('nama') ?? $iumk->nama }}" >
                                                            </div>
                                                            @error('nama')
                                                              <span class="help-block">{{ $message }}</span>
                                                            @enderror

                                                        </div>

                                                        <div class="form-group row @error('nik') has-error @enderror">
                                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>NIK</strong> </label>
                                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                <input type="" name="nik" class="form-control" id="nik" placeholder="Masukkan Nomor Induk Kependudukan Anda" value="{{ old('nik') ?? $iumk->nik }}" >
                                                                </div>

                                                                @error('nik')
                                                                  <span class="help-block">{{ $message }}</span>
                                                                @enderror

                                                        </div>



                                                        <div class="form-group row @error('alamat') has-error @enderror">
                                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Alamat</strong> </label>
                                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" value="{{ old('alamat') ?? $iumk->alamat }}"
                                                            >
                                                            </div>

                                                            @error('alamat')
                                                              <span class="help-block">{{ $message }}</span>
                                                            @enderror

                                                        </div>

                                                       {{--  --}}

                                                       <div class="form-group row @error('kelurahan') has-error @enderror">
                                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kelurahan</strong> </label>
                                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                <select name="kelurahan" id="" class="form-control select2">
                                                                    <option selected>Pilih Kelurahan</option>
                                                                    <option value="Kelurahan Huangobotu Kecamatan Dungingi">Huangobotu</option>
                                                                    <option value="Kelurahan Huangobotu Kecamatan Dungingi">Libuo</option>
                                                                    <option value="Kelurahan Huangobotu Kecamatan Dungingi">Tuladenggi</option>
                                                                    <option value="Kelurahan Huangobotu Kecamatan Dungingi">Tomulabutao</option>
                                                                    <option value="Kelurahan Huangobotu Kecamatan Dungingi">Tomulabutao Selatan</option>
                                                                  </select>
                                                            </div>

                                                            @error('kelurahan')
                                                              <span class="help-block">{{ $message }}</span>
                                                            @enderror

                                                        </div>

                                                        {{--  --}}


                                                        <div class="form-group row @error('kontak') has-error @enderror">
                                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kontak</strong> </label>
                                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                            <input type="" name="kontak" class="form-control" id="kontak" placeholder="Masukkan Nomor Telp/Hp Anda" value="{{ old('kontak') ?? $iumk->kontak }}">
                                                            </div>

                                                            @error('kontak')
                                                              <span class="help-block">{{ $message }}</span>
                                                            @enderror

                                                        </div>

                                                        <p>Untuk mendirikan usaha Mikro dan Kecil yang mencakup perizinan dasar berupa: Menempati lokasi/domisili, melakukan kegiatan usaha baik peroduksi maupun penjualan barang dan jasa dengan identitas:</p>

                                                        <div class="form-group row @error('naper') has-error @enderror">
                                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nama Perusahaan </strong></label>
                                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                <input type="text" name="naper" class="form-control" id="naper" placeholder="Masukkan Nama Anda" value="{{ old('naper') ?? $iumk->naper }}">
                                                                </div>
                                                                @error('naper')
                                                                  <span class="help-block">{{ $message }}</span>
                                                                @enderror

                                                            </div>

                                                            <div class="form-group row @error('bentuk') has-error @enderror">
                                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Bentuk Usaha</strong> </label>
                                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                    <select name="bentuk" id="" class="form-control select2">
                                                                        <option selected>Pilih Bentuk Usaha</option>
                                                                        <option value="Usaha Dagang">Usaha Dagang</option>
                                                                        <option value="Usaha Jasa">Usaha Jasa</option>
                                                                        <option value="Usaha Produksi">Usaha Produksi</option>
                                                                      </select>
                                                                </div>

                                                                @error('bentuk')
                                                                  <span class="help-block">{{ $message }}</span>
                                                                @enderror

                                                            </div>

                                                            <div class="form-group row @error('npwp') has-error @enderror">
                                                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>NPWP</strong> </label>
                                                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                    <input type="" name="npwp" class="form-control" id="npwp" placeholder="Masukkan NPWP atau (-) jika belum ada" value="{{ old('npwp') ?? $iumk->npwp }}">
                                                                    </div>

                                                                    @error('npwp')
                                                                      <span class="help-block">{{ $message }}</span>
                                                                    @enderror

                                                                </div>

                                                                <div class="form-group row @error('giatusaha') has-error @enderror">
                                                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kegiatan Usaha</strong> </label>
                                                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                        <input type="" name="giatusaha" class="form-control" id="giatusaha" placeholder="Contoh : Jual Nasi Kuning" value="{{ old('giatusaha') ?? $iumk->giatusaha }}">
                                                                        </div>

                                                                        @error('giatusaha')
                                                                          <span class="help-block">{{ $message }}</span>
                                                                        @enderror

                                                                </div>


                                                                <div class="form-group row @error('statusbangunan') has-error @enderror">
                                                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Sarana Usaha</strong> </label>
                                                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                        <select name="statusbangunan" id="" class="form-control select2">
                                                                            <option selected>Pilih Sarana Usaha</option>
                                                                            <option value="Milik Sendiri">Milik Sendiri</option>
                                                                            <option value="Sewa">Sewa</option>
                                                                            <option value="Pedagang Keliling">Pedagang Keliling</option>
                                                                          </select>
                                                                    </div>

                                                                    @error('statusbangunan')
                                                                      <span class="help-block">{{ $message }}</span>
                                                                    @enderror

                                                                </div>

                                                                <div class="form-group row @error('alamatusaha') has-error @enderror">
                                                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Alamat Usaha</strong> </label>
                                                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                        <input type="text" name="alamatusaha" class="form-control" id="alamatusaha" placeholder="Tuliskan Lengkap Contoh : Jalan Apel Kelurahan Huangobotu Kecamatan Dungingi" value="{{ old('alamatusaha') ?? $iumk->alamatusaha }}">
                                                                        </div>

                                                                        @error('alamatusaha')
                                                                          <span class="help-block">{{ $message }}</span>
                                                                        @enderror

                                                                    </div>


                                                            <div class="form-group row @error('modal') has-error @enderror">
                                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Jumlah Modal</strong> </label>
                                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                <input type="text" name="modal" class="form-control" id="modal" placeholder="Contoh : 20.000.000" value="{{ old('modal') ?? $iumk->modal }}"
                                                                >
                                                                </div>

                                                                @error('modal')
                                                                  <span class="help-block">{{ $message }}</span>
                                                                @enderror

                                                            </div>



                                                        {{-- jenis surat invisible value default --}}

                                                        <div class="form-group row @error('layanan_id') has-error @enderror invisible ">
                                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kategori</strong> </label>
                                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                <input type="text" name="layanan_id" class="form-control" id="layanan" placeholder="Masukkan layanan Anda" value="1"
                                                                required>
                                                                </div>

                                                                @error('layanan_id')
                                                                  <span class="help-block">{{ $message }}</span>
                                                                @enderror

                                                        </div>

                                                        {{-- <div class="form-group row  @error('fotodiri') has-error @enderror">
                                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                                                                    <label class="" for="">Foto Diri </label>
                                                                </div>

                                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">

                                                                    <img src="{{ url($iumk->getDiri()) }}" height="110px">
                                                                    <input type="file" name="fotodiri" class="form-group" >

                                                                </div>

                                                                @error('fotodiri')
                                                                    <span class="help-block">{{ $message }}</span>
                                                                @enderror

                                                        </div> --}}


                                                        <div class="card">
                                                                <div class="card-header">
                                                                <strong> Proses Lebih Lanjut :</strong>
                                                                </div>

                                                        </div>

                                                        {{--  --}}

                                                       <div class="form-group row @error('syarat') has-error @enderror">
                                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Persyaratan</strong> </label>
                                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                            <select name="syarat" id="" class="form-control select2">
                                                            <option selected>{{old('syarat') ?? $iumk->syarat}}</option>
                                                                <option value="Berkas Lengkap">Berkas Lengkap</option>
                                                                <option value="Berkas Tidak Lengkap">Berkas Tidak Lengkap</option>
                                                              </select>
                                                        </div>

                                                        @error('syarat')
                                                          <span class="help-block">{{ $message }}</span>
                                                        @enderror

                                                    </div>

                                                    {{--  --}}


                                                        <div class="form-group row @error('nosurat') has-error @enderror">
                                                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nomor Surat</strong> </label>
                                                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                          <input type="text" name="nosurat" class="form-control" id="nosurat" placeholder="Masukkan Nomor Surat" value="{{ old('nosurat') ?? $iumk->nosurat }}">
                                                          </div>

                                                          @error('nosurat')
                                                            <span class="help-block">{{ $message }}</span>
                                                          @enderror

                                                      </div>

                                                      <div class="form-group row @error('tglsurat') has-error @enderror">
                                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Surat</strong> </label>
                                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                        <input type="date" name="tglsurat" class="form-control" id="tglsurat" placeholder="Masukkan Tanggal Surat" value="{{ old('tglsurat') ?? $iumk->tglsurat }}">
                                                        </div>

                                                        @error('tglsurat')
                                                          <span class="help-block">{{ $message }}</span>
                                                        @enderror

                                                    </div>

                                                    <div class="form-group row @error('barcode') has-error @enderror">
                                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pejabat Yang Bertanda</strong> </label>
                                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                        <select name="barcode" id="" class="form-control select2">
                                                            <option selected>{{old('barcode') ?? $iumk->barcode}}</option>
                                                            <option value="Camat Dungingi">Camat Dungingi</option>
                                                            <option value="a.n Camat Dungingi">Sekcam Dungingi</option>
                                                            <option value="a.n Camat Dungingi">Kepala Seksi</option>
                                                            {{-- <option value="Surat Selesai">Surat Selesai </option> --}}
                                                          </select>
                                                    </div>

                                                    @error('barcode')
                                                      <span class="help-block">{{ $message }}</span>
                                                    @enderror

                                                </div>

                                                  <div class="form-group row @error('pejabat_id') has-error @enderror">
                                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nama Pejabat</strong> </label>
                                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                        <select name="pejabat_id" id="" class="form-control select2">

                                                            @foreach ($pejabat as $item)
                                                            <option
                                                                value="{{ $item->id }}"
                                                                @if($item->id == $iumk->pejabat_id)
                                                                    selected
                                                                @endif
                                                            >
                                                                {{$item->nama}}
                                                            </option>

                                                            @endforeach
                                                          </select>
                                                    </div>

                                                    @error('pejabat_id')
                                                      <span class="help-block">{{ $message }}</span>
                                                    @enderror

                                                </div>

                                                <div class="form-group row @error('nip') has-error @enderror">
                                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>NIP</strong> </label>
                                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                        <select name="nip" id="" class="form-control select2">
                                                            <option selected>{{old('nip') ?? $iumk->nip}}</option>
                                                            <option value="19690908 199203 2 011">Camat Dungingi</option>
                                                            <option value="19840813 200312 1 002">Sekcam Dungingi</option>
                                                            {{-- <option value="Hj. Harni Mahmud, S.AP">Kepala Seksi</option> --}}
                                                            {{-- <option value="Surat Selesai">Surat Selesai </option> --}}
                                                          </select>
                                                    </div>

                                                    @error('nip')
                                                      <span class="help-block">{{ $message }}</span>
                                                    @enderror

                                                </div>

                                               <div class="form-group row @error('proses') has-error @enderror">
                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Posisi Berkas</strong> </label>
                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                    <select name="proses" id="" class="form-control select2">
                                                        <option selected>{{old('proses') ?? $iumk->proses}}</option>
                                                        <option value="Proses Verifikasi">Proses Verifikasi</option>
                                                        <option value="Proses Penandatangan">Proses Penandatangan</option>
                                                        <option value="Menunggu Pejabat Yang Menandatangani">Menunggu Pejabat Yang Menandatangani</option>
                                                        {{-- <option value="Surat Selesai">Surat Selesai </option> --}}
                                                      </select>
                                                </div>

                                                @error('proses')
                                                  <span class="help-block">{{ $message }}</span>
                                                @enderror

                                            </div>

                                            {{--  --}}







                                                        <div class="form-group mt-2">
                                                            <input type="submit" value="Validasi" class="btn btn-primary">
                                                            <a href="{{ route('admin.iumk.qrcode', $iumk)}}" class="btn btn-info modal-show edit" >Generate Qrcode</a>
                                                        </div>




                                                      </form>

                                                      {{-- cetak --}}
                                                      {{-- <button href="{{ route('admin.iumk.cetak')}}" class="btn btn-success modal-show edit" >Cetak</button> --}}


                                                  </div>



                                                </div>

                                                <div class="card-footer text-muted mt-4">
                                                  Periksa Kembali Data Diatas Apakah Sudah Benar
                                                </div>
                                          </div>
                                    </div>

                               {{-- batas iumk --}}

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



