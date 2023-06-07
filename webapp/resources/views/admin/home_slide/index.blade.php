@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">
   
    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Home Slide</h4>
                                        <form action="{{route('admin.update.home.slide')}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            @isset($HomeSlide->id)
                                            <input type="hidden" name="id" value="{{$HomeSlide->id}}">
                                            @endisset
                                           
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                @isset($HomeSlide)
                                                <input class="form-control" type="text" name="title" value="{{$HomeSlide->title}}" id="example-text-input">
                                                @endisset

                                                @empty($HomeSlide->title)
                                                <input class="form-control" type="text" name="title" id="example-text-input">
                                                @endempty
                                                   
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                                <div class="col-sm-10">
                                                @isset($HomeSlide->short_title)
                                                <input class="form-control" type="text" name="short_title" value="{{$HomeSlide->short_title}}" id="example-text-input">
                                                @endisset
                                                   
                                                @empty($HomeSlide->short_title)
                                                <input class="form-control" type="text" name="short_title" id="example-text-input">
                                                @endempty
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Video URL</label>
                                                <div class="col-sm-10">
                                                @isset($HomeSlide->video_url)
                                                <input class="form-control" type="text" name="video_url" value="{{$HomeSlide->video_url}}" id="example-text-input">
                                                @endisset
                                                  
                                                @empty($HomeSlide->video_url)
                                                <input class="form-control" type="text" name="video_url" id="example-text-input">
                                                @endempty
                                                
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Silde Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" name="silde_image" id="cImage">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    @if(!empty($HomeSlide->img)) 
                                                    <img class="rounded avatar-lg" draggable="false" id="showImag" alt="user image" src="{{asset($HomeSlide->img)}}" data-holder-rendered="true">
                                                    <input type="hidden" name="old_img" value="{{$HomeSlide->img}}">
                                                    @else
                                                    <img class="rounded avatar-lg" draggable="false" id="showImag" alt="user image" src="{{asset('backend/assets/images/profile/no_image.jpg')}}" data-holder-rendered="true">
                                                    @endif
                                                        
                                                </div>
                                            </div>

                                            <input type="submit" name="submit" value="Edit Profile" class="btn btn-info waves-effect waves-light">
                                        </form>
                                        <!-- end row -->
                                      
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
    </div>
</div>

@endsection