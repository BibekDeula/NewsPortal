@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Category
                            <a href="#" class="btn btn-success">Category List</a>
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


                            <div class="form-group">
                                <input type="submit" value="save" class="btn btn-primary">

                            </div>
                        </div>
                    </form>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection

