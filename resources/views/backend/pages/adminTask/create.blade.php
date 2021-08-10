@extends('backend.template.admintemplate')
@section('content')

<div class="br-mainpanel" style="position: relative;">
      <div class="br-pagetitle" style="margin-left:-200px;">
        <i class="icon ion-ios-home-outline"></i>

          <h4>Create Category</h4>
        </div>
      </div>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="row">
            <div class="col-md-12">
              <h6 class="br-section-label">Add Category List </h6>
              </div>
              <div class="col-md-8">
              <form action="{{route('admin.category.store')}}" method="POST">
                @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1">Category Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" >
            @error('name')
            <span class="text-danger"> {{$message}} </span>
            @enderror
   
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Details Of the Category</label>
            <textarea class="form-control" id="exampleFormControlInput1" rows="5" name="description"></textarea>
            @error('description')
            <span class="text-danger"> {{$message}} </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1"> Status</label>
            <select class="form-control" id="exampleFormControlSelect1" name="status">
            <option value="">Please Select  Status</option>
            <option value="0">Inactive</option>
            <option value="1">Active</option>
              
            </select>
          </div>
          
          <div class="form-group">
            <input type="submit" name="save" class="btn btn-info btn-block" value="Add Category"> 
          </div>

</form>
</div>
</div>
   
</div>
</div>
@endsection