

        <a href="{{ route('admin.daftar.show', $model)}}" class="btn btn-info modal-show edit" title="{{ $model->name }}">Periksa</a>

        <a href="{{ route('admin.daftar.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->name }}">Perbaiki</a>

        <a href="{{ route('admin.daftar.destroy', $model) }}" class="btn btn-danger btn-delete" title="{{ $model->name }}" >Hapus</a>


        {{-- <form action="{{ route('admin.daftar.proses', $model) }}" method="POST">
                @csrf
                <input type="submit" value="Proses" class="btn btn-success">
        </form> --}}




