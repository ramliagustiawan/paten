
{{-- <div class="row"> --}}

    <a href="{{ route('admin.suratin.show', $model)}}" class="btn btn-info modal-show edit" title="{{ $model->name }}" style="font-size:13px;">Detail</a>

    <a href="{{ route('admin.suratin.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->name }}" style="font-size:13px;">Proses</a>


    <form action="{{ route('admin.suratin.arsip', $model) }}" method="POST">
        @csrf
        <input type="submit" value="Arsipkan" class="btn btn-success" style="font-size:13px;">
    </form>


    <button href="{{ route('admin.suratin.destroy', $model) }}" class="btn btn-danger btn-delete" id="delete" title="{{ $model->asalsurat }}" style="font-size:14px;" >Hapus</button>


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

