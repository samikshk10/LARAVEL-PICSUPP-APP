@extends('layout.app')

@section('content')

<h1 class="text-center">All Images</h1>
<style>

</style>
<div class="container">

   
    <form action="" > 
        <div class="formm d-flex" style="gap:10px"> 
            <div class="input-group"> 
                              <input type="search" id="search" value="{{ $search }}" name="search" class ="form-control mb-2" placeholder="Search By Photo Title ">
       <button class="btn btn-primary mb-2" id="searchbtn"><i class="fa fa-search" style="border-radius: 50%"></i></button>
    </div>

      <a href="{{ url('/')}}"> <button class="btn btn-info"  type="button" title="Reset"><i class="fa fa-refresh text-white"></i></button></a>
        </div>  
    </form>
     
 

    
    <div class="card mt-2"> 
        <div class="card-header ">
            <h4>All Images</h4>
                    </div>
                    <div class="card-body"> 
    <div class="row">
        

        @if(count($images)==0)
        <h2 class="no-image mb-3 mt-3">No Images!!!</h2>
        @endif


@foreach ($images as $image)
<div class="col-md-3 mt-3 mb-3">
    <a href="/show/{{$image->id}}">
        <img src="{{ asset('storage/'.$image->file) }}" height="300" width="300" alt="{{ $image->title }}">
    </a>
</div>
@endforeach
</div>
</div>
</div>
</div>

@endsection