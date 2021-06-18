<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('frontend/fontawesome/fontawesome.css')}}"/>
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  @yield('styles')
</head>
<body>

<!-- ========================='Navbar' SECTION CONTENT END// ========================= -->
@include('frontend.layout.navbar')

<section class="section-content padding-y">
  @yield('content')
</section>

<!-- ========================= SECTION CONTENT END// ========================= -->
<!-- ========== Footer section ================= -->


@include('frontend.layout.footer')


@yield('scripts')
</body>
</html>