@extends('admin.templates.default')

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Data Pengguna</h4>

                    <a href="{{ route('admin.user.create')}}" class="btn btn-primary pull-right modal-show" title="Tambah Pengguna">Tambah Pengguna</a>

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
                          <table id="status" class="table table-bordered  table-hover">
                            <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Email</th>
                              <th>Password</th>
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
      @include('admin.templates.partials.modal')



      <!-- Modal edit -->



@endsection


@push('scripts')


        {{--  bs-notify  --}}
        <script src="{{ asset('assets/plugins/bs-notify.min.js')}}"></script>

         {{-- flash message --}}
         @include ('front.templates.partials.alerts')



        <script>
                $(function()
                {
                    $('#status').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:'{{ route('admin.user.data') }}',
                        columns: [

                            {data:'DT_RowIndex',orderable:false,searchable:false},
                            {data:'name'},
                            {data:'email'},
                            {data:'password'},
                            {data:'action'},
                        ]
                    });
                });
            </script>

            {{-- script modal tambah --}}
            <script>
                // menampilkan modal
                $('body').on('click', '.modal-show', function(event){
                    event.preventDefault();

                    var me = $(this),
                        url = me.attr('href'),
                        title = me.attr('title');

                    $('#modal-title').text(title);
                    $('#modal-btn-save').text('Tambah Pengguna');

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
                                    .append('<span class="help-block"><strong>' + value + '</strong></span>')
                                });
                            }
                        }
                    });
                });




            </script>


@endpush



