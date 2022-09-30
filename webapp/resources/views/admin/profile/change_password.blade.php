@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">
   
    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Change Password</h4><br><br>

                                    @if(count($errors))

                                        @foreach($errors->all() as $error)
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <i class="mdi mdi-block-helper me-2"></i>
                                                    {{$error}}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                        @endforeach

                                    @endif
                                        <form action="{{route('admin.update.password')}}" method="post">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" name="oldPassword" id="oldPassword">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" name="newPassword" id="newPassword">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" name="confirmPassword" id="confirmPassword">
                                                </div>
                                            </div>

                                            <input type="submit" name="submit" value="Change Password" class="btn btn-info waves-effect waves-light">
                                        </form>
                                        <!-- end row -->
                                      
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
    </div>
</div>

@endsection