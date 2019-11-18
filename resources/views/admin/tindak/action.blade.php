

        {{-- <a href="{{ route('admin.tindak.show', $model)}}" class="btn btn-info modal-show edit" title="{{ $model->name }}" style="font-size:13px;">Periksa</a> --}}

        <a href="{{ route('admin.tindak.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->name }}" style="font-size:13px;">Respon</a>

        <a href="{{ route('admin.tindak.destroy', $model) }}" class="btn btn-danger btn-delete" title="{{ $model->name }}" style="font-size:13px;">Selesai</a>


        {{-- <form action="{{ route('admin.tindak.proses', $model) }}" method="POST">
                @csrf
                <input type="submit" value="Proses" class="btn btn-success">
        </form> --}}




