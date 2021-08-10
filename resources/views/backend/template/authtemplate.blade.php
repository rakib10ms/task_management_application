
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('backend.includes.header')
  <!--css  part-->
  @include('backend.includes.css')  
 
  </head>

  <body>

   @yield('body')
       <!--script part -->
   @include('backend.includes.script')
  </body>
</html>


