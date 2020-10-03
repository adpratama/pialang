<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('fonts/feather.svg')}} ">
    <title>Pialang System</title>
    <!-- Simple bar CSS -->
    @include('includes.style')
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
      <nav class="topnav navbar navbar-light">
        @include('includes.navbar')
      </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar style="background-color: #5da7d9 !important">
        @include('includes.sidebar')
      </aside>
      <main role="main" class="main-content" 
      {{-- style="background-image: url({{url('background.jpg')}});
      background-size: cover;
      background-repeat: no-repeat;
      width: 100%;
      height: 100%" --}}
      >
        @yield('content')
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
  </body>
</html>