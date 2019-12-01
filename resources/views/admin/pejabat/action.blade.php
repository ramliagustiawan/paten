<a href="{{ route('admin.pejabat.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->name }}"style="font-size:14px;"><i class="fas fa-user-edit"></i></a>

<a href="{{ route('admin.pejabat.destroy', $model) }}" class="btn btn-danger btn-delete" title="{{ $model->name }}"style="font-size:14px;" ><i class="fas fa-trash-alt"></i></a>
