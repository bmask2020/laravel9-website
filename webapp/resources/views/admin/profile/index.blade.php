@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">
    <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <br><br>
                                    <center>
                                    <img class="rounded-circle avatar-xl" draggable="false" alt="user image" src="{{asset('backend/assets/images/small/img-5.jpg')}}" data-holder-rendered="true">
                                    </center>
                                    <div class="card-body">
                                        <h4 class="card-title">Name : {{$profile_data->name}}</h4>
                                        <hr>
                                        <h4 class="card-title">Username : {{$profile_data->username}}</h4>
                                        <hr>
                                        <h4 class="card-title">Email : {{$profile_data->email}}</h4>
                                        <hr>
                                        <a href="" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
        
                        
                        </div>
    </div>
</div>

@endsection