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
                                     
                                      <div class="form-group row @error('asalsurat') has-error @enderror">
                                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong> Asal Surat </strong></label>
                                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                          <input type="text" name="asalsurat" class="form-control" id="asalsurat"  placeholder="Asal Surat" value="{{ old('asalsurat') }}" >
                                          </div>
                                          @error('asalsurat')
                                            <span class="help-block">{{ $message }}</span>
                                          @enderror

                                      </div>

                                      <div class="form-group row @error('nosurat') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nomor Surat</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="" name="nosurat" class="form-control" id="nosurat"   placeholder="Masukkan Nomor Surat" value="{{ old('nosurat') }}" >
                                        </div>

                                        @error('nosurat')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                </div>

                                      <div class="form-group row @error('tglsurat') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Surat</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="date" name="tglsurat" class="form-control" id="tglsurat"  placeholder="Tanggal Surat" value="{{ old('tglsurat') }}">
                                        </div>

                                        @error('tglsurat')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                      </div>


                                      <div class="form-group row @error('tglterima') has-error @enderror">
                                          <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Terima Surat</strong> </label>
                                          <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                          <input type="date" name="tglterima" class="form-control"   id="tglterima" placeholder=" Tanggal Terima Surat" value="{{ old('tglterima') }}">
                                          </div>

                                          @error('tglterima')
                                            <span class="help-block">{{ $message }}</span>
                                          @enderror

                                      </div>



                                    <div class="form-group row @error('ket') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Perihal</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="text" name="ket" class="form-control" id="ket"   placeholder="Masukkan Perihal Surat" value="{{ old('ket') }}">
                                        </div>

                                        @error('ket')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                    </div>

                                  <div class="form-group row @error('perihal') has-error @enderror">
                                    <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Isi Surat</strong></label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control" id="" name="perihal" placeholder="Ringkasan Isi Surat"  rows="4">{{ old('perihal') }}</textarea>
                                    </div>
            
                                    @error('perihal')
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
            
                                </div>


                                    <br>

                                           <div class="card">
                                                    <div class="card-header">
                                                    <strong> Silahkan Upload Surat :</strong>
                                                    </div>

                                            </div>

                                            {{--  --}}
                                            <br>

                                              {{--  --}}
                                              
                                              <div class="form-group row  @error('fotosurat') has-error @enderror">
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                                                    <label class="" for="">Upload Surat</label>
                                                </div>

                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-10">
                                                    <input type="file" name="fotosurat" class="form-group">
                                                    <br>
                                                    <input type="radio" aria-label="Radio button for following text input"> <span>Lewatkan Lampiran *</span>
                                                </div>

                                                @error('fotosurat')
                                                    <span class="help-block">{{ $message }}</span>
                                                @enderror

                                        </div>




                                            


                                            <div class="form-group mt-2">
                                                <input type="submit" value="Registrasi" class="btn btn-primary">

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



