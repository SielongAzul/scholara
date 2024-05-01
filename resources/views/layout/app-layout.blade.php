
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('pageTitle')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/back/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/back/dist/css/adminlte.min.css">
  @stack('stylesheets')
</head>
<body>

















@yield('content')  <!--Holds your login balls -->
<!-- jQuery -->

<script src="/back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/back/dist/js/adminlte.min.js"></script>
@stack('scripts')
</body>
</html>
