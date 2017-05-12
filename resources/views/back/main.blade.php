@include('back.partials.head')
<!-- Site wrapper -->


@include('back.partials.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
@include('back.partials.aside')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

@include('errors.form-success')

    @yield('content')
    
  </div>
  <!-- /.content-wrapper -->

@include('back.partials.footer')