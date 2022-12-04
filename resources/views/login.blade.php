@extends('layout.app')
@section('content')

<div class="container container-title mt-5" style="width: 600px">
  <div class="title mb-2">
    <img src="{{ asset('images/windows10.png')}}" class="icon" alt="IconImage"> <br>
    <span class="titlename">Login</span>
  </div>

  @if(session()->has('fail'))
  <div class="alert alert-danger alert-dismissible py-1 invalid" role="alert">
    {{ session()->get('fail') }}
    <button type="button" class="btn-close" style="padding: 10px" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>
      @endif

<form action="{{ route('loginuser') }}" method="post" >
  @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" name="email" class="  @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div class="invalid-feedback invalid">
        @error('email')
            {{ $message }}
      @enderror
      </div>
    </div>
    <div class="mb-3">
      <label for="Password" class="form-label">Password</label>
      <input type="password" name="password" class="  @error('password') is-invalid @enderror" id="exampleInputPassword1">
      <div class="invalid-feedback invalid">
        @error('password')
    {{ $message }}
      @enderror
      </div>
    </div>

    <button type="submit" class="submit-btn  mt-4" style="border-radius: 10px">Login</button>

    <p class="mt-3 text-center">Dont Have an Account? <span><a href="{{ url('signup') }}"> SignUp</a></span></p>
  </form>
</div>

@endsection


