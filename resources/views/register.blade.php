@extends('layout.app')
@section('content')

<div class="container mt-3 container-title" style="width: 600px" >
    <div class="title mb-2">
        <img src="{{ asset('images/windows10.png')}}" class="icon" alt="IconImage"> <br>
        <span class="titlename">Register</span>
      </div>
<form action="{{ route('signupuser') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" class=" @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div class="invalid-feedback invalid">

          @error('name')
      {{ $message }}
          @enderror
      </div>
    </div>
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
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="@error('password') is-invalid @enderror" id="exampleInputPassword1">
     
        <div class="invalid-feedback invalid">
            @error('password')
      {{ $message }}
          @enderror
          </div>
    </div>

    <button type="submit" class="submit-btn  mt-3" style="border-radius: 10px">Sign Up </button>
    <p class="mt-3 text-center">Already Have an Account? <span><a href="{{ url('/login') }}">Login</a></span></p>

  </form>
</div>

@endsection