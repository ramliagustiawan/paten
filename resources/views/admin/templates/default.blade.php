<!DOCTYPE html>
<html>
<head>
    @include('admin.templates.partials.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    @include('admin.templates.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin.templates.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
    @include('admin.templates.partials.breadcrumb')
    <!-- /.content-header -->

    <!-- Main content -->

    @yield('content')

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    @include('admin.templates.partials.footer')

  <!-- Control Sidebar -->
    @include('admin.templates.partials.controlside')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    @include('admin.templates.partials.script')

</body>
</html>
