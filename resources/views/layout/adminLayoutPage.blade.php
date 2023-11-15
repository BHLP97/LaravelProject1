<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title>
      @include("partials.head")
   </head>
   <body class="sidebar-main-menu">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <div class="wrapper">
         @include("partials.sidebar")
         <div id="content-page" class="content-page">
            @include("partials.header")
            @yield('content')
            @include("partials.footer")
         </div>
      </div>
      @include("partials.bodyjs")
   </body>
</html>
