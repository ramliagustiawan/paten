<a href="{{ route('admin.permission.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->nama }}"style="font-size:14px;">Edit</a>

<a href="{{ route('admin.permission.destroy', $model) }}" class="btn btn-danger btn-delete" title="{{ $model->nama }}"style="font-size:14px;" >Hapus</a>