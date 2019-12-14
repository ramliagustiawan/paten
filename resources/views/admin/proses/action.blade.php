

        <a href="{{ route('admin.proses.show', $model)}}" class="btn btn-info modal-show edit" title="{{ $model->name }}" style="font-size:14px;"><i class="fas fa-search"></i> Periksa</a>

        <a href="{{ route('admin.proses.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->name }}" style="font-size:14px;"><i class="fas fa-edit"></i> Update</a>


        @can('delete')
        <button href="{{ route('admin.proses.destroy', $model) }}" class="btn btn-danger btn-delete" id="delete" title="{{ $model->name }}" style="font-size:14px;" ><i class="fas fa-trash-alt"></i></button>
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





