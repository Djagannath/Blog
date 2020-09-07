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

  <link rel="stylesheet" href="{{ asset('base/pe-icon/css/pe-icon-7-stroke.css') }}">
  <link rel="stylesheet" href="{{ asset('base/pe-icon/css/helper.css') }}">
  <link href="{{ asset(mix('admin/css/app.css')) }}" rel="stylesheet" type="text/css">

  <title>@yield('title', __('Blog'))</title>
</head>
<body>
  <div id="app" class="container-fluid">
    <div class="row">
      {{-- BEGIN SIDEBAR --}}
      <div class="col sidebar pl-4 pr-4">
        <nav>
          <ul class="vertical-nav-menu">
            <li class="upper-case sidebar-head">menu</li>
            <li class="capitalize">
              <a href="#"><i class="metismenu-icon pe-7s-rocket"></i>menu<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i></a>
                <ul>
                    <li><a href="" class="">Sub menu</a></li>
                    <li><a href="" class="">Sub menu</a></li>
                    <li><a href="" class="">Sub menu</a></li>
                    <li><a href="" class="">Sub menu</a></li>
                    <li><a href="" class="">Sub menu</a></li>
                    <li><a href="" class="">Sub menu</a></li>
                </ul>
            </li>
            <li class="capitalize">
                <a href="#">menu</a>
            </li>
            <li class="capitalize"><a href="#">menu</a></li>
            <li class="capitalize"><a href="#">menu</a></li>
          </ul>
        </nav>
      </div>

      {{-- BEGIN MAIN --}}
      <div class="col">
        {{-- BEGIN HEADER --}}
        <div class="row">
          <div class="col header text-center">
            ADMIN PANEL

            <nav-menu></nav-menu>
          </div>
        </div>

        {{-- BEGIN CONTENT --}}
        <div class="main">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset(mix('admin/js/app.js')) }}"></script>
</body>
</html>
