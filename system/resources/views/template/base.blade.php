<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
 
  <!-- CSS Files -->
  <link href="{{url('public')}}/vendor/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{url('public')}}/vendor/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{url('public')}}/vendor/assets/demo/demo.css" rel="stylesheet" />
  @stack('style')
  @livewireStyles
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="" class="simple-text logo-mini">
        <div class="logo-image-small">
            <img src="assets/img/logo-small.png">
          </div> 
        </a>
        <a href="home" class="simple-text logo-normal">
        Restaurant 24
          
        </a>
      </div>
      @include('template.section.sidebar')
    </div>
    <div class="main-panel" style="height: auto;">
      <!-- Navbar -->
      @include('template.section.header')
      <!-- End Navbar -->
     
      <div class="content">
      @include('template.utils.notif')
        @yield('content')
    
      </div>
    @include('template.section.footer')
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{url('public')}}/vendor/assets/js/core/jquery.min.js"></script>
  <script src="{{url('public')}}/vendor/assets/js/core/popper.min.js"></script>
  <script src="{{url('public')}}/vendor/assets/js/core/bootstrap.min.js"></script>
  <script src="{{url('public')}}/vendor/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Summernote Plugin untuk text -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <!-- Chart JS -->
  <script src="{{url('public')}}/vendor/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url('public')}}/vendor/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('public')}}/vendor/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  @stack('script')
  @livewireScripts
</body>

</html>
