<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="/css/app.css" >
        <title>Laravel</title>

        <!-- Fonts -->
      

        <!-- Styles -->
  
     
    </head>
    <body>
       @include('inc.navbar')
       <div class="container">
       @if(Request::is('/'))
       @include('inc.show')
       @endif

              <div class="row">
                     <div class="col-md-8 col-lg-8">
                     @yield('content')
                     </div>     
                     <div class="col-md-4 col-lg-4">
                     @include('inc.sidebar')
                     </div>  
              </div>
              <footer class="text-center" id="footer">
              <p>Copyright 2018 &copy;</p>
              </footer>
       </div>

     
    </body>
</html>
