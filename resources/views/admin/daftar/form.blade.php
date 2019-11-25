{!! Form::model($model, [
    'route'=> $model->exists ? ['admin.daftar.update', $model->id] : 'admin.daftar.store',
    'method'=> $model->exists ? 'PUT' : 'POST'
]) !!}


<div class="form-group">
    <label for="" class="control-label">Nama</label>
    {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama']) !!}

    @error('nama')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <label for="" class="control-label">NIK</label>
    {!! Form::text('nik', null, ['class' => 'form-control', 'id' => 'nik']) !!}

    @error('nik')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>


<div class="form-group">
    <label for="" class="control-label">Alamat</label>
    {!! Form::text('alamat', null, ['class' => 'form-control', 'id' => 'alamat']) !!}

    @error('alamat')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group ">
    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Kelurahan</strong> </label>
    {!! Form::select('kelurahan', ['Huangobotu'=>'Huangobotu','Libuo'=>'Libuo','Tuladenggi'=>'Tuladenggi','Tomulabutao'=>'Tomulabutao','Tomulabutao Selatan'=>'Tomulabutao Selatan'], null, ['class' => 'form-control', 'id' => 'kelurahan']) !!}

    @error('kelurahan')
      <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <label for="" class="control-label">Kontak</label>
    {!! Form::text('kontak', null, ['class' => 'form-control', 'id' => 'kontak']) !!}

    @error('kontak')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>


<div class="form-group ">
    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Layanan</strong> </label>
    {!! Form::select('layanan_id', $layanan, null, ['class' => 'form-control', 'id' => 'layanan_id']) !!}

    @error('layanan_id')
      <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <label for="" class="control-label">Tempat Lahir</label>
    {!! Form::text('tempat', null, ['class' => 'form-control', 'id' => 'tempat']) !!}

    @error('tempat')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <label for="" class="control-label">Tanggal Lahir</label>
    {!! Form::date('tgllhr', null, ['class' => 'form-control', 'id' => 'tgllhr']) !!}

    @error('tgllhr')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group ">
    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Jenis Kelamin</strong> </label>
    {!! Form::select('jk', ['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'], null, ['class' => 'form-control', 'id' => 'jk']) !!}

    @error('jk')
      <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <label for="" class="control-label">Pekerjaan</label>
    {!! Form::text('pekerjaan', null, ['class' => 'form-control', 'id' => 'pekerjaan']) !!}

    @error('pekerjaan')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <label for="" class="control-label">Keterangan</label>
    {!! Form::text('keterangan', null, ['class' => 'form-control', 'id' => 'keterangan']) !!}

    @error('keterangan')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>

{{-- <div class="form-group">
    <label for="" class="control-label">KTP</label>
    {!! Form::file('fotoktp') !!}

    @error('fotoktp')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <label for="" class="control-label">PBB</label>
    {!! Form::file('fotopbb') !!}

    @error('fotopbb')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div> --}}




{!! Form::close() !!}



