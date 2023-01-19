<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'CRUD')</title>

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

  </head>
  <body>

    @yield('login')

    <script src="{{ asset('js/login_app.js') }}"></script>
  </body>
</html>
