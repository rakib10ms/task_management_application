
  <!-- ########## START: LEFT PANEL ########## -->
  <div class="br-logo"><a href=""><span>[</span>TODO <i>LIST</i><span>]</span></a></div>
  <div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
      <li class="br-menu-item">
        <a href="{{route('admin.dashboard')}}" class="br-menu-link">
          <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
          <span class="menu-item-label">TODO APP</span>
        </a><!-- br-menu-link -->
      </li><!-- br-menu-item -->
      
      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

   
        <a href="#" class="br-menu-link with-sub active show-sub">
          <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
          <span class="menu-item-label">My Task List</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{route('admin.allUser')}}" class="sub-link"> All User</a></li> 
        <li class="sub-item"><a href="{{route('admin.allTask')}}" class="sub-link">All Tasks</a></li>
        <li class="sub-item"><a href="{{route('admin.category.manage')}}" class="sub-link">All Category</a></li>
        <li class="sub-item"><a href="{{route('admin.category.create')}}" class="sub-link">Add Category</a></li>

        
        </ul>
 
    </ul><!-- br-sideleft-menu -->

  
 
    <br>
  </div><!-- br-sideleft -->
  <!-- ########## END: LEFT PANEL ########## -->