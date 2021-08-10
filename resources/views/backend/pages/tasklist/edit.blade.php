@extends('backend.template.template')
@section('content')

<div class="br-mainpanel" style="position: relative;">
      <div class="br-pagetitle" style="margin-left:-200px;" >
        <i class="icon ion-ios-home-outline"></i>

          <h4>Update Task</h4>
        </div>
      </div>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="row">
            <div class="col-md-12">
              <h6 class="br-section-label">Update The Task List</h6>
              </div>
              <div class="col-md-8">
              <form action="{{route('task.update',$task->id)}}" method="POST">
                @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1">Task Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$task->name}}">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Details Of the Task</label>
            <textarea class="form-control" id="exampleFormControlInput1" rows="5" name="description">
            {{$task->description}}
            </textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Task Status</label>
            <select class="form-control" id="exampleFormControlSelect1" name="status">
            <option value="2">Please Select The Status</option>
            <option value="1" @if($task->status==1)selected @endif>Pending</option>
            <option value="2" @if($task->status==1)selected @endif>Completed</option>
              
            </select>
          </div>
          
          <div class="form-group">
            <input type="submit" name="save" class="btn btn-info btn-block" value="Add Task"> </input>
          </div>

</form>
</div>
</div>
   
</div>
</div>
@endsection