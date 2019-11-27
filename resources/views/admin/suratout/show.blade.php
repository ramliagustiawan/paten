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
                                    <h4 class="text-center">Register Surat Tujuan {{ $suratout->tujuansurat }}</h4>

                                </div>
                                <div class="card-body">
                                  <h6 class="card-title"></h6>
                                  <p class="card-text"></p>
                                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                </div>


                                <div class="row justify-content-center mt-4">

                                  <div class="col-xs-10 col-md-10 col-lg-10 mt-1">

                                    <form >
                                      @csrf

                                      <div class="card">
                                        <div class="card-header">
                                        <strong>1. Detail Surat :</strong>
                                        </div>

                                        </div>


                                      <div class="form-group row @error('nosurat') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong> Nomor Surat </strong></label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="text" name="nosurat" class="form-control" id="nosurat"  placeholder="nomor Surat" value="{{ old('nosurat') ?? $suratout->nosurat }}" readonly >
                                        </div>
                                        @error('nosurat')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                    </div>



                                    <div class="form-group row @error('tglsurat') has-error @enderror">
                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Surat</strong> </label>
                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                      <input type="" name="tglsurat" class="form-control" id="tglsurat"  placeholder="Tanggal Surat" value="{{ old('tglsurat')?? $suratout->tglsurat }}" readonly>
                                      </div>

                                      @error('tglsurat')
                                        <span class="help-block">{{ $message }}</span>
                                      @enderror

                                    </div>


                                  <div class="form-group row @error('perihal') has-error @enderror">
                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Perihal</strong> </label>
                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                      <input type="text" name="perihal" class="form-control" id="perihal"   placeholder="Masukkan Perihal Surat" value="{{ old('perihal')?? $suratout->perihal }}" readonly>
                                      </div>

                                      @error('perihal')
                                        <span class="help-block">{{ $message }}</span>
                                      @enderror

                                  </div>

                                <div class="form-group row @error('isisingkat') has-error @enderror">
                                  <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Isi Surat</strong></label>
                                  <div class="col-sm-10">
                                  <textarea class="form-control" id="isisingkat" name="isisingkat" placeholder="Ringkasan Isi Surat"  rows="4" readonly>{{ old('isisingkat')?? $suratout->isisingkat }}</textarea>
                                  </div>

                                  @error('isisingkat')
                                  <span class="help-block">{{ $message }}</span>
                                  @enderror

                              </div>

                              <div class="form-group row @error('tujuansurat') has-error @enderror">
                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tujuan</strong> </label>
                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" name="tujuansurat" class="form-control" id="tujuansurat"   placeholder="Masukkan tujuansurat Surat" value="{{ old('tujuansurat')?? $suratout->tujuansurat }}" readonly>
                                </div>

                                @error('tujuansurat')
                                  <span class="help-block">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="form-group row @error('pengirim') has-error @enderror">
                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pengirim</strong> </label>
                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                <input type="text" name="pengirim" class="form-control" id="pengirim"   placeholder="Masukkan pengirim Surat" value="{{ old('pengirim')?? $suratout->pengirim }}" readonly>
                                </div>

                                @error('pengirim')
                                  <span class="help-block">{{ $message }}</span>
                                @enderror

                            </div>

                                    <br>

                                           <div class="card">
                                                    <div class="card-header">
                                                    <strong>2. Fisik Surat :</strong>
                                                    </div>

                                            </div>

                                            <div class="form-group row @error('fotosurat') has-error @enderror">
                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong></strong> </label>
                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                    <img src="{{ url($suratout->getsurat()) }}" height="450px">
                                                </div>

                                                @error('fotosurat')
                                                  <span class="help-block">{{ $message }}</span>
                                                @enderror

                                            </div>


                                            {{--  --}}
                                            <br>

                                              {{--  --}}

                                              <div class="card">
                                                <div class="card-header">
                                                <strong>3. Tindak Lanjut :</strong>
                                                </div>

                                        </div>

                                        <div class="form-group row @error('tglkirim') has-error @enderror">
                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Kirim</strong> </label>
                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                            <input type="" name="tglkirim" class="form-control" id="tglkirim"  placeholder="Tanggal Surat" value="{{ old('tglkirim')?? $suratout->tglkirim }}" readonly>
                                            </div>

                                            @error('tglkirim')
                                              <span class="help-block">{{ $message }}</span>
                                            @enderror

                                          </div>

                                          <div class="form-group row @error('petugas') has-error @enderror">
                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Petugas</strong> </label>
                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                            <input type="" name="petugas" class="form-control" id="petugas" placeholder="petugas" value="{{ old('petugas')?? $suratout->petugas }}" readonly>
                                            </div>

                                            @error('petugas')
                                              <span class="help-block">{{ $message }}</span>
                                            @enderror

                                          </div>


                                          {{-- <div class="form-group row @error('pejabat_id') has-error @enderror">
                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pejabat Yang Menindaklanjuti</strong> </label>
                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                <select name="pejabat_id" id="" class="form-control select2" readonly>

                                                    @foreach ($pejabat as $item)
                                                    <option
                                                        value="{{ $item->id }}"
                                                        @if($item->id == $suratout->pejabat_id)
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

                                        </div> --}}

                                        <div class="form-group row @error('penerima') has-error @enderror">
                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Penerima</strong> </label>
                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                            <input type="" name="penerima" class="form-control" id="penerima" placeholder="penerima" value="{{ old('penerima')?? $suratout->penerima }}" readonly>
                                            </div>

                                            @error('penerima')
                                              <span class="help-block">{{ $message }}</span>
                                            @enderror

                                          </div>



                                            <div class="form-group row @error('ket') has-error @enderror">
                                              <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Keterangan</strong> </label>
                                              <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                              <input type="" name="ket" class="form-control" id="ket" placeholder="ket" value="{{ old('ket')?? $suratout->ket }}" readonly>
                                              </div>

                                              @error('ket')
                                                <span class="help-block">{{ $message }}</span>
                                              @enderror

                                            </div>

                                            {{--  <div class="form-group mt-2">
                                                <input type="submit" value="Tindak Lanjut" class="btn btn-primary">

                                            </div>  --}}
                                          </form>

                                          {{-- cetak --}}
                                          {{-- <button href="{{ route('admin.tindak.cetak')}}" class="btn btn-success modal-show edit" >Cetak</button> --}}

                                      </div>
                                  </div>

                                    {{--  <div class="card-footer text-muted mt-4">
                                      Periksa Kembali Data Diatas Apakah Sudah Benar
                                    </div>  --}}
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

          {{--  ckeditor  --}}
          <script src="{{ asset('assets/ckeditor/ckeditor.js')}}"></script>

        <script>

                CKEDITOR.replace('isisingkat');

        </script>

@endpush



