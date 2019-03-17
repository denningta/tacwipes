<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    
    @include('layouts.links')

  </head>
  <body>
    <header>
        @include('layouts.navbar')
    </header>
    
    @include('layouts.sidebar')

        <main role="main">

            @yield('content')

        </main>


  </body>

@include('layouts.footer')

</html>