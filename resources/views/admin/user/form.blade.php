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

       

      </form>


  {{-- akhir isi --}}