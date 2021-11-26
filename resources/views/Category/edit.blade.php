@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Category
                            <a href="{{route('category.index')}}" class="btn btn-success">Category List</a>
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

                    <form action="{{route('category.update',$data['row']->id)}}" method='POST' onsubmit="return validateform()" name="myform">
                        <input type="hidden" name="_method" value="PUT"/>
                        @csrf
                        <div class="form-group">

                            <label for="categoryName">Name</label>
                            <input type="text"  class="form-control" name="categoryName" id="categoryName" value={{$data['row']->categoryName}} >
                            <span style='color: red' id="numerr" ></span>
                            @error('categoryName')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            @error('categoryName')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="isActive">Status </label>
                            @if ($data['row']->isActive==1)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"  name='isActive' id="active" value="1" checked>Active
                                    <input class="form-check-input" type="radio" name='isActive' id="deactive" value="0" >
                                    Deactive
                                </div>
                            @else
                                <div class="form-check form-check-inline">

                                    <input class="form-check-input" type="radio"  name='isActive' id="active" value="1"  >Active
                                    <input class="form-check-input" type="radio" name='isActive' id="deactive" value="0" checked>
                                    Deactive

                                    @endif

                                </div>
                                @error('isActive')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" value="save" class="btn btn-primary">

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
@section('js')
    <script type="text/javascript">
        function validateform() {
            var categoryName = document.myform.categoryName.value.inner;

            if (categoryName==null || categoryName==" ") {
                document.getElementById("numerr").innerHTML=
                    "  Please enter category Name";
                return false;

            }
        }

    </script>

@endsection
