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

                   {{-- proses --}}

                   <div class="container">

                        <div class="card">
                                <div class="card-header">
                                        <h4 class="text-center">Status Layanan</h4>

                                </div>
                                <div class="card-body">
                                  <h6 class="card-title">Update Data dan Perbaiki Apabila Masih Ada Kesalahan</h6>
                                  <p class="card-text"></p>
                                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                </div>


                                <div class="row justify-content-center mt-4">

                                  <div class="col-xs-10 col-md-10 col-lg-10 mt-1">

                                    <form action="{{ route('admin.proses.update',$proses) }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      @method("PUT")



                                      <div class="form-group row @error('nama') has-error @enderror">
                                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong> Nama </strong></label>
                                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                          <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda" value="{{ old('nama') ?? $proses->nama }}" >
                                          </div>
                                          @error('nama')
                                            <span class="help-block">{{ $message }}</span>
                                          @enderror

                                      </div>

                                      <div class="form-group row @error('tglajuan') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Pengajuan</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="" name="tglajuan" class="form-control" id="tglajuan" placeholder="Masukkan Nomor Induk Kependudukan Anda" value="{{ old('tglajuan')?? $proses->tglajuan }}" >
                                        </div>

                                        @error('tglajuan')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                </div>

                                      <div class="form-group row @error('syarat') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Persyaratan</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="" name="syarat" class="form-control" id="syarat" placeholder="syarat Lahir Sesuai KTP" value="{{ old('syarat')?? $proses->syarat }}">
                                        </div>

                                        @error('syarat')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                      </div>


                                      <div class="form-group row @error('finish_at') has-error @enderror">
                                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Layanan</strong> </label>
                                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                          <input type="text" name="finish_at" class="form-control" id="finish_at" placeholder="Masukkan finish_at Lengkap Anda" value="{{ old('finish_at') ?? $proses->finish_at}}">
                                          </div>

                                          @error('finish_at')
                                            <span class="help-block">{{ $message }}</span>
                                          @enderror

                                      </div>



                                    <div class="form-group row @error('created_at') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Selesai</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="text" name="created_at" class="form-control" id="created_at" placeholder="Masukkan created_at Lengkap Anda" value="{{ old('created_at') ?? $proses->created_at}}">
                                        </div>

                                        @error('created_at')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <br>

                                           <div class="card">
                                                    <div class="card-header">
                                                    <strong> Proses Lebih Lanjut :</strong>
                                                    </div>

                                            </div>

                                            {{--  --}}
                                            <br>

                                              {{--  --}}

                                       <div class="form-group row @error('proses') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Posisi Berkas</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                            <select name="proses" id="" class="form-control select2">
                                                <option selected>{{old('proses') ?? $proses->proses}}</option>
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

                                <div class="form-group row @error('ket') has-error @enderror">
                                    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Status Surat</strong> </label>
                                    <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <select name="ket" id="" class="form-control select2">
                                            <option selected>{{old('ket') ?? $proses->ket}}</option>
                                            <option value="Surat Sudah Bisa Dijemput">Surat Sudah Bisa Dijemput</option>
                                            <option value="Surat Sudah Diterima Pemohon">Surat Sudah Diterima Pemohon</option>
                                            {{-- <option value="Surat Selesai">Surat Selesai </option> --}}
                                          </select>
                                    </div>

                                    @error('ket')
                                      <span class="help-block">{{ $message }}</span>
                                    @enderror

                                </div>


                                            <div class="form-group mt-2">
                                                <input type="submit" value="Update" class="btn btn-primary">

                                            </div>




                                          </form>

                                          {{-- cetak --}}
                                          {{-- <button href="{{ route('admin.proses.cetak')}}" class="btn btn-success modal-show edit" >Cetak</button> --}}


                                      </div>



                                    </div>

                                    <div class="card-footer text-muted mt-4">
                                      Periksa Kembali Data Diatas Apakah Sudah Benar
                                    </div>
                              </div>
                        </div>

                   {{-- batas proses --}}

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



