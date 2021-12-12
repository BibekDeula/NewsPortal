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


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  /* background-color: #f2f2f2; */
  padding: 60px;
}
</style>
</head>
<body>

<h1>Add Users</h1>

<div class="container">

<form action="{{route('tags.update')}}"method="POST"autocomplete="off"class="form"enctype="multipart/form-data">
    		<input type="hidden" name="id" value="{{$datas->id}}">

    @method('PUT')
    @csrf
      ID:
      <input type="text" name="id"value="{{$datas->id}}"><br>
      TagName:
      <input type="text" name="tagName"value="{{$datas->tagName}}"><br>
      Slug:
      <input type="text" name="slug"value="{{$datas->slug}}"><br>
      IsTrending :
      <select name="isTrending"value="{{$datas->isTrending}}">
      <option value="1">Yes</option>
        <option value="0">No</option>
      </select>
      IsVisible:
      <select name="isVisible"value="{{$datas->isVisible}}">
      <option value="1">Active</option>
      <option value="0">Deactive</option>
      </select>
      <input type="submit" name="submit">

    </form>
    </div> 

</td>
</body>
</html>
</div>


                 
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

