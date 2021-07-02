<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="{{asset('img/client/favicon.png')}}" type="image/png" />

    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    @yield('css')

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('css/client/styles.css')}}" />

    <title>{{config('app.name')}}</title>
  </head>
  <body>

    @yield('body')

    @yield('top-js')

    <!--=============== MAIN JS ===============-->
    <script src="{{asset('js/client/main.js')}}"></script>

    @yield('bottom-js')
  </body>
</html>
