<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ruang Magang</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ base_url('assets/landing-page/') }}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="{{ base_url('assets/landing-page/') }}vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ base_url('assets/landing-page/') }}vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ base_url('assets/landing-page/') }}device-mockups/device-mockups.min.css">
    <!-- Custom styles for this template -->
    <link href="{{ base_url('assets/landing-page/') }}css/new-age.min.css" rel="stylesheet">
  </head>

  <body id="page-top">

    @yield('content')

    @include('beranda.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ base_url('assets/landing-page/') }}vendor/jquery/jquery.min.js"></script>
    <script src="{{ base_url('assets/landing-page/') }}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ base_url('assets/landing-page/') }}vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ base_url('assets/landing-page/') }}js/new-age.min.js"></script>

  </body>

</html>
