{!! Form::model($model, [
    'route'=> $model->exists ? ['admin.syarat.update', $model->id] : 'admin.syarat.store',
    'method'=> $model->exists ? 'PUT' : 'POST'
]) !!}


<div class="form-group">
    <label for="" class="control-label">Layanan</label>
    {!! Form::text('layanan', null, ['class' => 'form-control', 'id' => 'layanan']) !!}

</div>


<div class="form-group">
    <label for="" class="control-label">Kategori</label>
    {!! Form::text('kategori', null, ['class' => 'form-control', 'id' => 'kategori']) !!}

</div>

<div class="form-group">
    <label for="" class="control-label">Biaya</label>
    {!! Form::text('biaya', null, ['class' => 'form-control', 'id' => 'biaya']) !!}

</div>

<div class="form-group">
    <label for="" class="control-label">Waktu</label>
    {!! Form::text('waktu', null, ['class' => 'form-control', 'id' => 'waktu']) !!}

</div>

<div class="form-group">
    <label for="" class="control-label">Syarat</label>
    {!! Form::textarea('syarat', null, ['class' => 'form-control', 'id' => 'syarat']) !!}

</div>

{!! Form::close() !!}
