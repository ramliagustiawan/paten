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
                                    <h4 class="text-center">Register Surat Dari {{ $suratmasuk->asalsurat }}</h4>

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


                                      <div class="form-group row @error('asalsurat') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong> Asal Surat </strong></label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="text" name="asalsurat" class="form-control" id="asalsurat"  placeholder="Asal Surat" value="{{ old('asalsurat') ?? $suratmasuk->asalsurat }}" readonly >
                                        </div>
                                        @error('asalsurat')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="form-group row @error('nosurat') has-error @enderror">
                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nomor Surat Pelaporan</strong> </label>
                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                      <input type="" name="nosurat" class="form-control" id="nosurat"   placeholder="Masukkan Nomor Surat" value="{{ old('nosurat')?? $suratmasuk->nosurat }}" readonly>
                                      </div>

                                      @error('nosurat')
                                        <span class="help-block">{{ $message }}</span>
                                      @enderror

                              </div>

                                    <div class="form-group row @error('tglsurat') has-error @enderror">
                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Surat</strong> </label>
                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                      <input type="" name="tglsurat" class="form-control" id="tglsurat"  placeholder="Tanggal Surat" value="{{ old('tglsurat')?? $suratmasuk->tglsurat }}" readonly>
                                      </div>

                                      @error('tglsurat')
                                        <span class="help-block">{{ $message }}</span>
                                      @enderror

                                    </div>


                                    <div class="form-group row @error('tglterima') has-error @enderror">
                                        <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Tanggal Terima Surat</strong> </label>
                                        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                        <input type="" name="tglterima" class="form-control"   id="tglterima" placeholder=" Tanggal Terima Surat" value="{{ old('tglterima')?? $suratmasuk->tglterima }}" readonly>
                                        </div>

                                        @error('tglterima')
                                          <span class="help-block">{{ $message }}</span>
                                        @enderror

                                    </div>



                                  <div class="form-group row @error('ket') has-error @enderror">
                                      <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Perihal</strong> </label>
                                      <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                      <input type="text" name="ket" class="form-control" id="ket"   placeholder="Masukkan Perihal Surat" value="{{ old('ket')?? $suratmasuk->ket }}" readonly>
                                      </div>

                                      @error('ket')
                                        <span class="help-block">{{ $message }}</span>
                                      @enderror

                                  </div>

                                <div class="form-group row @error('perihal') has-error @enderror">
                                  <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Isi Surat</strong></label>
                                  <div class="col-sm-10">
                                  <textarea class="form-control" id="" name="perihal" placeholder="Ringkasan Isi Surat"  rows="4" readonly>{{ old('perihal')?? $suratmasuk->perihal }}</textarea>
                                  </div>

                                  @error('perihal')
                                  <span class="help-block">{{ $message }}</span>
                                  @enderror

                              </div>

                                    <br>

                                           <div class="card">
                                                    <div class="card-header">
                                                    <strong>2. Fisik Surat :</strong>
                                                    </div>

                                            </div>

                                            <div class="form-group row @error('ket') has-error @enderror">
                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong></strong> </label>
                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                    <img src="{{ url($suratmasuk->getsurat()) }}" height="450px">
                                                </div>

                                                @error('ket')
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


                                            <div class="form-group row @error('disposisicamat') has-error @enderror">
                                                <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Disposisi Camat</strong></label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" id="" name="disposisicamat" placeholder="Disposisi Camat"  rows="4" readonly>{{ old('disposisicamat')?? $suratmasuk->disposisicamat }}</textarea>
                                                </div>

                                                @error('disposisicamat')
                                                <span class="help-block">{{ $message }}</span>
                                                @enderror

                                            </div>

                                            <div class="form-group row @error('disposisisek') has-error @enderror">
                                              <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Sekretaris</strong></label>
                                              <div class="col-sm-10">
                                              <textarea class="form-control" id="" name="disposisisek" placeholder="Disposisi Sekcam"  rows="4" readonly>{{ old('disposisisek')?? $suratmasuk->disposisisek }}</textarea>
                                              </div>

                                              @error('disposisisek')
                                              <span class="help-block">{{ $message }}</span>
                                              @enderror

                                          </div>

                                          <div class="form-group row @error('pejabat_id') has-error @enderror">
                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pejabat Yang Menindaklanjuti</strong> </label>
                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                <select name="pejabat_id" id="" class="form-control select2" readonly>

                                                    @foreach ($pejabat as $item)
                                                    <option
                                                        value="{{ $item->id }}"
                                                        @if($item->id == $suratmasuk->pejabat_id)
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

                                        <div class="form-group row @error('tindaklanjut') has-error @enderror">
                                          <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Tindak Lanjut</strong></label>
                                          <div class="col-sm-10">
                                          <textarea class="form-control" id="" name="tindaklanjut" placeholder="Tindak Lanjut Surat"  rows="4" readonly>{{ old('tindaklanjut')?? $suratmasuk->tindaklanjut }}</textarea>
                                          </div>

                                          @error('tindaklanjut')
                                          <span class="help-block">{{ $message }}</span>
                                          @enderror

                                      </div>


                                            <div class="form-group row @error('hasil') has-error @enderror">
                                              <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Keterangan</strong> </label>
                                              <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                              <input type="" name="hasil" class="form-control" id="hasil" placeholder="Hasil" value="{{ old('hasil')?? $suratmasuk->hasil }}" readonly>
                                              </div>

                                              @error('hasil')
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



@endpush



