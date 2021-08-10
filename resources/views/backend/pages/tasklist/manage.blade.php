@extends('backend.template.template')
@section('content')

<div class="br-mainpanel" style="position: relative;">
      <div class="br-pagetitle" style="margin-left:-200px;">
        <i class="icon ion-ios-home-outline"></i>
       
          <h4>Manage All Task List</h4>

          </div>
          </div>
      
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="row">
            <div class="col-md-12">
        
              <h6 class="br-section-label">Manage Task List </h6>
              </div>
</div>
    <div class="row">
      <div class="col-md-12">
        <div class="bd bd-gray-300 rounded table-responsive">
      <table class="table" id="table1">
  <thead>

    <tr>
      <th scope="col">#SL</th>
      <th scope="col">Category </th>

      <th scope="col">Task Name</th>
      <th scope="col">Task details</th>
      {{-- <th scope="col">Submission Date</th> --}}
      <th scope="col">Status</th>

      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <!-- @if (\Session::has('success'))
    
  
            <div class="alert alert-success alert-dismissible fade show  m-1" role="alert">
  <strong>Hello !</strong> {!! \Session::get('success') !!}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
       
@endif -->

@if (\Session::has('success'))
    
    <div class="alert alert-success alert-dismissible fade show  m-1" role="alert">
<strong>Hello !</strong> {!! \Session::get('success') !!}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>

@endif
  @if($tasks->isEmpty ()) 

<div class="alert alert-danger alert-dismissible fade show  m-1" role="alert">
  <strong>Hello !</strong> NO task found ... please add New task
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>

@endif

    @php $i=1; @endphp
    @foreach($tasks as $task)
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$task->category}}</td>
      <td>{{$task->name}}</td>
      <td>{{$task->description}}</td>
      {{-- <td>{{$task->submission_date}}</td> --}}
      <td>
     @if($task->status==1)
     <span class="badge badge-success"> Pending </span>
     @elseif($task->status==2)
     <span class="badge badge-danger"> Completed </span>
     @endif
      </td>
      <td>{{$task->created_at->diffForHumans()}}</td>

      <td>
        <div class="action-panel">
          <ul> 
            <li><a href="{{route('task.edit',$task->id)}}">
           <i class="far fa-edit "> </i>
       </a>
       </li>   
       <!-- <li><a href="">
           <i class="far fa-eye "> </i>
          
          </a>
    </li> -->
    <li><a href="" data-toggle="modal" data-target="#exampleModal{{$task->id}}">
           <i class="far fa-trash-alt "> </i>
          
          </a>
    </li>
</ul>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        
              <form action="{{route('task.destroy',$task->id)}}" method="POST">
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
    @php $i++; @endphp
    @endforeach
    
   
  </tbody>
</table>
        </div>
</div>
</div>

</div>
</div>
@endsection