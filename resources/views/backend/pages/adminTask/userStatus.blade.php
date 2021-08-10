@extends('backend.template.admintemplate')
@section('content')


<div class="br-mainpanel" style="position: relative;">
      <div class="br-pagetitle" style="margin-left:-200px;">
        <i class="icon ion-ios-home-outline"></i>

          <h4 class="ml-4">ALL USERS</h4>
        </div>
      </div>
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <div class="row">


<!-- <h1> Hello i am admin user view </h1> -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL NO.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
@endsection