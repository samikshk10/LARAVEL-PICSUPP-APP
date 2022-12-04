@extends('layout.app')

@section('content')


    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-7">
                <div class="image-container">
                    <img src="{{ asset('storage/'.$image->file) }}" title="{{ $image->title }}" class="img-fluid img-responsive" style="width: 100%;height: 600px" >
                </div>

              
            </div>
            <div class="col-md-5">
                <div class="d-flex align-items-center mb-3">
                    <img src="https://www.gravatar.com/avatar/c1d58af78e2086e8348f0f3b70425b25?d=mp&amp;s=60"
                        alt="Author" class="rounded-circle mr-3">
                    <div class="ms-3">
                        <h3><a href="" class="text-decoration-none text-black">{{ $image->User->name }}</a></h3>
                        <p class="text-muted mb-0"></p>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-3 ">

                  <a href=""> 
                    <button title="Download" class="btn btn-primary d-flex align-items-center">
                        <i class="fa fa-download"></i>
                        <span class="display-block ms-2">Download Free</span>
                    </button>
                </a>
                </div>


                <div class="card bg-light"> 
                    <div class="card-header">
                        <h4>Image Details</h4>
                    </div>
                <div class="bg-light mt-3 p-2" style="font-size: 18px">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <th>Image Uploaded</th>
                                <td>{{ $image->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Image Dimensions</th>
                                <td>{{ $image->dimension }}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>

            
            </div>
        </div>
    </div>

@endsection