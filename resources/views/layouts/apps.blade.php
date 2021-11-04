<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Advanced form elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('users.index') }}" class="dropdown-item">

            <i class="fas fa-users mr-2"></i> @if(auth()->user()->is_admin)Users @else My Profile @endif
          </a>
          <div class="dropdown-divider"></div>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" href="#" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i> Sign Out
            </button>
          </form>
          
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      @if($logo)
      <img src="{{asset($logo->image->url)}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      @endif     
      <span class="brand-text font-weight-light">{{ config('app.name','my app')  }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(Auth::user()->image)
          <img src="{{asset(Auth::user()->image->url)}}" class="img-circle elevation-2" alt="User Image">
         @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{route('cruds.index') }}" class="nav-link @if(Route::is('cruds.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Crud
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('headers.index') }}" class="nav-link @if(Route::is('headers.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Header
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('menu_items.index') }}" class="nav-link @if(Route::is('menu_items.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu Item
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('teams.index') }}" class="nav-link @if(Route::is('teams.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Team
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('testimonies.index') }}" class="nav-link @if(Route::is('testimonies.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Testimony
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('blogs.index') }}" class="nav-link @if(Route::is('blogs.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('fsections.index') }}" class="nav-link @if(Route::is('fsections.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                First Section
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('prices.index') }}" class="nav-link @if(Route::is('prices.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Price
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('categories.index') }}" class="nav-link @if(Route::is('categories.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('galleries.index') }}" class="nav-link @if(Route::is('galleries.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('contacts.index') }}" class="nav-link @if(Route::is('contacts.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Contact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('ssections.index') }}" class="nav-link @if(Route::is('ssections.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Second Section
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('ssection_items.index') }}" class="nav-link @if(Route::is('ssection_items.*')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Second Section Item
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="{{route('logos.edit') }}" class="nav-link @if(Route::is('logos.*')) active @endif">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Logo
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('footer_descs.edit') }}" class="nav-link @if(Route::is('footer_descs.*')) active @endif">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Footer Description
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('footer_subs.edit') }}" class="nav-link @if(Route::is('footer_subs.*')) active @endif">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Footer Subscription title
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('footer_contacts.edit') }}" class="nav-link @if(Route::is('footer_contacts.*')) active @endif">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Footer Contact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="{{route('footer_links.index') }}" class="nav-link @if(Route::is('footer_links.*')) active @endif">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Footer Link
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('page_titles.index') }}" class="nav-link @if(Route::is('footer_links.*')) active @endif">
              <i class="nav-icon fas fa-blog"></i>
              <p>
                Page Titles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    @yield('content')
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3
    </div>
    <strong>Copyright &copy; {{ now()->year }} <a href="#">{{ config('app.name','Admin Panel') }}</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- Page script -->
<script>
  @if(session()->has('success'))
    toastr.success('{{session()->get('success')}}')
@endif   

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
