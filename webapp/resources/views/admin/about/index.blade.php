@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">
   
    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">About Page Setup</h4>

                                    @if(count($errors))

                                        @foreach($errors->all() as $error)
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <i class="mdi mdi-block-helper me-2"></i>
                                                    {{$error}}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                        @endforeach

                                    @endif
                                        <form action="{{route('admin.update.about.page')}}" method="post" enctype="multipart/form-data">
                                            @csrf


                                            <input type="hidden" name="id" value="{{$about->id}}">
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="title" value="{{$about->title}}" id="example-text-input">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="short_title" value="{{$about->short_title}}" id="example-text-input">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                                <div class="col-sm-10">
                                                <textarea required name="short_description" class="form-control elm1" rows="5">{{$about->short_description}}</textarea>
                                                   
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                                                <div class="col-sm-10">
                                                <textarea required name="long_description" class="form-control elm1" rows="5">{{$about->long_description}}</textarea>
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Silde Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" name="about_img" id="cImage">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    @if(!empty($about->about_img)) 
                                                    <img class="rounded avatar-lg" draggable="false" id="showImag" alt="user image" src="{{asset($about->about_img)}}" data-holder-rendered="true">
                                                    <input type="hidden" name="old_img" value="{{$about->about_img}}">
                                                    @else
                                                    <img class="rounded avatar-lg" draggable="false" id="showImag" alt="user image" src="{{asset('backend/assets/images/profile/no_image.jpg')}}" data-holder-rendered="true">
                                                    @endif
                                                        
                                                </div>
                                            </div>

                                            <input type="submit" name="submit" value="Update About Page" class="btn btn-info waves-effect waves-light">
                                        </form>
                                        <!-- end row -->
                                      
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
    </div>
</div>

@endsection