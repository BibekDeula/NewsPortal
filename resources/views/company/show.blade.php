
        @extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                            <a href="{{url('users')}}" class="btn btn-success">Users List</a>
                    
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
                            <th>FullName</th>
                            <td>{{$data->fullname}}</td>
                        </tr>

                            <th>Status</th>
                            <td>
                                @if($data->isactivated==1)
                                    <p style="color:Green">Active</p>
                                @else
                                    <p style="color:red">Deactive</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Daily_Target</th>
                            <td>{{$data->dailytarget}}</td>
                        </tr>
                        <tr>
                            <th>Role_Id</th>
                            <td>{{$data->role_id}}</td>
                        </tr>


                    </table>
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

@endsection

