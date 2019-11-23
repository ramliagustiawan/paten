{!! Form::model($model, [
    'route'=> $model->exists ? ['admin.permission.update', $model->id] : 'admin.permission.store',
    'method'=> $model->exists ? 'PUT' : 'POST'
]) !!}


<div class="form-group">
    <label for="" class="control-label">Permission</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}

</div>


<div class="form-group">
    <label for="" class="control-label">Guard Name</label>
    {!! Form::text('guard_name', null, ['class' => 'form-control', 'id' => 'guard_name']) !!}

</div>

{!! Form::close() !!}
