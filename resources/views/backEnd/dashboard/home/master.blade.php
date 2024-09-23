<!-- style -->
@include('backEnd.include.style')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  @include('backEnd.include.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  @include('backEnd.include.sidebar')
  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

    @include('backEnd.include.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- script -->
@include('backEnd.include.script')