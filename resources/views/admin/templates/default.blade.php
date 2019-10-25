<!DOCTYPE html>
<html>
<head>
    @include('admin.templates.partials.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">

            @include('admin.templates.partials.navbar')

        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside >
            @include('admin.templates.partials.sidebar')
        </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('admin.templates.partials.breadcrumb')

    <!-- Main content -->
    <section class="content">

        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer>
        @include('admin.templates.partials.footer')
  </footer>

  <!-- Control Sidebar -->
        @include('admin.templates.partials.controlside')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

    @include('admin.templates.partials.script')

</body>
</html>
