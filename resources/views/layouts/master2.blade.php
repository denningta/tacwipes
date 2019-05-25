<!DOCTYPE html>
<html lang="en">

  @include('layouts.head')

  <body>
    
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light bg-white bg-fixed-white py-0 pr-5">
            @include('layouts.navbar')
        </nav>
    </header>

        @yield('content')

    @include('layouts.footer')

    @include('layouts.scripts')

  </body>
</html>