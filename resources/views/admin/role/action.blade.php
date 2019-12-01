<a href="{{ route('admin.role.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->nama }}"style="font-size:14px;"><i class="fas fa-user-edit"></i></a>

<a href="{{ route('admin.role.destroy', $model) }}" class="btn btn-danger btn-delete" title="{{ $model->nama }}"style="font-size:14px;" ><i class="fas fa-trash-alt"></i></a>
