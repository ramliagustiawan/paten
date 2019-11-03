<!-- Modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengguna</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              {{-- isi --}}

              <form action="{{ route('admin.user.store') }}" method="POST">
                    @csrf

                    <div class="form-group row @error('name') has-error @enderror">
                        <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Nama </strong></label>
                        <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Anda" value="{{ old('name') }}" required>
                        </div>
                        @error('name')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>



                    <div class="form-group row @error('email') has-error @enderror">
                        <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Email</strong> </label>
                        <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email Anda" value="{{ old('email') }}"
                        required>
                        </div>

                        @error('alamat')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group row @error('password') has-error @enderror">
                        <label for="" class="col-sm-2 col-md-6 col-lg-2 col-form-label"><strong>Password</strong> </label>
                        <div class="col-sm-10">
                        <input type="" name="password" class="form-control" id="password" placeholder="Masukkan Password" value="{{ old('password') }}" required>
                        </div>

                        @error('kontak')
                          <span class="help-block">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" value="Kirim" class="btn btn-primary">Tambah</button>
                          </div>

                  </form>


              {{-- akhir isi --}}

            </div>

          </div>
        </div>
      </div>
{{-- batas modal --}}