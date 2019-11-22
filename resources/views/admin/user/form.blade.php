{!! Form::model($model, [
    'route'=> $model->exists ? ['admin.user.update', $model->id] : 'admin.user.store',
    'method'=> $model->exists ? 'PUT' : 'POST'
]) !!}


<div class="form-group">
    <label for="" class="control-label">Name</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}

    @error('name')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>


<div class="form-group">
    <label for="" class="control-label">Email</label>
    {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}

    @error('email')
    <span class="help-block">{{ $message }}</span>
    @enderror

</div>


<div class="form-group ">
    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Akses</strong> </label>
    {!! Form::select('roles_id', $role, null, ['class' => 'form-control', 'id' => 'roles_id']) !!}

    @error('roles_id')
      <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
        <label for="" class="control-label">Password</label>
        {!! Form::Password('password', null, ['class' => 'form-control', 'id' => 'password']) !!}

</div>


{!! Form::close() !!}



