
{!! Form::model($model, [
    'route'=> $model->exists ? ['admin.ijin.update', $model->id] : 'admin.ijin.store',
    'method'=> $model->exists ? 'PUT' : 'POST'
]) !!}


<div class="form-group">
    <label for="" class="control-label">Layanan</label>
    {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama']) !!}

</div>


<div class="form-group">
    <label for="" class="control-label">Method</label>
    {!! Form::text('controller', null, ['class' => 'form-control', 'id' => 'controller']) !!}

</div>

{!! Form::close() !!}
