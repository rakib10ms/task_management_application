@extends('backend.template.admintemplate')
@section('content')


<div class="br-mainpanel" style="position: relative;">
      <div class="br-pagetitle" style="margin-left:-200px;">
        <i class="icon ion-ios-home-outline"></i>

          <h4 class="ml-4"> VIEW ALL USERS</h4>
        </div>
      </div>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="row">
            <div class="col-md-12">
              <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table table-bordered" id="table1">
            <thead>
              <tr>
                <th scope="col">SL NO.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
  <tbody>  

                @foreach($users as $user)
                <tr>
                  <th scope="row">{{++$loop->index}}</th>
                  <td>{{$user->name;}}</td>
                  <td>{{$user->email;}}</td>
                  <td>
                    <div class="action-panel">
                      <ul> 
                        <li><a href="">
                      <i class="far fa-edit "> </i>
                  </a>
                  </li>   
                  <!-- <li><a href="">
                      <i class="far fa-eye "> </i>
                      
                      </a>
                </li> -->
                <li><a href="" data-toggle="modal" data-target="#exampleModal">
                      <i class="far fa-trash-alt "> </i>
                      
                      </a>
                </li>
            </ul>
            </div>


              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Do You confirm to delete this task?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="modal-buttons">
                      
                            <form action="" method="POST">
                              @csrf
                            <button type="submit" class="btn btn-danger"> Confirm</button>
                            
                            <button  data-dismiss="modal" class="btn btn-success"> Cancel</button>
              </form>


      </div>
    
    </div>
  </div>
</div>

      </td>
    </tr>

    @endforeach
 
  </tbody>
</table>
</div>
</div>
</div>
@endsection