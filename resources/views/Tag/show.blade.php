
@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Tags
                            <a href="#" class="btn btn-success">Tags List</a>
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
@extends('Tag.css')
@foreach($datas as $data)
<table id="customers">
<tr>
    <th>ID</th>
    <td>{{$data->id}}</td>
</tr>
<tr>
    <th>TagName</th>
    <td>{{$data->tagName}}</td>
</tr>
<tr>
    <th>Slug</th>
    <td>{{$data->slug}}</td>
</tr>
<tr>
    <th>IsTrending</th>
    <td>@if($data->isTrending==1)
    <p style="color:green">Yes</p>
    @else
    <p style="color:red">No</p>
    @endif
    </td>
</tr>
<tr>
    <th>IsVisible</th>
    <td>
    @if($data->isVisible==1)
    <p style="color:green">Active</p>
    @else
    <p style="color:red">Deactive</p>
    @endif
    </td>
</tr>
@endforeach






                 
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
</div>
</div>
@endsection

