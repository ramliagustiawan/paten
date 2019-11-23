
<a href="{{ route('admin.user.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->name }} "style="font-size:14px;">Edit</a>

{{-- <a href="{{ route('admin.user.roles', $model)}}" class="btn btn-info modal-show editakses" title="{{ $model->name }} "style="font-size:14px;">Edit Akses</a> --}}

<a href="{{ route('admin.user.destroy', $model) }}" class="btn btn-danger btn-delete" title="{{ $model->name }}"style="font-size:14px;" >Hapus</a>




