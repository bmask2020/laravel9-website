@extends('admin.admin_master')

@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Multi Image All</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Multi Image All</h4>
                     

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>About Image</th>
                                <th>Action</th>
                              
                            </tr>
                            </thead>

                            @php($i = 1)
                            <tbody>
                                @foreach($allMultiImg as $val)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{ asset($val->multi_image)}}" style="height:5rem;width:5rem"/></td>
                                <td>
                                    <a href="{{ route('admin.edit.all.multi.image',['id' => $val->id]) }}" class="btn btn-info sm" title="Edit"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger sm" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                </td>
                             
                            </tr>
                            @endforeach
                 
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->


@endsection