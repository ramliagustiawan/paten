
@extends('front.templates.default')

@section('content')

<div class="container mt-5">

        <div class="">
                <div class="card-header">
                        <h4 class="text-center">Pelayanan Online Kecamatan</h4>

                </div>

                <div class="mt-3">
                        <h4 class="">1. Pelayanan Perijinan</h4>

                </div>

        @foreach ($ijin as $item)

                <div class="card mt-3 text-center" style="width: 14rem;">
                    <div class="card-body">
                            <img src="{{asset('assets/images/surat5.png')}}" class="card-img-top" alt="..."  >
                    <br>
                    <h6 class="card-title"><strong>{{ $item->nama }}</strong></h6>

                    {{-- <p class="card-text">Ijin Usaha Mikro Kecil</p>      --}}
                    </div>

                    <div class="card-footer">
                        <a href="{{ $item->controller }}" class="btn btn-success">Ajukan</a>
                    </div>
                </div>

        @endforeach


        </div>
                    <hr>

                <div class="mt-4">
                    <h4 class="">2. Pelayanan Non Perijinan</h4>
                </div>

                <div class="row">


                    @foreach ($nonijin as $noni)

                        <div class="col-xs-2 col-sm-6 col-md-4 col-lg-3">
                            <div class="card mt-3 text-center" style="width: 14rem;">
                             <div class="card-body">
                                  <img src="{{asset('assets/images/surat5.png')}}" class="card-img-top" alt="...">
                                  <br>
                                  <h6 class="card-title"><strong>{{ $noni->nama }}</strong></h6>
                             </div>
                             <div class="card-footer">
                                  <a href="{{ $noni->controller }}" class="btn btn-success">Ajukan</a>
                             </div>
                            </div>
                          </div>

                    @endforeach


        </div>
</div>

@endsection

@push('scripts')



        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('front.templates.partials.alerts')



@endpush



