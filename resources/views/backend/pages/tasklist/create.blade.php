@extends('backend.template.template')
@section('content')

<div class="br-mainpanel" style="position: relative;">
      <div class="br-pagetitle" style="margin-left:-200px;">
        <i class="icon ion-ios-home-outline"></i>

          <h4>Create Task</h4>
        </div>
      </div>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="row">
            <div class="col-md-12">
              <h6 class="br-section-label">Add Task List </h6>
              </div>
              <div class="col-md-8">
              <form action="{{route('task.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Task Category</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="category">
                  <option value="">Please Select Category</option>
                  @foreach($categories as $category)
                  <option value="{{$category->name}}">{{$category->name}}</option>
                  @endforeach
                    
                  </select>
                </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Task Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" >
            @error('name')
            <span class="text-danger"> {{$message}} </span>
            @enderror
   
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Details Of the Task</label>
            <textarea class="form-control" id="exampleFormControlInput1" rows="5" name="description"></textarea>
            @error('description')
            <span class="text-danger"> {{$message}} </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Task Status</label>
            <select class="form-control" id="exampleFormControlSelect1" name="status">
            <option value="2">Please Select The Status</option>
            <option value="1">Pending</option>
            <option value="2">Completed</option>
              
            </select>
          </div>

          
          {{-- <div class="form-group">
            <label for="exampleFormControlSelect1">Submission Date</label> --}}

            {{-- <div class="form-group">
              <input id="datepicker" name="dateinfo" style="border:1px solid #c1c1c1;width:50%;padding:0.6rem" placeholder="select date"/>
            </div>
          </div> --}}
          
          <div class="form-group">
            <input type="submit" name="save" class="btn btn-info btn-block" value="Add Task"> </input>
          </div>

</form>
</div>
</div>
   
</div>
</div>
@endsection