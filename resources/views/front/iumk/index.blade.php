
@extends('front.templates.default')

@section('content')

<nav class="navbar navbar-dark justify-content-center  mt-5" style="background-color:lightblue">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('assets/images/kota.png') }}" width="50" height="50" alt="" class="rounded mx-auto d-block">
        <h4 class="text-justify">Pelayanan Online Kecamatan Dungingi</h4>
    </a>
</nav>

<div class="container">

<div class="card">
        <div class="card-header">
                <h4 class="text-center">Ijin Usaha Mikro Kecil</h4>

        </div>
        <div class="card-body">
          <h6 class="card-title">Silahkan Lengkapi Data Anda</h6>
          <p class="card-text"></p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>


        <div class="row justify-content-center mt-4">


              <div class="col-xs-10 col-md-10 col-lg-10 mt-1">

                  <form action="{{ route('iumk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <p> Berdasarkan Peraturan Presiden Nomor 98 Tahun 2014 Tentang Perizinan Untuk Usaha Mikro dan Kecil (Lembar Negera Republik Indonesia Tahun 2014 Nomor 222);Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberikan Izin Usaha Mikro Kecil; Peraturan Walikota Gorontalo tentang Pelimpahan Sebagian Usuran Pemerintahan dari Walikota Gorontalo kepada Camat, bersama ini menyatakan dan memberikan izin kepada :
                    </p>

                    <div class="form-group row @error('nama') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nama </strong></label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}" >
                        </div>
                        @error('nama')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('nik') has-error @enderror">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>NIK</strong> </label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="" name="nik" class="form-control" id="nik" placeholder="Masukkan Nomor Induk Kependudukan Anda" value="{{ old('nik') }}" >
                            </div>

                            @error('nik')
                              <span class="help-block">{{ $message }}</span>
                            @enderror

                    </div>



                    <div class="form-group row @error('alamat') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Alamat</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" value="{{ old('alamat') }}"
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
                        <input type="" name="kontak" class="form-control" id="kontak" placeholder="Masukkan Nomor Telp/Hp Anda" value="{{ old('kontak') }}">
                        </div>

                        @error('kontak')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <p>Untuk mendirikan usaha Mikro dan Kecil yang mencakup perizinan dasar berupa: Menempati lokasi/domisili, melakukan kegiatan usaha baik peroduksi maupun penjualan barang dan jasa dengan identitas:</p>

                    <div class="form-group row @error('naper') has-error @enderror">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nama Perusahaan </strong></label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="naper" class="form-control" id="naper" placeholder="Masukkan Nama Anda" value="{{ old('naper') }}">
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
                                <input type="" name="npwp" class="form-control" id="npwp" placeholder="Masukkan NPWP atau (-) jika belum ada" value="{{ old('npwp') }}">
                                </div>

                                @error('npwp')
                                  <span class="help-block">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="form-group row @error('giatusaha') has-error @enderror">
                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kegiatan Usaha</strong> </label>
                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                    <input type="" name="giatusaha" class="form-control" id="giatusaha" placeholder="Contoh : Jual Nasi Kuning" value="{{ old('giatusaha') }}">
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
                                    <input type="text" name="alamatusaha" class="form-control" id="alamatusaha" placeholder="Tuliskan Lengkap Contoh : Jalan Apel Kelurahan Huangobotu Kecamatan Dungingi" value="{{ old('alamatusaha') }}">
                                    </div>

                                    @error('alamatusaha')
                                      <span class="help-block">{{ $message }}</span>
                                    @enderror

                                </div>


                        <div class="form-group row @error('modal') has-error @enderror">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Jumlah Modal</strong> </label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="modal" class="form-control" id="modal" placeholder="Contoh : 20.000.000" value="{{ old('modal') }}"
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


                    <div class="card">
                            <div class="card-header">
                            <strong> Persyaratan Yang Harus Dibawa :</strong>
                            </div>
                            <div class="card-body up">

                                    <div class="form-group row  @error('fotoktp') has-error @enderror">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label class="" for="">1. KTP (Copy)</label>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <input type="file" name="fotoktp" class="form-group">
                                                <br>
                                                <input type="radio" aria-label="Radio button for following text input"> <span>Lewatkan Lampiran *</span>
                                            </div>

                                            @error('fotoktp')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror

                                    </div>

                                    <hr>

                                    <div class="form-group row  @error('fotopbb') has-error @enderror">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label class="" for="">2. Bukti Pelunasan PBB</label>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <input type="file" name="fotopbb" class="form-group">
                                                <br>
                                                <input type="radio" aria-label="Radio button for following text input"> <span>Lewatkan Lampiran *</span>
                                            </div>

                                            @error('fotopbb')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror

                                    </div>

                                    <hr>

                                    <div class="form-group row  @error('fotosku') has-error @enderror">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label class="" for="">3. Surat Keterangan Usaha Dari Kelurahan</label>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <input type="file" name="fotosku" class="form-group">
                                                <br>
                                                <input type="radio" aria-label="Radio button for following text input"> <span>Lewatkan Lampiran *</span>
                                            </div>

                                            @error('fotosku')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror

                                    </div>

                                    <hr>

                                    <div class="form-group row  @error('fotodiri') has-error @enderror">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label class="" for="">4. Foto Diri Ukuran 4 x 6 Warna</label>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <input type="file" name="fotodiri" class="form-group">
                                                <br>
                                                <input type="radio" aria-label="Radio button for following text input"> <span>Lewatkan Lampiran *</span>
                                            </div>

                                            @error('fotodiri')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror

                                    </div>

                                    <br>



                            <p style="font-size:13px;">* Centang Lewatkan Lampiran bila Lampiran Belum Ada </p>
                            <p style="font-size:13px;">** File Berformat jpg, png, jpeg, svg dan Maximal Ukuran/Size Lampiran 2 MB</p>



                            </div>
                    </div>


                    <div class="form-group mt-2">
                        <input type="submit" value="Kirim" class="btn btn-primary">
                    </div>

                  </form>
              </div>
            </div>

            <div class="card-footer text-muted mt-4">
              Periksa Kembali Data Diatas Apakah Sudah Benar
            </div>
      </div>
</div>

@endsection

@push('scripts')



        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('front.templates.partials.alerts')



@endpush



