
@extends('backend.template.authtemplate')
@section('body')


<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

  <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
    <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> TODOS<span class="tx-info">APP</span> <span class="tx-normal">]</span></div>
    <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>
       <!-- Validation Errors -->
       <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
            @csrf


         <div class="form-group">
      <label for="name"> FullName</label>
      <input type="text" class="form-control" placeholder="Enter your fullName" name="name" id="name" required autofocus>
    </div><!-- form-group -->

    
    <div class="form-group">
      <label for="email"> Email</label>
      <input type="email" class="form-control" placeholder="Enter your Email" name="email" id="email" required autofocus>
    </div><!-- form-group -->



    <div class="form-group">
    <label for="password">Password </label>
      <input type="password" class="form-control" name="password" placeholder="Enter your password" id="password" required  autocomplete="new-password">
    </div><!-- form-group -->

    <div class="form-group">
    <label for="password_confirmation">Retype-Password </label>
      <input type="password" class="form-control" placeholder="Re-type password" id="password_confirmation" name="password_confirmation">
    </div><!-- form-group -->

   
    <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
    <button type="submit" class="btn btn-info btn-block">Sign Up</button>
</form>

    <div class="mg-t-40 tx-center">Already a  member? <a href="{{route('login')}}" class="tx-info">Sign In</a></div>
  </div><!-- login-wrapper -->
</div><!-- d-flex -->
@endsection

