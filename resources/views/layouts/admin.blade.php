<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

    @stack('prepend-style')

  @include('includes.admin.style')

        @stack('addon-style')

</head>
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
     @include('includes.admin.navbar')
      
      @include('includes.admin.sidebar')

      <!-- Main Content -->
      @yield('content')

      <footer class="main-footer">
        @include('includes.admin.footer')
      </footer>
    </div>
  </div>

  @stack('prepend-script')
  @include('includes.admin.script')

  <!-- Page Specific JS File -->
</body>
    @stack('addon-script')
</html>
