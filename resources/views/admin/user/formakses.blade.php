{!! Form::model($model, [
    'route'=> $model->exists ? ['admin.user.roles', $model->id] : 'admin.user.roles',
    'method'=> $model->exists ? 'PUT' : 'POST'
]) !!}


<div class="form-group ">
    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Akses</strong> </label>
    {!! Form::select('roles_id', $role, null, ['class' => 'form-control', 'id' => 'roles_id']) !!}

    @error('roles_id')
      <span class="help-block">{{ $message }}</span>
    @enderror

</div>



{!! Form::close() !!}



