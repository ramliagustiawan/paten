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


{{-- batas --}}
<div class="form-group ">
    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Persyaratan</strong> </label>
    {!! Form::select('syarat', ['Berkas Lengkap'=>'Berkas Lengkap','Berkas Tidak Lengkap'=>'Berkas Tidak Lengkap'], null, ['class' => 'form-control', 'id' => 'syarat']) !!}

    @error('syarat')
      <span class="help-block">{{ $message }}</span>
    @enderror

</div>
{{-- batas bawah --}}




<div class="form-group">
    <label for="" class="control-label">Nomor Surat</label>
    {!! Form::text('nosurat', null, ['class' => 'form-control', 'id' => 'nosurat']) !!}

    @error('nosurat')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    <label for="" class="control-label">Tanggal Surat</label>
    {!! Form::date('tglsurat', null, ['class' => 'form-control', 'id' => 'tglsurat']) !!}

    @error('tglsurat')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group ">
    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Pejabat</strong> </label>
    {!! Form::select('pejabat_id', $pejabat, null, ['class' => 'form-control', 'id' => 'layanan_id']) !!}

    @error('layanan_id')
      <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group ">
    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Posisi Berkas</strong> </label>
    {!! Form::select('proses', ['Proses Verifikasi'=>'Proses Verifikasi','Proses Penandatanganan'=>'Proses Penandatanganan','Menunggu Pejabat Yang Menandatangani'=>'Menunggu Pejabat Yang Menandatangani'], null, ['class' => 'form-control', 'id' => 'proses']) !!}

    @error('proses')
      <span class="help-block">{{ $message }}</span>
    @enderror

</div>






{!! Form::close() !!}



