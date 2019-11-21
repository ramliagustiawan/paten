{!! Form::model($model, [
    'route'=> $model->exists ? ['admin.role.update', $model->id] : 'admin.role.store',
    'method'=> $model->exists ? 'PUT' : 'POST'
]) !!}


<div class="form-group">
    <label for="" class="control-label">Role</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}

</div>


<div class="form-group">
    <label for="" class="control-label">Guard Name</label>
    {!! Form::text('guard_name', null, ['class' => 'form-control', 'id' => 'guard_name']) !!}

</div>

{!! Form::close() !!}
