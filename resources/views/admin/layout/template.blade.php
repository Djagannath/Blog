<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="noindex, nofollow">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <title>@yield('title', __('Blog'))</title>
</head>
<body>
  <div id="app" class="container-fluid">
    @yield('content')
  </div>

  <script src="{{ asset(mix('admin/js/app.js')) }}"></script>
  <link href="{{ asset(mix('admin/css/app.css')) }}" rel="stylesheet" type="text/css">
</body>
</html>