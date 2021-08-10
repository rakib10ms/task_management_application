@extends('backend.template.admintemplate')
@section('content')

<div class="br-mainpanel" style="position: relative;">
      <div class="br-pagetitle" style="margin-left:-200px;">
        <i class="icon ion-ios-home-outline"></i>
       
          <h4>Manage All category List</h4>

          </div>
          </div>
      
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="row">
            <div class="col-md-12">
        
              <h6 class="br-section-label">Manage category List </h6>
              </div>
</div>
    <div class="row">
      <div class="col-md-12">
        <div class="bd bd-gray-300 rounded table-responsive">
      <table class="table" id="table1">
  <thead>

    <tr>
      <th scope="col">#SL</th>
      <th scope="col">category Name</th>
      <th scope="col">category details</th>
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
  @if($categories->isEmpty ()) 

<div class="alert alert-danger alert-dismissible fade show  m-1" role="alert">
  <strong>Hello !</strong> NO category found ... please add New category
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>

@endif

    @php $i=1; @endphp
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td>
     @if($category->status==1)
     <span class="badge badge-success"> Active</span>
     @elseif($category->status==0)
     <span class="badge badge-danger"> Inactive </span>
     @endif
      </td>
      <td>{{$category->created_at->diffForHumans()}}</td>

      <td>
        <div class="action-panel">
          <ul> 
            <li><a href="{{route('admin.category.edit',$category->id)}}">
           <i class="far fa-edit "> </i>
       </a>
       </li>   
       <!-- <li><a href="">
           <i class="far fa-eye "> </i>
          
          </a>
    </li> -->
    <li><a href="" data-toggle="modal" data-target="#exampleModal{{$category->id}}">
           <i class="far fa-trash-alt "> </i>
          
          </a>
    </li>
</ul>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do You confirm to delete this category?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-buttons">
        
              <form action="{{route('admin.category.destroy',$category->id)}}" method="POST">
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