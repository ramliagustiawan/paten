@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Layanan Non Perijinan</h4>

                    <a href="{{ route('admin.nonijin.create')}}" class="btn btn-primary pull-right modal-show" title="Tambah Pengguna">Tambah Layanan</a>

                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambah Pengguna
                    </button> --}}
                </div>
                <div class="card-body">

                    <div class="box">
                        <div class="box-header">

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          <table id="status" class="table table-bordered  table-hover" style="width:100%">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Method</th>
                               <th>Aksi</th>



                            </tr>
                            </thead>

                          </table>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->




                </div>
              </div>
      {{-- batas --}}

      </div>


      {{-- modal tambah --}}
      {{-- @include('admin.templates.partials.modal') --}}



      <!-- Modal edit -->



@endsection


@push('scripts')


        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('admin.templates.partials.alerts')

        {{--  swal  --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <script>
                $(function()
                {
                    $('#status').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:'{{ route('admin.nonijin.nonijin') }}',
                        columns: [

                            {data:'DT_RowIndex',orderable:false,searchable:false},
                            {data:'nama'},
                            {data:'controller'},
                            {data:'action'},
                        ]
                    });
                });
            </script>

            {{-- script modal tambah --}}
            {{-- <script>
                // menampilkan modal
                $('body').on('click', '.modal-show', function(event){
                    event.preventDefault();

                    var me = $(this),
                        url = me.attr('href'),
                        title = me.attr('title');

                    $('#modal-title').text(title);
                    $('#modal-btn-save').text(me.hasClass('edit') ? 'Update' : 'Create');

                    $.ajax({
                        url: url,
                        dataType: 'html',
                        success: function (response) {
                            $('#modal-body').html(response);
                        }
                    });

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

                            swal({
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


            </script> --}}


@endpush



