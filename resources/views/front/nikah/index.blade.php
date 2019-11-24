
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

                <form action="{{ route('nikah.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row @error('kua') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Permohonan KUA</strong></label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="kua" class="form-control" id="kua" placeholder="Masukkan tanggal permohonan KUA" value="{{ old('kua') }}" >
                        </div>
                        @error('kua')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <p> Berdasarkan Surat Keterangan Untuk Nikah No: , Kecamatan Dungingi Kota Gorontalo, Berdasarkan Keputusan Menteri Agama RI. No. 298 Tahun 2003 Pasal 19 Ayat 2 tentang Pencacatan Nikah dengan ini diberikan Dispensasi Kepada:
                    </p>

                    <div class="form-group row @error('nama') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>1. Calon Suami </strong></label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda" value="{{ old('nama') }}" >
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

                      <div class="form-group row @error('tempat') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tempat Lahir</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="" name="tempat" class="form-control" id="tempat" placeholder="Tempat Lahir Sesuai KTP" value="{{ old('tempat') }}" >
                        </div>

                        @error('tempat')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                      </div>

                      <div class="form-group row @error('tgllhr') has-error @enderror">
                              <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Lahir</strong> </label>
                              <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                              <input type="date" name="tgllhr" class="form-control" id="tgllhr" placeholder="Contoh : Gorontalo, 13 Agustus 1994" value="{{ old('tgllhr') }}" >
                              </div>

                              @error('tgllhr')
                                <span class="help-block">{{ $message }}</span>
                              @enderror

                      </div>

                      <div class="form-group row @error('jk') has-error @enderror">
                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Jenis Kelamin</strong> </label>
                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                              <select name="jk" id="" class="form-control select2">
                                  <option selected>Pilih Jenis Kelamin</option>
                                  <option value="Laki-Laki">Laki-Laki</option>
                                  <option value="Perempuan">Perempuan</option>

                                </select>
                          </div>

                          @error('jk')
                            <span class="help-block">{{ $message }}</span>
                          @enderror

                      </div>

                    <div class="form-group row @error('wn') has-error @enderror">
                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Warga Negara</strong> </label>
                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                          <select name="wn" id="" class="form-control select2">
                              <option selected>Pilih Kewarganegaraan</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Warga Negara Asing">Warga Negara Asing</option>
                            </select>
                      </div>

                      @error('wn')
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


                    <div class="form-group row @error('status') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Status</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <select name="status" id="" class="form-control select2">
                                <option selected>Pilih Status</option>
                                <option value="Perjaka">Perjaka</option>
                                <option value="Duda">Duda</option>


                              </select>
                        </div>

                        @error('status')
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

                    <div class="form-group row @error('kelurahan') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kelurahan</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <select name="kelurahan" id="" class="form-control select2">
                                <option selected>Pilih Kelurahan</option>
                                <option value="Kelurahan Huangobotu Kecamatan Dungingi">Huangobotu</option>
                                <option value="Kelurahan Libuo Kecamatan Dungingi">Libuo</option>
                                <option value="Kelurahan Tuladenggi Kecamatan Dungingi">Tuladenggi</option>
                                <option value="Kelurahan Tomulabutao Kecamatan Dungingi">Tomulabutao</option>
                                <option value="Kelurahan Tomulabutao Selatan Kecamatan Dungingi">Tomulabutao Selatan</option>
                                <option value="Wilayah Kota Gorontalo">Wilayah Kota Gorontalo</option>
                                <option value="Luar Daerah">Luar Daerah</option>
                              </select>
                        </div>

                        @error('kelurahan')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>
                    {{-- batas suami --}}
                    <br>
                    <hr>

                    <div class="form-group row @error('namacln') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>2. Calon Istri </strong></label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="namacln" class="form-control" id="namacln" placeholder="Masukkan nama Lengkap Anda" value="{{ old('namacln') }}" >
                        </div>
                        @error('namacln')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('nikcln') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>NIK</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="" name="nikcln" class="form-control" id="nikcln" placeholder="Masukkan Nomor Induk Kependudukan Anda" value="{{ old('nikcln') }}" >
                        </div>

                        @error('nikcln')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                </div>

                      <div class="form-group row @error('tempatcln') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tempat Lahir</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="" name="tempatcln" class="form-control" id="tempatcln" placeholder="tempatcln Lahir Sesuai KTP" value="{{ old('tempatcln') }}">
                        </div>

                        @error('tempatcln')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                      </div>

                      <div class="form-group row @error('tgllhrcln') has-error @enderror">
                              <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Lahir</strong> </label>
                              <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                              <input type="date" name="tgllhrcln" class="form-control" id="tgllhrcln" placeholder="Contoh : Gorontalo, 13 Agustus 1994" value="{{ old('tgllhrcln') }}" >
                              </div>

                              @error('tgllhrcln')
                                <span class="help-block">{{ $message }}</span>
                              @enderror

                      </div>

                      <div class="form-group row @error('jkcln') has-error @enderror">
                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Jenis Kelamin</strong> </label>
                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                              <select name="jkcln" id="" class="form-control select2">
                                  <option selected>Pilih Jenis Kelamin</option>
                                  <option value="Laki-Laki">Laki-Laki</option>
                                  <option value="Perempuan">Perempuan</option>

                                </select>
                          </div>

                          @error('jkcln')
                            <span class="help-block">{{ $message }}</span>
                          @enderror

                      </div>

                    <div class="form-group row @error('wncln') has-error @enderror">
                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Warga Negara</strong> </label>
                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                          <select name="wncln" id="" class="form-control select2">
                              <option selected>Pilih Kewarganegaraan</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Warga Negara Asing">Warga Negara Asing</option>
                            </select>
                      </div>

                      @error('wncln')
                        <span class="help-block">{{ $message }}</span>
                      @enderror

                  </div>

                    <div class="form-group row @error('kerjacln') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pekerjaan</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="" name="kerjacln" class="form-control" id="kerjacln" placeholder="Masukkan Pekerjaan Anda" value="{{ old('kerjacln') }}" >
                        </div>

                        @error('kerjacln')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('agamacln') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Agama</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <select name="agamacln" id="" class="form-control select2">
                                <option selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Katolik">Kristen Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Krsten Protestan">Kristen Protestan</option>
                              </select>
                        </div>

                        @error('agamacln')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>


                    <div class="form-group row @error('statuscln') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Status</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <select name="statuscln" id="" class="form-control select2">
                                <option selected>Pilih Status</option>
                                <option value="Perawan">Perawan</option>
                                <option value="Janda">Janda</option>

                              </select>
                        </div>

                        @error('statuscln')
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


                    <div class="form-group row @error('alamatcln') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Alamat</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="alamatcln" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap Anda" value="{{ old('alamat') }}">
                        </div>

                        @error('alamatcln')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('kelurahancln') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kelurahan</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <select name="kelurahancln" id="" class="form-control select2">
                                <option selected>Pilih Kelurahan</option>
                                <option value="Kelurahan Huangobotu Kecamatan Dungingi">Huangobotu</option>
                                <option value="Kelurahan Libuo Kecamatan Dungingi">Libuo</option>
                                <option value="Kelurahan Tuladenggi Kecamatan Dungingi">Tuladenggi</option>
                                <option value="Kelurahan Tomulabutao Kecamatan Dungingi">Tomulabutao</option>
                                <option value="Kelurahan Tomulabutao Selatan Kecamatan Dungingi">Tomulabutao Selatan</option>
                                <option value="Wilayah Kota Gorontalo">Wilayah Kota Gorontalo</option>
                                <option value="Luar Daerah">Luar Daerah</option>
                              </select>
                        </div>

                        @error('kelurahancln')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>


                  {{-- batas calon istri --}}

                  <hr>

                  <div class="form-group row @error('kontakcln') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kontak</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                    <input type="" name="kontakcln" class="form-control" id="kontakcln" placeholder="Masukkan Nomor Telp/Hp Calon suami/ Calon Istri " value="{{ old('kontakcln') }}">
                    </div>

                    @error('kontakcln')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group row @error('waktuakad') has-error @enderror">
                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Akad</strong> </label>
                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                    <input type="date" name="waktuakad" class="form-control" id="waktuakad" placeholder="Masukkan Tanggal Pelaksanaan Akad Nikah" value="{{ old('waktuakad') }}"
                    >
                    </div>

                    @error('waktuakad')
                      <span class="help-block">{{ $message }}</span>
                    @enderror

                </div>


                    <div class="form-group row @error('tempatakad') has-error @enderror">
                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tempat Akad</strong> </label>
                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="tempatakad" class="form-control" id="tempatakad" placeholder="Masukkan Tempat Pelaksanaan Akad Nikah" value="{{ old('tempatakad') }}"
                        >
                        </div>

                        @error('tempatakad')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                   {{--  --}}



                    {{-- batas istri --}}
                    <br>

                    <p>Untuk dapat melaksanakan sebelum 10 (sepuluh) hari kerja sejak melaporkan ke KUA dispensasi ini diberikan berdasarkan permintaan yang bersangkutan/Wali/WakilWali dengan alasan:
                    </p>

                    <ul> - Akan Melaksanakan Pernikahan kurang 10 hari sejak melapor ke KUA</ul>

                    <p>Demikian untuk dipergunakan sebagaimana mestinya.
                    </p>

                    {{-- jenis surat invisible value default --}}

                    <div class="form-group row @error('layanan_id') has-error @enderror invisible ">
                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kategori</strong> </label>
                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="layanan_id" class="form-control" id="layanan_id" placeholder="Masukkan layanan Anda" value="2"
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

                                    <div class="form-group row  @error('fotokua') has-error @enderror">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label class="" for="">1. Permohonan KUA</label>
                                            </div>

                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <input type="file" name="fotokua" class="form-group">
                                                <br>
                                                <input type="radio" aria-label="Radio button for following text input"> <span>Lewatkan Lampiran *</span>
                                            </div>

                                            @error('fotokua')
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



