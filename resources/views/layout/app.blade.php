<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PicsUpp App</title>
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
    @vite(['resources/js/app.js'])


 <style>

    .fa.fa-sign-out{
      color: #555;

    }

    .fa.fa-sign-out:hover{
      color: dodgerblue;
    }

    a.edit{
      color: #555;
      font-size: 20px;
      white-space: nowrap;
    }
    a.edit:hover{
      color: dodgerblue;
    }
 </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">PicsUpp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
      
         
      
        </ul>

        @guest
        <div class="d-flex " style="gap:20px; ">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </div>

        @endguest
      </div>

 
@auth 
<ul>
  <li class=" d-flex align-items-right justify-content-right mt-2" style="gap:15px">
    <span style="color: #555; font-size: 22px">Welcome</span><a href="{{url('login')}}" style="text-decoration: none; text-transform:capitalize" class="nav-name edit"> {{auth()->user()->name}}</a>
    <a class="edit"  href="{{ route('myimages') }}">My Images</a>
    <a class="edit" href="{{ route('logout') }}"><i class="fa fa-sign-out fa-2x"></i> </a>
  </li>
</ul>

@endauth
</div>
</nav>


  
    @yield('content')


    </body>
    <script>
      const a=document.querySelectorAll('.invalid');
        setTimeout(()=>{
    
          a.forEach((e)=>{
              e.style.display="none";
          })
        },3000);
    </script>
</html>