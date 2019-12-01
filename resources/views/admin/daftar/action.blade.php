
<div class="row">
{{-- <a href="{{ route('admin.daftar.show', $model)}}" class="btn btn-info modal-show btn-show" title="{{ $model->nama }}"style="font-size:13px;">Periksa</a> --}}

<a href="{{ route('admin.daftar.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->nama }}"style="font-size:13px;"><i class="fas fa-edit"></i> Respon</a>

<a href="{{ route('admin.daftar.destroy', $model) }}" class="btn btn-danger btn-delete" title="{{ $model->nama }}"style="font-size:13px;" ><i class="fas fa-trash-alt"></i></a>


<form action="{{ route('admin.daftar.proses', $model) }}" method="POST">
        @csrf
        <input type="submit" value="Proses" class="btn btn-success" style="font-size:13px;">
</form>

</div>


