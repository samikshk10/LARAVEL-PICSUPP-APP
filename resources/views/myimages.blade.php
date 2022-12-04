@extends('layout.app')

@section('content')

<h1 class="text-center">My Images({{ count($datas) }})</h1>


<style>
    .image-action {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.5);
        padding: 12px;
        border: none;
        border-radius: 5px;
        visibility: hidden;
        opacity: 0;
        transition: visibility 0.2s, opacity 0.3s linear;
      }
      
      .image-action form {
        display: inline-block;
      }

      .card.card-b{
        border:none !important;
      }
      
      .card-b:hover .image-action {
        visibility: visible;
        opacity: 1;
      }
</style>



<div class="container">
    <a href="{{ route('create') }}"><button class="btn btn-success"><i class="fa fa-upload"></i> Upload</button> </a> <br>
    @if(session()->has('message'))
    <div class="invalid alert alert-success mt-2 mb-2 alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

{{ session()->get('message') }}
</div>
@endif
<div class="card mt-2"> 
    <div class="card-header">
        <h4>My Images</h4>
    </div>
    <div class="card-body"> 
<div class="row">

    @if(count($datas)==0)
    <h2 class="no-image mb-3 mt-3 text-center">No Images!!! Please Upload New Image</h2>
    @endif
    @foreach ($datas as $data)
<div class="col-md-3 mb-3 mt-3">
    <div class="card card-b"> 
    <a href="/show/{{ $data->id }}">
        <img src="{{ asset('storage/'.$data->file) }}" height="300" width="300" alt="{{ $data->title }}">
    </a>

    <div class="image-action">
    
            <a href="delete/{{ $data->id }}"><button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i class="fa fa-trash fa-lg"></i></button></a>
    
    </div>
</div>
</div>

@endforeach
</div>
</div>
</div>





</div>


@endsection