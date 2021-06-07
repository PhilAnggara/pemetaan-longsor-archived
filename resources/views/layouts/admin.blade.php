<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/favicon.ico') }}">
  <title>Admin | Pemetaan Longsor</title>

  @stack('prepend-style')
  @include('includes.admin.style')
  @stack('addon-style')

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    @include('includes.admin.navbar')
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      
      @include('includes.admin.sidebar')

      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('includes.admin.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @stack('prepend-script')
  @include('includes.admin.script')
  @stack('addon-script')

</body>
</html>