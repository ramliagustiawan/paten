

        <a href="{{ route('admin.proses.show', $model)}}" class="btn btn-info modal-show edit" title="{{ $model->name }}" style="font-size:14px;"><i class="fas fa-search"></i> Periksa</a>

        <a href="{{ route('admin.proses.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->name }}" style="font-size:14px;"><i class="fas fa-edit"></i> Update</a>
{{--
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                Edit
              </button> --}}

        {{-- <a href="{{ route('admin.proses.destroy', $model) }}" class="btn btn-danger btn-delete" title="{{ $model->name }}" >Hapus</a> --}}


        {{-- <form action="{{ route('admin.daftar.proses', $model) }}" method="POST">
                @csrf
                <input type="submit" value="Proses" class="btn btn-success">
        </form> --}}




