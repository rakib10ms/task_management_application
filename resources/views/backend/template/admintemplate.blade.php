<!DOCTYPE html>
<html lang="en">
<head>
  <!--header part-->

  @include('backend.includes.admin.header')
  <!--css  part-->
  @include('backend.includes.admin.css')

</head>

<body>
  <!--leftmenubar  part-->
  @include('backend.includes.admin.leftbar')

  <!--topbar  part-->
  @include('backend.includes.admin.topbar')


  <!--rightbar  part-->
  @include('backend.includes.admin.rightbar')
  

  <div class="br-mainpanel">
    @yield('content')

    <!--footer part -->

    @include('backend.includes.admin.footer')

  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

      
   <!--script part -->
   @include('backend.includes.admin.script')


  </body>
</html>
