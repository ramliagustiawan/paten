

        {{-- <a href="{{ route('admin.tindak.show', $model)}}" class="btn btn-info modal-show edit" title="{{ $model->name }}" style="font-size:13px;">Periksa</a> --}}

        <a href="{{ route('admin.tindak.edit', $model)}}" class="btn btn-warning modal-show edit" title="{{ $model->name }}" style="font-size:13px;">Respon</a>

        <button href="{{ route('admin.tindak.destroy', $model) }}"
        class="btn btn-danger" id="delete" style="font-size:13px;">Hapus</button>


        {{-- <form action="{{ route('admin.tindak.proses', $model) }}" method="POST">
                @csrf
                <input type="submit" value="Proses" class="btn btn-success">
        </form> --}}

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
                        'Data Berhasil Dihapus.',
                        'success'
                        )
                    }
                    })


            })

        </script>



