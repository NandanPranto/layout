<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.includes.header')
</head>

<body>
  @include('frontend.includes.nav')
  
  @yield('abc')
  
  @include('frontend.includes.footer')
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
