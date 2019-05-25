<!DOCTYPE html>
<html lang="en">

  @include('layouts.head')

  <body>
    
    <header class="header header-absolute">
        <nav class="navbar navbar-expand-lg bg-transparent navbar-sticky navbar-airy navbar-dark bg-hover-white bg-fixed-white navbar-hover-light navbar-fixed-light py-0 pr-5">
            @include('layouts.navbar')
        </nav>
    </header>

        @yield('content')

    @include('layouts.footer')

    @include('layouts.scripts')

  </body>
</html>