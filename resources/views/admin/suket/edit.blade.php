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

                               {{-- suket --}}

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

                                                <form action="{{ route('admin.suket.update',$suket) }}" method="POST" enctype="multipart/form-data">
                                                  @csrf
                                                  @method("PUT")

                                                  <p>  Yang bertanda tangan di bawah ini Camat Dungingi, dengan ini menerangkan bahwa:
                                                  </p>
                              
                                                  <div class="form-group row @error('nama') has-error @enderror">
                                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong> Nama </strong></label>
                                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda" value="{{ old('nama') ?? $suket->nama }}" >
                                                      </div>
                                                      @error('nama')
                                                        <span class="help-block">{{ $message }}</span>
                                                      @enderror
                              
                                                  </div>
                              
                                                  <div class="form-group row @error('nik') has-error @enderror">
                                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>NIK</strong> </label>
                                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="" name="nik" class="form-control" id="nik" placeholder="Masukkan Nomor Induk Kependudukan Anda" value="{{ old('nik')?? $suket->nik }}" >
                                                    </div>
                              
                                                    @error('nik')
                                                      <span class="help-block">{{ $message }}</span>
                                                    @enderror
                              
                                            </div>
                              
                                                  <div class="form-group row @error('tempat') has-error @enderror">
                                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tempat Lahir</strong> </label>
                                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                    <input type="" name="tempat" class="form-control" id="tempat" placeholder="Tempat Lahir Sesuai KTP" value="{{ old('tempat')?? $suket->tempat }}">
                                                    </div>
                              
                                                    @error('tempat')
                                                      <span class="help-block">{{ $message }}</span>
                                                    @enderror
                              
                                                  </div>
                              
                                                  <div class="form-group row @error('tgllhr') has-error @enderror">
                                                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Lahir</strong> </label>
                                                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                          <input type="date" name="tgllhr" class="form-control" id="tgllhr" placeholder="Contoh : Gorontalo, 13 Agustus 1994" value="{{ old('tgllhr')?? $suket->tgllhr  }}" >
                                                          </div>
                              
                                                          @error('tgllhr')
                                                            <span class="help-block">{{ $message }}</span>
                                                          @enderror
                              
                                                  </div>
                              
                                                  <div class="form-group row @error('jk') has-error @enderror">
                                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Jenis Kelamin</strong> </label>
                                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                          <select name="jk" id="" class="form-control select2">
                                                              <option  selected>{{ old('jk')?? $suket->jk  }}</option>
                                                              <option value="Laki-Laki">Laki-Laki</option>
                                                              <option value="Perempuan">Perempuan</option>
                              
                                                            </select>
                                                      </div>
                              
                                                      @error('jk')
                                                        <span class="help-block">{{ $message }}</span>
                                                      @enderror
                              
                                                  </div>
                              
                                                  <div class="form-group row @error('agama') has-error @enderror">
                                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Agama</strong> </label>
                                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                          <select name="agama" id="" class="form-control select2">
                                                              <option selected>{{ old('agama')?? $suket->agama  }}</option>
                                                              <option value="Islam">Islam</option>
                                                              <option value="Kristen Katolik">Kristen Katolik</option>
                                                              <option value="Hindu">Hindu</option>
                                                              <option value="Budha">Budha</option>
                                                              <option value="Kristen Protestan">Kristen Protestan</option>
                                                            </select>
                                                      </div>
                                  
                                                      @error('agama')
                                                        <span class="help-block">{{ $message }}</span>
                                                      @enderror
                                  
                                                  </div>
                              
                              
                                              <div class="form-group row @error('pekerjaan') has-error @enderror">
                                                  <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pekerjaan</strong> </label>
                                                  <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                  <input type="" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Masukkan Pekerjaan Anda" value="{{ old('pekerjaan')?? $suket->pekerjaan  }}" >
                                                  </div>
                              
                                                  @error('pekerjaan')
                                                    <span class="help-block">{{ $message }}</span>
                                                  @enderror
                              
                                              </div>
                              
                                             
                              
                                                  <div class="form-group row @error('alamat') has-error @enderror">
                                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Alamat</strong> </label>
                                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                      <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap Anda" value="{{ old('alamat') ?? $suket->alamat}}">
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
                                                          <option selected>{{ old('kelurahan')?? $suket->kelurahan  }}</option>
                                                          <option value="Kelurahan Huangobotu Kecamatan Dungingi">Huangobotu</option>
                                                          <option value="Kelurahan Libuo Kecamatan Dungingi">Libuo</option>
                                                          <option value="Kelurahan Tuladenggi Kecamatan Dungingi">Tuladenggi</option>
                                                          <option value="Kelurahan Tomulabutao Kecamatan Dungingi">Tomulabutao</option>
                                                          <option value="Kelurahan Tomulabutao Selatan Kecamatan Dungingi">Tomulabutao Selatan</option>
                                                        </select>
                                                  </div>
                              
                                                  @error('kelurahan')
                                                    <span class="help-block">{{ $message }}</span>
                                                  @enderror
                              
                                              </div>
                              
                                              {{--  --}}
                              
                                                  <div class="form-group row @error('keterangan') has-error @enderror">
                                                      <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>keterangan</strong></label>
                                                      <div class="col-sm-10">
                                                      <textarea class="form-control" id="" name="keterangan" placeholder="Contoh: Telah terjadi kesalahan Penulisan Nama pada Kartu Keluarga atas nama .... yang sebenarmya adalah ..... berdasarkan Akta Kelahiran Nomor ...."  rows="5">{{ old('keterangan')?? $suket->keterangan  }}</textarea>
                                                      </div>
                              
                                                      @error('keterangan')
                                                      <span class="help-block">{{ $message }}</span>
                                                      @enderror
                              
                                                  </div>
                              
                                                
                                                  <div class="form-group row @error('keperluan') has-error @enderror">
                                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Keperluan</strong></label>
                                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                      <input type="text" name="keperluan" class="form-control" id="keperluan" placeholder="Contoh : Pengurusan Pembukaan Rekening Bank " value="{{ old('keperluan')?? $suket->keperluan  }}" >
                                                      </div>
                                                      @error('keperluan')
                                                        <span class="help-block">{{ $message }}</span>
                                                      @enderror
                              
                                                  </div>
                              
                                              
                              
                                                 <div class="form-group row @error('kontak') has-error @enderror">
                                                  <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kontak</strong> </label>
                                                  <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                  <input type="" name="kontak" class="form-control" id="kontak" placeholder="Masukkan Nomor Telp/Hp Anda " value="{{ old('kontak')?? $suket->kontak  }}">
                                                  </div>
                              
                                                  @error('kontak')
                                                    <span class="help-block">{{ $message }}</span>
                                                  @enderror
                              
                                              </div>
                              
                                                
                              
                                                  {{-- jenis surat invisible value default --}}
                              
                                                  <div class="form-group row @error('layanan_id') has-error @enderror invisible ">
                                                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kategori</strong> </label>
                                                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                          <input type="text" name="layanan_id" class="form-control" id="layanan_id" placeholder="Masukkan layanan_id Anda" value="2"
                                                          required>
                                                          </div>
                              
                                                          @error('layanan_id')
                                                            <span class="help-block">{{ $message }}</span>
                                                          @enderror
                              
                                                  </div>
                              
                                    
                                                  
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
                                                            <option selected>{{old('syarat') ?? $suket->syarat}}</option>
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
                                                          <input type="text" name="nosurat" class="form-control" id="nosurat" placeholder="Masukkan Nomor Surat" value="{{ old('nosurat') ?? $suket->nosurat }}">
                                                          </div>

                                                          @error('nosurat')
                                                            <span class="help-block">{{ $message }}</span>
                                                          @enderror

                                                      </div>

                                                      <div class="form-group row @error('tglsurat') has-error @enderror">
                                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Surat</strong> </label>
                                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                        <input type="date" name="tglsurat" class="form-control" id="tglsurat" placeholder="Masukkan Tanggal Surat" value="{{ old('tglsurat')?? $suket->tglsurat }}">
                                                        </div>

                                                        @error('tglsurat')
                                                          <span class="help-block">{{ $message }}</span>
                                                        @enderror

                                                    </div>


                                                    {{-- <div class="form-group row @error('barcode') has-error @enderror">
                                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pejabat Yang Bertanda</strong> </label>
                                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                        <select name="barcode" id="" class="form-control select2">
                                                            <option selected>{{old('barcode') ?? $suket->barcode}}</option>
                                                            <option value="Camat Dungingi">Camat Dungingi</option>
                                                            <option value="a.n Camat Dungingi">Sekcam Dungingi</option>
                                                            <option value="a.n Camat Dungingi">Kepala Seksi</option> --}}
                                                            {{-- <option value="Surat Selesai">Surat Selesai </option> --}}
                                                          {{-- </select>
                                                    </div>

                                                    @error('barcode')
                                                      <span class="help-block">{{ $message }}</span>
                                                    @enderror

                                                </div> --}}

                                                  <div class="form-group row @error('pejabat_id') has-error @enderror">
                                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pejabat</strong> </label>
                                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                        <select name="pejabat_id" id="" class="form-control select2">

                                                            @foreach ($pejabat as $item)
                                                            <option
                                                                value="{{ $item->id }}"
                                                                @if($item->id == $suket->pejabat_id)
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

                                                {{-- <div class="form-group row @error('nip') has-error @enderror">
                                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>NIP</strong> </label>
                                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                        <select name="nip" id="" class="form-control select2">
                                                            <option selected>{{old('nip') ?? $suket->nip}}</option>
                                                            <option value="19690908 199203 2 011">Camat Dungingi</option>
                                                            <option value="19840813 200312 1 002">Sekcam Dungingi</option> --}}
                                                            {{-- <option value="Hj. Harni Mahmud, S.AP">Kepala Seksi</option> --}}
                                                            {{-- <option value="Surat Selesai">Surat Selesai </option> --}}
                                                          {{-- </select>
                                                    </div>

                                                    @error('nip')
                                                      <span class="help-block">{{ $message }}</span>
                                                    @enderror

                                                </div> --}}

                                               <div class="form-group row @error('proses') has-error @enderror">
                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Posisi Berkas</strong> </label>
                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                    <select name="proses" id="" class="form-control select2">
                                                        <option selected>{{old('proses') ?? $suket->proses}}</option>
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
                                                            <a href="{{ route('admin.suket.qrcode', $suket)}}" class="btn btn-info modal-show edit" >Generate Qrcode</a>
                                                        </div>




                                                      </form>

                                                      {{-- cetak --}}
                                                      {{-- <button href="{{ route('admin.suket.cetak')}}" class="btn btn-success modal-show edit" >Cetak</button> --}}


                                                  </div>



                                                </div>

                                                <div class="card-footer text-muted mt-4">
                                                  Periksa Kembali Data Diatas Apakah Sudah Benar
                                                </div>
                                          </div>
                                    </div>

                               {{-- batas suket --}}

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



