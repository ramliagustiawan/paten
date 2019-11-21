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


<div class="form-group ">
    <label for="" class="col-xs-6 col-sm-2 col-md-2 col-lg-2 col-form-label"><strong>Akses</strong> </label>
    @foreach ($role as $item)
    {!! Form::select('role',$item->name, null, ['class' => 'form-control', 'id' => 'role']) !!}
    @endforeach


        {{-- <select name="role" id="" class="form-control select2">

            @foreach ($role as $item)
            <option
                value="{{ $item->id }}"
                @if($item->id == $user->role_id)
                    selected
                @endif
            >
                {{$item->name}}
            </option>

            @endforeach
          </select> --}}


    @error('role')
      <span class="help-block">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
        <label for="" class="control-label">Password</label>
        {!! Form::Password('password', null, ['class' => 'form-control', 'id' => 'password']) !!}

</div>


{!! Form::close() !!}
