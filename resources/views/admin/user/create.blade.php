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

                               {{-- iumk --}}

                               <div class="container">

                                    <div class="card">
                                            <div class="card-header">
                                                    <h4 class="text-center">Manajemen User</h4>

                                            </div>

                                            <div class="row justify-content-center mt-4">


                                                  <div class="col-xs-10 col-md-10 col-lg-10 mt-1">

                                                      <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf


                                                        <div class="form-group row @error('name') has-error @enderror">
                                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Nama </strong></label>
                                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                            <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama User" value="{{ old('name') }}" >
                                                            </div>
                                                            @error('name')
                                                              <span class="help-block">{{ $message }}</span>
                                                            @enderror

                                                        </div>

                                                        <div class="form-group row @error('email') has-error @enderror">
                                                                <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Email</strong> </label>
                                                                <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                <input type="" name="email" class="form-control" id="email" placeholder="Masukkan Email Anda" value="{{ old('email') }}" >
                                                                </div>

                                                                @error('email')
                                                                  <span class="help-block">{{ $message }}</span>
                                                                @enderror

                                                        </div>


                                                       {{--  --}}

                                                        <div class="form-group row @error('roles_id') has-error @enderror">
                                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Akses</strong> </label>
                                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                                <select name="roles_id" id="" class="form-control select2">

                                                                    @foreach ($role as $item)
                                                                    <option
                                                                        value="{{ $item->id }}"

                                                                        @if($item->id == $model->roles_id)
                                                                            selected
                                                                        @endif
                                                                    >
                                                                        {{$item->name}}
                                                                    </option>

                                                                    @endforeach
                                                                  </select>
                                                            </div>

                                                            @error('roles_id')
                                                              <span class="help-block">{{ $message }}</span>
                                                            @enderror

                                                        </div>

                                                        {{--  --}}


                                                        <div class="form-group row @error('password') has-error @enderror">
                                                            <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Password</strong> </label>
                                                            <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10">
                                                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Anda" value="{{ old('password') }}">
                                                            </div>

                                                            @error('password')
                                                              <span class="help-block">{{ $message }}</span>
                                                            @enderror

                                                        </div>




                                                        <div class="form-group mt-2">
                                                            <input type="submit" value="Tambah User" class="btn btn-primary">
                                                        </div>

                                                      </form>
                                                  </div>
                                                </div>

                                                <div class="card-footer text-muted mt-4">
                                                  Periksa Kembali Data Diatas Apakah Sudah Benar
                                                </div>
                                          </div>
                                    </div>

                               {{-- batas iumk --}}

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



