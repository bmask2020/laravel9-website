@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">
   
    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Edit Profile</h4>
                                        <form action="" method="post">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="name" value="{{$edit_data->name}}" id="example-text-input">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" name="email" value="{{$edit_data->email}}" id="example-text-input">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="username" value="{{$edit_data->username}}" id="example-text-input">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" name="image" id="example-text-input">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                <img class="rounded avatar-lg" draggable="false" alt="user image" src="{{asset('backend/assets/images/small/img-5.jpg')}}" data-holder-rendered="true">
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