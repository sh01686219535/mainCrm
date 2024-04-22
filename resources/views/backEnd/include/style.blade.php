
<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backEndAsset')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('backEndAsset')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('backEndAsset')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backEndAsset')}}/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backEndAsset')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('backEndAsset')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('backEndAsset')}}/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="{{asset('backEndAsset')}}/css/custom.css">
  {{-- Toster CSS --}}
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  @stack('css')
</head>