@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">
   
    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">About Multi Image Setup</h4>

                                    @if(count($errors))

                                        @foreach($errors->all() as $error)
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <i class="mdi mdi-block-helper me-2"></i>
                                                    {{$error}}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                        @endforeach

                                    @endif
                                        <form action="{{route('admin.update.multi.page')}}" method="post" enctype="multipart/form-data">
                                            @csrf


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Silde Image</label>
                                                <div class="col-sm-10">
                                                    <input multiple class="form-control" type="file" name="multi_img[]" id="cImage">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <img class="rounded avatar-lg" draggable="false" id="showImag" alt="user image" src="{{asset('backend/assets/images/profile/no_image.jpg')}}" data-holder-rendered="true"> 
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