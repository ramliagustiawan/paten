@extends('admin.templates.default')

{{-- @section('css')
    <style type="text/css">
        .tab-pane{
            height:150px;
            overflow-y:scroll;
        }
    </style>
@endsection --}}

@section('content')

        <div class="card mt-1">

                <div class="card-header">
                    <h4 class="box-title">Manajemen Hak Akses</h4>

                        <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    {{-- <div class="col-md-4">

                                            @slot('title')
                                            <h4 class="card-title">Add New Permission</h4>
                                            @endslot
                ​
                                            <form action="{{ route('admin.user.add_permission') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" required>
                                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-primary btn-sm">
                                                        Add New
                                                    </button>
                                                </div>
                                            </form>
                                            @slot('footer')
                ​
                                            @endslot

                                    </div> --}}
                ​
                                    <div class="col-md-6">

                                            @slot('title')
                                            Set Permission to Role
                                            @endslot
                ​


                                            <form action="" method="GET">
                                                <div class="form-group">
                                                    <label for="">Roles And Permissions</label>
                                                    <div class="input-group">
                                                        <select name="role" class="form-control">
                                                            @foreach ($roles as $value)
                                                                <option value="{{ $value }}" {{ request()->get('role') == $value ? 'selected':'' }}>{{ $value }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-danger">Check!</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </form>

                                            {{-- jika $permission tidak bernilai kosong --}}
                                            @if (!empty($permissions))
                                                <form action="{{ route('admin.user.setRolePermission', request()->get('role')) }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <div class="form-group">
                                                        <div class="nav-tabs-custom">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active">
                                                                    <a href="#tab_1" data-toggle="tab">Permissions</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="tab_1">
                                                                    @php $no = 1; @endphp
                                                                    @foreach ($permissions as $key => $row)
                                                                        <input type="checkbox"
                                                                            name="permission[]"
                                                                            class="minimal-red"
                                                                            value="{{ $row }}"
                                                                            {{--  CHECK, JIKA PERMISSION TERSEBUT SUDAH DI SET, MAKA CHECKED --}}
                                                                            {{ in_array($row, $hasPermission) ? 'checked':'' }}
                                                                            > {{ $row }} <br>
                                                                        @if ($no++%4 == 0)
                                                                        <br>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="pull-right">
                                                        <button class="btn btn-primary btn-sm">
                                                            <i class="fa fa-send"></i> Set Permission
                                                        </button>
                                                    </div>
                                                </form>
                                            @endif
                                            @slot('footer')

                                            @endslot

                                    </div>
                                </div>
                            </div>
                        </section>
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

        {{-- <script>
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
                            {data:'roles_id'},
                            // {data:'password'},
                            {data:'action'},
                        ]
                    });
                });
            </script> --}}

         {{-- modal tambah --}}
      {{-- @include('admin.templates.partials.ajaxcrud') --}}


@endpush



