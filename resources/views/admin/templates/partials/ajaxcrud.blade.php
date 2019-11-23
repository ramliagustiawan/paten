  {{-- script modal tambah dan edit  --}}
  <script>
    // menampilkan modal
    $('body').on('click', '.modal-show', function(event){
        event.preventDefault();

        // mengambil nilai selctor this elemnet yg kita pilih
        var me = $(this),
            url = me.attr('href'),
            title = me.attr('title');

        // kemudian mengganti nilai
        $('#modal-title').text(title);
        $('#modal-btn-save').text(me.hasClass('edit') ? 'Update' : me.hasClass('editakses') ? 'Ubah Akses' : 'Create');

        // proses dengan ajax
        $.ajax({
            url: url,
            dataType: 'html',
            success: function (response) {
                $('#modal-body').html(response);
            }
        });

        // menampilkan modal
        $('#modal').modal('show');
    });

    // fungsi validasi
    $('#modal-btn-save').click(function(event){
        event.preventDefault();

        var form = $('#modal-body form'),
            url = form.attr('action'),
            method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';


        form.find('.help-block').remove();
        form.find('.form-group').removeClass('has-error')

        $.ajax({
            url : url,
            method : method,
            data : form.serialize(),
            success: function(response) {

                // apabila data berhasil validasi lgsg simpan

                form.trigger('reset');
                $('#modal').modal('hide');
                $('#status').DataTable().ajax.reload();

                swal.fire({
                    type : 'success',
                    title : 'Success!',
                    text: 'Data has been saved'
                });

            },
            // apabila error
            error : function (xhr) {
                var res = xhr.responseJSON;

                if($.isEmptyObject(res) == false){
                    $.each(res.errors, function (key, value){
                        $('#' + key)
                        .closest('.form-group')
                        .addClass('has-error')
                        .append('<span class="help-block">' + value + '</span>')
                    });
                }
            }
        });
    });


    // delete
    $('body').on('click', '.btn-delete', function(event){
    event.preventDefault();

         var me = $(this),
            url = me.attr('href'),
            title = me.attr('title'),
            csrf_token = $('meta[name="csrf-token"]').attr('content');

        Swal.fire({
            title: 'Apakah Anda Yakin Menghapus Data ' + title + ' ?',
            text: "Setelah Dihapus data tidak dapat dikembalikan",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Data Dihapus Saja!'
            }).then((result) => {

                if (result.value) {
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: {
                            '_method' : 'DELETE',
                            '_token'  : csrf_token
                        },

                            success: function (response) {
                                $('#status').DataTable().ajax.reload();

                                Swal.fire({
                                        title:'Hapus!',
                                        text:'Data Berhasil Dihapus.',
                                        type:'success'
                                    });
                            },
                            error: function (xhr) {
                                    Swal.fire({
                                            title:'Oooppss!',
                                            text:'Something Wrong',
                                            type:'error'
                                    });
                                }

                    })
                }


            });
    });


</script>
