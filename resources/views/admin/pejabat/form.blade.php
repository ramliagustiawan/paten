
{!! Form::model($model, [
    'route'=> $model->exists ? ['admin.pejabat.update', $model->id] : 'admin.pejabat.store',
    'method'=> $model->exists ? 'PUT' : 'POST'
]) !!}


<div class="form-group">
    <label for="" class="control-label">Nama</label>
    {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama']) !!}

</div>


<div class="form-group">
    <label for="" class="control-label">Jabatan</label>
    {!! Form::text('jabatan', null, ['class' => 'form-control', 'id' => 'jabatan']) !!}

</div>

<div class="form-group">
    <label for="" class="control-label">Ket Jabatan</label>
    {!! Form::text('ketjabatan', null, ['class' => 'form-control', 'id' => 'ketjabatan']) !!}

</div>

<div class="form-group">
    <label for="" class="control-label">NIP</label>
    {!! Form::text('nip', null, ['class' => 'form-control', 'id' => 'nip']) !!}

</div>



{!! Form::close() !!}
