
@extends('front.templates.default')

@section('content')

<nav class="navbar navbar-dark justify-content-center mt-5" style="background-color:lightblue">
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

                  <form action="{{ route('report.store') }}" method="POST">
                    @csrf

                    <p> Berdasarkan Peraturan Presiden Nomor 98 Tahun 2014 Tentang Perizinan Untuk Usaha Mikro dan Kecil (Lembar Negera Republik Indonesia Tahun 2014 Nomor 222);Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberikan Izin Usaha Mikro Kecil; Peraturan Walikota Gorontalo tentang Pelimpahan Sebagian Usuran Pemerintahan dari Walikota Gorontalo kepada Camat, bersama ini menyatakan dan memberikan izin kepada :
                    </p>

                    <div class="form-group row @error('name') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nama </strong></label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Anda" value="{{ old('name') }}" required>
                        </div>
                        @error('name')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('ktp') has-error @enderror">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>No.KTP</strong> </label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="" name="ktp" class="form-control" id="ktp" placeholder="Masukkan Nomor Telp/Hp Anda" value="{{ old('ktp') }}" required>
                            </div>

                            @error('kontak')
                              <span class="help-block">{{ $message }}</span>
                            @enderror

                    </div>



                    <div class="form-group row @error('alamat') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Alamat</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" value="{{ old('alamat') }}"
                        required>
                        </div>

                        @error('alamat')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('kontak') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kontak</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="" name="kontak" class="form-control" id="kontak" placeholder="Masukkan Nomor Telp/Hp Anda" value="{{ old('kontak') }}" required>
                        </div>

                        @error('kontak')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <p>Untuk mendirikan usaha Mikro dan Kecil yang mencakup perizinan dasar berupa: Menempati lokasi/domisili, melakukan kegiatan usaha baik peroduksi maupun penjualan barang dan jasa dengan identitas:</p>

                    <div class="form-group row @error('name') has-error @enderror">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nama </strong></label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Anda" value="{{ old('name') }}" required>
                            </div>
                            @error('name')
                              <span class="help-block">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="form-group row @error('ktp') has-error @enderror">
                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>No.KTP</strong> </label>
                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                <input type="" name="ktp" class="form-control" id="ktp" placeholder="Masukkan Nomor Telp/Hp Anda" value="{{ old('ktp') }}" required>
                                </div>

                                @error('kontak')
                                  <span class="help-block">{{ $message }}</span>
                                @enderror

                        </div>



                        <div class="form-group row @error('alamat') has-error @enderror">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Alamat</strong> </label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" value="{{ old('alamat') }}"
                            required>
                            </div>

                            @error('alamat')
                              <span class="help-block">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="form-group row @error('kontak') has-error @enderror">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kontak</strong> </label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="" name="kontak" class="form-control" id="kontak" placeholder="Masukkan Nomor Telp/Hp Anda" value="{{ old('kontak') }}" required>
                            </div>

                            @error('kontak')
                              <span class="help-block">{{ $message }}</span>
                            @enderror

                        </div>

                    <div class="form-group row @error('pesan') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pesan</strong></label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <textarea class="form-control" id="" name="pesan" placeholder="Tuliskan Pengaduan /Laporan Anda"  rows="4">{{ old('pesan') }}</textarea>
                        </div>

                        @error('pesan')
                        <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    {{-- jenis surat invisible value default --}}

                    <div class="form-group row @error('alamat') has-error @enderror invisible ">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kategori</strong> </label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" value="IUMK"
                            required>
                            </div>

                            @error('alamat')
                              <span class="help-block">{{ $message }}</span>
                            @enderror

                    </div>

                    <div class="card">
                            <div class="card-header">
                            <strong> Persyaratan Yang Harus Dibawa :</strong>
                            </div>
                            <div class="card-body">




                                    <div class="form-group row  @error('cover') has-error @enderror">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label class="" for="">1. KTP (Copy)</label>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <input type="file" name="cover" class="form-group">
                                                <br>
                                                <input type="radio" aria-label="Radio button for following text input"> <span>Lewatkan Lampiran *</span>
                                            </div>

                                            @error('cover')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror

                                    </div>

                                    <hr>

                                    <div class="form-group row  @error('cover') has-error @enderror">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label class="" for="">2. Bukti Pelunasan PBB</label>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <input type="file" name="cover" class="form-group">
                                                <br>
                                                <input type="radio" aria-label="Radio button for following text input"> <span>Lewatkan Lampiran *</span>
                                            </div>

                                            @error('cover')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror

                                    </div>

                                    <hr>

                                    <div class="form-group row  @error('cover') has-error @enderror">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label class="" for="">3. Surat Keterangan Usaha Dari Kelurahan</label>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <input type="file" name="cover" class="form-group">
                                                <br>
                                                <input type="radio" aria-label="Radio button for following text input"> <span>Lewatkan Lampiran *</span>
                                            </div>

                                            @error('cover')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror

                                    </div>

                                    <hr>

                                    <div class="form-group row  @error('cover') has-error @enderror">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label class="" for="">4. Foto Diri Ukuran 4 x 6 Warna</label>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <input type="file" name="cover" class="form-group">
                                                <br>
                                                <input type="radio" aria-label="Radio button for following text input"> <span>Lewatkan Lampiran *</span>
                                            </div>

                                            @error('cover')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror

                                    </div>






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



