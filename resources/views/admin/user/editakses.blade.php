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
                                <div class="col-md-6">
                                    <form action="{{ route('users.set_role', $user->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                    @card
                                        @slot('title')
                                        @endslot

                                        @if (session('success'))
                                            @alert(['type' => 'success'])
                                                {{ session('success') }}
                                            @endalert
                                        @endif

                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <td>:</td>
                                                        <td>{{ $user->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email</th>
                                                        <td>:</td>
                                                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Role</th>
                                                        <td>:</td>
                                                        <td>
                                                            @foreach ($roles as $row)
                                                            <input type="radio" name="role"
                                                                {{ $user->hasRole($row) ? 'checked':'' }}
                                                                value="{{ $row }}"> {{  $row }} <br>
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        @slot('footer')
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm float-right">
                                                    Set Role
                                                </button>
                                            </div>
                                        @endslot
                                    @endcard
                                    </form>
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



