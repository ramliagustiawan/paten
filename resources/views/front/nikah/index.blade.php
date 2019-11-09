
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
                <h4 class="text-center">Dispensasi Nikah</h4>

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

                    <div class="form-group row @error('nokua') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>No. Surat</strong></label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="nokua" class="form-control" id="nokua" placeholder="Masukkan Nomor Surat Dari KUA" value="{{ old('nokua') }}" >
                        </div>
                        @error('nokua')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <p> Berdasarkan Surat Keterangan Untuk Nikah No: , Kecamatan Jambi Timur Kota Jambi, Berdasarkan Keputusan Menteri Agama RI. No. 298 Tahun 2003 Pasal 19 Ayat 2 tentang Pencacatan Nikah dengan ini diberikan Dispensasi Kepada:
                    </p>

                    <div class="form-group row @error('nama') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>1. Nama </strong></label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda" value="{{ old('nama') }}" >
                        </div>
                        @error('nama')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('ttl') has-error @enderror">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tempat Tanggal Lahir</strong> </label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="" name="ttl" class="form-control" id="ttl" placeholder="Contoh : Gorontalo, 13 Agustus 1994" value="{{ old('ttl') }}" >
                            </div>

                            @error('ttl')
                              <span class="help-block">{{ $message }}</span>
                            @enderror

                    </div>

                    <div class="form-group row @error('jk') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Jenis Kelamin</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <select name="jk" id="" class="form-control select2">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="jk Huangobotu Kecamatan Dungingi">Laki-Laki</option>
                                <option value="jk Huangobotu Kecamatan Dungingi">Perempuan</option>

                              </select>
                        </div>

                        @error('jk')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('negara') has-error @enderror" >
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Warga Negara</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="" name="negara" class="form-control" id="negara" placeholder="Masukkan Nomor Induk Kependudukan Anda" value="Indonesia" disabled >
                        </div>

                        @error('negara')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                </div>

                <div class="form-group row @error('kerja') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pekerjaan</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                    <input type="" name="kerja" class="form-control" id="kerja" placeholder="Masukkan Pekerjaan Anda" value="{{ old('kerja') }}" >
                    </div>

                    @error('kerja')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group row @error('agama') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Agama</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <select name="agama" id="" class="form-control select2">
                            <option selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Krsten Protestan">Kristen Protestan</option>
                          </select>
                    </div>

                    @error('agama')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group row @error('statusnikah') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Status</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="statusnikah" class="form-control" id="statusnikah" placeholder="Masukkan status anda" value="{{ old('statusnikah') }}"
                    >
                    </div>

                    @error('statusnikah')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group row @error('bin') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Bin</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="bin" class="form-control" id="bin" placeholder="Masukkan Nama Orang Tua anda" value="{{ old('bin') }}"
                    >
                    </div>

                    @error('bin')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>


                    <div class="form-group row @error('alamat') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Alamat</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap Anda" value="{{ old('alamat') }}">
                        </div>

                        @error('alamat')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>




                    {{-- batas suami --}}
                    <br>
                    <hr>
                    <br>

                    <div class="form-group row @error('istri') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>2. istri </strong></label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="istri" class="form-control" id="istri" placeholder="Masukkan Nama Lengkap Anda " value="{{ old('istri') }}" >
                        </div>
                        @error('istri')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('ttlistri') has-error @enderror">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tempat Tanggal Lahir</strong> </label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="" name="ttlistri" class="form-control" id="ttlistri" placeholder="Contoh : Gorontalo 08 Juli 2000" value="{{ old('ttlistri') }}" >
                            </div>

                            @error('ttlistri')
                              <span class="help-block">{{ $message }}</span>
                            @enderror

                    </div>

                    <div class="form-group row @error('jkistri') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Jenis Kelamin</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <select name="jkistri" id="" class="form-control select2">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="jkistri Huangobotu Kecamatan Dungingi">Laki-Laki</option>
                                <option value="jkistri Huangobotu Kecamatan Dungingi">Perempuan</option>

                              </select>
                        </div>

                        @error('jkistri')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('negaraistri') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Warga Negara</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="" name="negaraistri" class="form-control" id="negaraistri" placeholder="Masukkan Nomor Induk Kependudukan Anda" value="Indonesia" disabled >
                        </div>

                        @error('negaraistri')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                </div>

                <div class="form-group row @error('kerjaistri') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pekerjaan</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                    <input type="" name="kerjaistri" class="form-control" id="kerjaistri" placeholder="Masukkan Pekerjaan Anda" value="{{ old('kerjaistri') }}" >
                    </div>

                    @error('kerjaistri')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group row @error('agamaistri') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Agama</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <select name="agamaistri" id="" class="form-control select2">
                            <option selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                          </select>
                    </div>

                    @error('agamaistri')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group row @error('statusistri') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Status</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="statusistri" class="form-control" id="statusistri" placeholder="Masukkan status anda" value="{{ old('statusistri') }}"
                    >
                    </div>

                    @error('statusistri')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group row @error('binti') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Binti</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="binti" class="form-control" id="binti" placeholder="Masukkan Nama Orang Tua anda" value="{{ old('binti') }}"
                    >
                    </div>

                    @error('binti')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>


                    <div class="form-group row @error('alamatistri') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Alamat</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="alamatistri" class="form-control" id="alamatistri" placeholder="Masukkan Alamat Lengkap Anda" value="{{ old('alamatistri') }}"
                        >
                        </div>

                        @error('alamatistri')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                   {{--  --}}

                   <div class="form-group row @error('kontak') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kontak</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                    <input type="" name="kontak" class="form-control" id="kontak" placeholder="Masukkan Nomor Telp/Hp Calon suami/ Calon Istri " value="{{ old('kontak') }}">
                    </div>

                    @error('kontak')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>

                    {{-- batas istri --}}
                    <br>

                    <p>Untuk dapat melaksanakan sebelum 10 (sepuluh) hari kerja sejak melaporkan ke KUA dispensasi ini diberikan berdasarkan permintaan yang bersangkutan/Wali/WakilWali dengan alasan:
                    </p>

                    <ul> - Akan Melaksanakan Pernikahan kurang 10 hari sejak melapor ke KUA</ul>

                    <p>Demikian untuk dipergunakan sebagaimana mestinya.
                    </p>

                    {{-- jenis surat invisible value default --}}

                    <div class="form-group row @error('layanan') has-error @enderror invisible ">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kategori</strong> </label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="layanan" class="form-control" id="layanan" placeholder="Masukkan layanan Anda" value="Dispensasi Nikah"
                            required>
                            </div>

                            @error('layanan')
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



