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

                   {{-- tindak --}}

                   <div class="container">

                        <div class="card">
                                <div class="card-header">
                                        <h4 class="text-center">Registrasi Surat Masuk</h4>

                                </div>
                                <div class="card-body">
                                  <h6 class="card-title"></h6>
                                  <p class="card-text"></p>
                                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                </div>


                                <div class="row justify-content-center mt-4">

                                  <div class="col-xs-10 col-md-10 col-lg-10 mt-1">

                                    <form action="{{ route('admin.suratin.store') }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                     
                                      <div class="form-group row @error('name') has-error @enderror">
                                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong> Pelapor </strong></label>
                                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                          <input type="text" name="name" class="form-control" id="name" readonly placeholder="Masukkan name Lengkap Anda" value="" >
                                          </div>
                                          @error('name')
                                            <span class="help-block">{{ $message }}</span>
                                          @enderror

                                      </div>

                                      <div class="form-group row @error('created_at') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Pelaporan</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="" name="created_at" class="form-control" id="created_at" readonly  placeholder="Masukkan Nomor Induk Kependudukan Anda" value="" >
                                        </div>

                                        @error('created_at')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                </div>

                                      <div class="form-group row @error('alamat') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Alamat</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="" name="alamat" class="form-control" id="alamat" readonly placeholder="alamat Lahir Sesuai KTP" value="">
                                        </div>

                                        @error('alamat')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                      </div>


                                      <div class="form-group row @error('kontak') has-error @enderror">
                                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kontak</strong> </label>
                                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                          <input type="text" name="kontak" class="form-control" readonly  id="kontak" placeholder="Masukkan kontak Lengkap Anda" value="">
                                          </div>

                                          @error('kontak')
                                            <span class="help-block">{{ $message }}</span>
                                          @enderror

                                      </div>



                                    <div class="form-group row @error('pesan') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Isi Laporan</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="text" name="pesan" class="form-control" id="pesan" readonly  placeholder="Masukkan pesan Lengkap Anda" value="">
                                        </div>

                                        @error('pesan')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <br>

                                           <div class="card">
                                                    <div class="card-header">
                                                    <strong> tindak Lanjut :</strong>
                                                    </div>

                                            </div>

                                            {{--  --}}
                                            <br>

                                              {{--  --}}


                                            <div class="form-group row @error('tindakan') has-error @enderror">
                                                <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Respon Tindakan</strong></label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" id="" name="tindakan" placeholder="Tuliskan Pengaduan /Laporan Anda"  rows="4"></textarea>
                                                </div>

                                                @error('tindakan')
                                                <span class="help-block">{{ $message }}</span>
                                                @enderror

                                            </div>

                                            <div class="form-group row @error('aparat') has-error @enderror">
                                              <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pejabat Yang Menangani</strong> </label>
                                              <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                              <input type="" name="aparat" class="form-control" id="aparat" placeholder="Yang Menangani Laporan" value="" >
                                              </div>

                                              @error('aparat')
                                                <span class="help-block">{{ $message }}</span>
                                              @enderror

                                      </div>

                                            <div class="form-group row @error('ket') has-error @enderror">
                                              <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Keterangan</strong> </label>
                                              <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                              <input type="" name="ket" class="form-control" id="ket" placeholder="Keterangan" value="">
                                              </div>

                                              @error('ket')
                                                <span class="help-block">{{ $message }}</span>
                                              @enderror

                                            </div>


                                            <div class="form-group row @error('updated_at') has-error @enderror">
                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Update</strong> </label>
                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                <input type="text" name="updated_at" class="form-control" id="updated_at" placeholder="Masukkan updated_at Lengkap Anda" value="{{ old('updated_at') }}">
                                                </div>

                                                @error('updated_at')
                                                  <span class="help-block">{{ $message }}</span>
                                                @enderror

                                            </div>



                                            <div class="form-group mt-2">
                                                <input type="submit" value="Tindak Lanjut" class="btn btn-primary">

                                            </div>




                                          </form>

                                          {{-- cetak --}}
                                          {{-- <button href="{{ route('admin.tindak.cetak')}}" class="btn btn-success modal-show edit" >Cetak</button> --}}


                                      </div>



                                    </div>

                                    <div class="card-footer text-muted mt-4">
                                      Periksa Kembali Data Diatas Apakah Sudah Benar
                                    </div>
                              </div>
                        </div>

                   {{-- batas tindak --}}

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



