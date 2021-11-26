@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Announcement details
                            <a href="{{route('category.create')}}" class="btn btn-success">Add category</a>
                            <a href="{{route('category.index')}}" class="btn btn-info">Category List</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">

                    <table class="table table-bordered">
                        <tr>
                            <th>Title</th>
                            <td>{{$data['row']->categoryName}}</td>
                        </tr>

                            <th>Status</th>
                            <td>
                                @if($data['row']->isActive==1)
                                    <p style="color:Green">Active</p>
                                @else
                                    <p style="color:red">Deactive</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Created_At</th>
                            <td>{{$data['row']->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Updated_At</th>
                            <td>{{$data['row']->updated_at}}</td>
                        </tr>


                    </table>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>

@endsection
