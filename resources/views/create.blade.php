@extends('layout.app')


@section('content')

<h1 class="text-center">Upload Image</h1>

{{--  
<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
            <label for="file">File</label>
            <input type="file" name="file" id="file">
            @error('file')
            <div>{{ $message }}</div>
            @enderror
    </div>
    <div>
            <label for="Title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
            <div>{{ $message }}</div>
            @enderror
    </div>

    <button type="submit">Upload</button>
</form>  --}}



<div title="Upload new image">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">Upload your photo</div>
    
                        <div class="card-body">
                            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label" for="file">File</label>
                                    <input class="form-control @error('file') is-invalid @enderror" type="file" name="file" id="file">
                                    @error('file')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @else
                                        
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="title">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                    <a href="{{ route('index') }}" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
   
@endsection