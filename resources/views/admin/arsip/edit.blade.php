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

                                    <form action="{{ route('admin.arsip.update',$arsip) }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      @method("PUT")

                                      <div class="form-group row @error('asalsurat') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong> Asal Surat </strong></label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="text" name="asalsurat" class="form-control" id="asalsurat"  placeholder="Asal Surat" value="{{ old('asalsurat') ?? $arsip->asalsurat }}" readonly >
                                        </div>
                                        @error('asalsurat')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    {{-- <div class="form-group row @error('nosurat') has-error @enderror">
                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nomor Surat Pelaporan</strong> </label>
                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                      <input type="" name="nosurat" class="form-control" id="nosurat"   placeholder="Masukkan Nomor Surat" value="{{ old('nosurat')?? $suratmasuk->nosurat }}" readonly>
                                      </div>

                                      @error('nosurat')
                                        <span class="help-block">{{ $message }}</span>
                                      @enderror

                              </div> --}}

                                    {{-- <div class="form-group row @error('tglsurat') has-error @enderror">
                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Surat</strong> </label>
                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                      <input type="" name="tglsurat" class="form-control" id="tglsurat"  placeholder="Tanggal Surat" value="{{ old('tglsurat')?? $suratmasuk->tglsurat }}" readonly>
                                      </div>

                                      @error('tglsurat')
                                        <span class="help-block">{{ $message }}</span>
                                      @enderror

                                    </div> --}}


                                    <div class="form-group row @error('tglterima') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Terima Surat</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="" name="tglterima" class="form-control"   id="tglterima" placeholder=" Tanggal Terima Surat" value="{{ old('tglterima')?? $arsip->tglterima }}" readonly>
                                        </div>

                                        @error('tglterima')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                    </div>



                                  {{-- <div class="form-group row @error('ket') has-error @enderror">
                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Perihal</strong> </label>
                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                      <input type="text" name="ket" class="form-control" id="ket"   placeholder="Masukkan Perihal Surat" value="{{ old('ket')?? $suratmasuk->ket }}" readonly>
                                      </div>

                                      @error('ket')
                                        <span class="help-block">{{ $message }}</span>
                                      @enderror

                                  </div> --}}

                                <div class="form-group row @error('perihal') has-error @enderror">
                                  <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Isi Surat</strong></label>
                                  <div class="col-sm-10">
                                  <input class="form-control" id="perihal" name="perihal" placeholder="Ringkasan Isi Surat" value="{{ old('ket')?? $arsip->perihal }}" readonly>
                                  </div>

                                  @error('perihal')
                                  <span class="help-block">{{ $message }}</span>
                                  @enderror

                              </div>

                              <div class="form-group row @error('tglarsip') has-error @enderror">
                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Selesai Tindaklanjut</strong> </label>
                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                <input type="" name="tglselesai" class="form-control" id="tglarsip" placeholder="Contoh : Gorontalo, 13 Agustus 1994" value="{{ old('tglselesai') ?? $arsip->tglselesai}}" readonly>
                                </div>

                                @error('tglarsip')
                                  <span class="help-block">{{ $message }}</span>
                                @enderror

                        </div>

                                    <br>

                                           <div class="card">
                                                    <div class="card-header">
                                                    <strong>Tindak Lanjut :</strong>
                                                    </div>

                                            </div>

                                            {{--  --}}
                                            <br>

                                              {{--  --}}

                                        <div class="form-group row @error('tglarsip') has-error @enderror">
                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Di Arsipkan</strong> </label>
                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                {{-- <input type="date" name="tglarsip" class="form-control" id="tglarsip" placeholder="Contoh : Gorontalo, 13 Agustus 1994" value="{{ old('tglarsip') }}" > --}}

                                                <input type="text"
                                                class="datepicker-here form-control"
                                                data-language='en'
                                                name="tglarsip"
                                                value="{{ old('tglarsip') }}"
                                                placeholder="Input Tanggal Arsip Surat"
                                                data-multiple-dates="3"
                                                data-multiple-dates-separator=", "
                                                data-position='bottom left'/>
                                                </div>

                                                @error('tglarsip')
                                                  <span class="help-block">{{ $message }}</span>
                                                @enderror

                                        </div>




                                        <div class="form-group row @error('ket') has-error @enderror">
                                              <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Keterangan</strong> </label>
                                              <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                              <input type="" name="ket" class="form-control" id="ket" placeholder="Keterangan Arsip Dan Lokasi Penyimpanan" value="{{ old('ket') ?? $arsip->ket}}" >
                                              </div>

                                              @error('ket')
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

@push('datepicker')

    {{-- datepicker --}}
<link rel="stylesheet" href="{{asset('assets/air-datepicker/dist/css/datepicker.css')}}">

@endpush

@push('scripts')


        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('admin.templates.partials.alerts')

        {{--  swal  --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

         {{--  ckeditor  --}}
         <script src="{{ asset('assets/ckeditor/ckeditor.js')}}"></script>

         {{-- <script>

             CKEDITOR.replace('perihal');

         </script> --}}

           {{-- datepicker --}}
           <script src="{{asset('assets/air-datepicker/dist/js/datepicker.js')}}"></script>
           <script src="{{asset('assets/air-datepicker/dist/js/i18n/datepicker.en.js')}}"></script>





@endpush



