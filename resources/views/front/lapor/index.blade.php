
@extends('front.templates.default')

@section('content')

<nav class="navbar navbar-dark justify-content-center  mt-5" style="background-color:lightblue">
  <a class="navbar-brand" href="#">
      <img src="{{ asset('assets/images/kota.png') }}" width="50" height="50" alt="" class="rounded mx-auto d-block">
      <h4 class="text-justify">Pelaporan Dan Pengaduan</h4>
  </a>
</nav>

<div class="container">

<div class="card">
        {{-- <div class="card-header">
                <h4 class="text-center">Pelaporan Dan Pengaduan</h4>

        </div> --}}
        <div class="card-body">
          <h6 class="card-title">Sampaikan Keluhan , Masukan dan Saran Anda Kami Menjamin Kerahasiaanya Serta Akan Menindaklanjutinya</h6>
          <p class="card-text"></p>
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>


        <div class="row justify-content-center mt-4">

            <div class="col-xs-11 col-md-5 col-lg-4">

              <div class="card" style="width: 18rem;">
                  <div class="card-header">
                    <strong>Contact</strong>
                  </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Pemerintah Kecamatan Dungingi</strong></li>
                        <li class="list-group-item">Jalan Apel II Kel. Huangobotu</li>
                        <li class="list-group-item">dungingioffice@gmail.com</li>
                        <li class="list-group-item">(0435)8526697</li>
                      </ul>
                  </div>
              </div>
              <div class="col-xs-11 col-md-5 col-lg-6 mt-1">
                  <form action="{{ route('report.store') }}" method="POST">
                    @csrf

                    <div class="form-group row @error('name') has-error @enderror">
                        <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Nama </strong></label>
                        <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Anda" value="{{ old('name') }}">
                        </div>
                        @error('name')
                        <span class="invalid-feedback" style="display:block"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>



                    <div class="form-group row @error('alamat') has-error @enderror">
                        <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Alamat</strong> </label>
                        <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" value="{{ old('alamat') }}"
                        >
                        </div>

                        @error('alamat')
                         <span class="invalid-feedback" style="display:block"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="form-group row @error('kontak') has-error @enderror">
                        <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Kontak</strong> </label>
                        <div class="col-sm-10">
                        <input type="" name="kontak" class="form-control" id="kontak" placeholder="Masukkan Nomor Telp/Hp Anda" value="{{ old('kontak') }}">
                        </div>

                        @error('kontak')
                         <span class="invalid-feedback" style="display:block"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                    <div class="form-group row @error('pesan') has-error @enderror">
                        <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Pesan</strong></label>
                        <div class="col-sm-10">
                        <textarea class="form-control" id="" name="pesan" placeholder="Tuliskan Pengaduan /Laporan Anda"  rows="4">{{ old('pesan') }}</textarea>
                        </div>

                        @error('pesan')
                       <span class="invalid-feedback" style="display:block"><strong>{{ $message }}</strong></span>
                        @enderror

                    </div>

                     {{-- recaptcha --}}
                     <div class="form-group row">
                        <div class="col-md-6 offset mt-2">
                            <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY') }}"></div>
                            @if($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback" style="display:block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Lapor" class="btn btn-primary">
                    </div>

                  </form>
              </div>
            </div>

            <div class="card-footer text-muted mt-4">
              Sistem Informasi Pelaporan Dan Pelayanan Terpadu Kecamatan
            </div>
      </div>
</div>

@endsection

@push('scripts')



        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('front.templates.partials.alerts')

           {{--  ckeditor  --}}
           <script src="{{ asset('assets/ckeditor/ckeditor.js')}}"></script>

           <script>

               CKEDITOR.replace('pesan');

           </script>


@endpush



