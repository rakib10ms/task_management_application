@extends('backend.template.authtemplate')
@section('body')
<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> TODOS <span class="tx-info">APP</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">The Admin Template For Perfectionist</div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
   <!-- Session Status -->
   <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />


<div class="form-group">
    <label for="email">Email </label>
          <input type="text"  id="email" class="form-control" type="email" name="email" placeholder="Enter your username" required autofocus>
        </div>

        <div class="form-group">
        <label for="password" >Password </label>
          <input type="password" id="password" class="form-control"  type="password"
                                name="password" placeholder="Enter your password" required autocomplete="current-password" >
                                @if (Route::has('password.request'))
          <a href="hover:text-gray-900" href="{{ route('password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
          @endif
        </div>

        <button type="submit" class="btn btn-info btn-block">Sign In</button>

     </form>


        <div class="mg-t-60 tx-center">Not yet a member? <a href="{{route('register')}}" class="tx-info">Sign Up</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

       <!--script part -->
   @include('backend.includes.script')
  </body>
@endsection
