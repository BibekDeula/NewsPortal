@extends('layouts.backend')


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category List
{{--                            <a href="{{route('category.create')}}" class="btn btn-success">Add category</a>--}}
                            <button type="button" class="btn btn-primary m-2" data-toggle="modal" data-target="#demoModal">Add Category</button>
                        </h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Modal  Start-->
        <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="demoModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('category.store')}}" method='POST' >
                            @csrf
                            <div class="form-group">
                                <label for="categoryName">Category Name</label>
                                <input type="text" class="form-control" placeholder="Enter New Category to add " name="categoryName" id="categoryName"  >
                                @error('categoryName')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="isActive">Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name='isActive' id="active" value="1">Active
                                    <input class="form-check-input" type="radio" name='isActive' id="deactive" value="0" checked>
                                    Deactive
                                </div>



                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <div class="form-group">
                            <input type="submit" value="save" class="btn btn-primary">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- model end-->





        <!-- Main content -->
        <section class="content">
            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">

                    <div class="dataTable" id="tables">
                        @if(Session::has('success'))
                            <p class="alert alert-success">{{Session::get('success')}}</p>
                        @endif
                        @if(Session::has('error'))
                            <p class="alert alert-danger">{{Session::get('danger')}}</p>
                        @endif
                        <table id="datatable" class="table table-striped" style="width:100%" >
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data['rows'] as $i => $row)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$row->categoryName}}</td>
                                    <td>
                                        @if($row->isActive==1)
                                            <p style="color:Green">Active</p>
                                        @else
                                            <p style="color:red">Deactive</p>
                                            <p style="color:red">

                                            </p>

                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{route('category.show',$row->id)}}" class="btn btn-success">View</a>
                                        <a href="{{route('category.edit',$row->id)}}" class="btn btn-primary">Update</a>
                                        <form action="{{route('category.destroy',$row->id)}}" method="post">
                                            <input type="hidden" name="_method" value="delete" />
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- /.card-body -->

                    </div>
                </div>
                <!-- /.card -->

            </section>
        </section>
        <!-- /.content -->
    </div>





@endsection

