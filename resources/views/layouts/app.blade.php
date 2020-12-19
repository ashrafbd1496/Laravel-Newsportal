<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>
    <body class="sb-nav-fixed">
        
        @include("layouts.topnav")

        <div id="layoutSidenav">

          @include('layouts.navmenu')

            @section('main')
            @show

            @include('layouts.footer')
            
            </div>
        </div>
        
        @include('layouts.partials.scripts')
    </body>
</html>
