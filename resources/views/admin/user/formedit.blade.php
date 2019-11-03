{!! Form::model($model, [
    'route'=> $model->exists ? ['admin.user.update', $model->id] : 'admin.user.store',
    'method'=> $model->exists ? 'PUT' : 'POST'
]) !!}


<div class="form-group">
    <label for="" class="control-label">Name</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}

</div>


<div class="form-group">
    <label for="" class="control-label">Email</label>
    {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}

</div>

<div class="form-group">
        <label for="" class="control-label">Password</label>
        {!! Form::Password('password', null, ['class' => 'form-control', 'id' => 'password']) !!}

</div>

{!! Form::close() !!}
