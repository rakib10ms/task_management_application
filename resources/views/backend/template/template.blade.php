<!DOCTYPE html>
<html lang="en">
<head>
  <!--header part-->

  @include('backend.includes.header')
  <!--css  part-->
  @include('backend.includes.css')

</head>

<body>
  <!--leftmenubar  part-->
  @include('backend.includes.leftbar')

  <!--topbar  part-->
  @include('backend.includes.topbar')


  <!--rightbar  part-->
  @include('backend.includes.rightbar')
  

  <div class="br-mainpanel">
    @yield('content')

    <!--footer part -->

    @include('backend.includes.footer')

  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

      
   <!--script part -->
   @include('backend.includes.script')


  </body>
</html>
