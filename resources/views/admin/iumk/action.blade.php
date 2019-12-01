
{{-- <div class="row"> --}}

    <a href="{{ route('admin.iumk.show', $model)}}" class="btn btn-info modal-show edit" title="{{ $model->name }}" style="font-size:13px;"><i class="fas fa-search"></i></a>

    <a href="{{ route('admin.iumk.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->name }}" style="font-size:13px;"><i class="fas fa-edit"></i></a>

    <a href="{{ route('admin.iumk.cetak', $model)}}" class="btn btn-primary modal-show edit" title="{{ $model->name }}" style="font-size:13px;"><i class="fas fa-print"></i> Cetak</a>



    <form action="{{ route('admin.iumk.proses', $model) }}" method="POST">
        @csrf
        <input type="submit" value="Selesai"  class="btn btn-success btn-proses" id="proses" style="font-size:13px;">
    </form>

    @can('delete')
    <button href="{{ route('admin.iumk.destroy', $model) }}" class="btn btn-danger btn-delete" id="delete" title="{{ $model->name }}" style="font-size:14px;" ><i class="fas fa-trash-alt"></i></button>
    @endcan

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script>
        $('button#delete') .on('click', function(e){
            e.preventDefault();

            var href = $(this).attr('href');

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Setelah Dihapus data tidak dapat dikembalikan",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Data Dihapus Saja!'
                }).then((result) => {
                if (result.value) {

            document.getElementById('deleteForm').action=href;
            document.getElementById('deleteForm').submit();

                    Swal.fire(
                    'Hapus!',
                    'Permohonan Berhasil Dihapus.',
                    'success'
                    )
                }
                })


        })

    </script>



