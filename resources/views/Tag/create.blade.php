
@extends('layouts.backend')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Tags
                            <a href="{{url('tags')}}" class="btn btn-success">Tag Lists</a>
                        </h1>
                        
                    </div>
                      <div class="container">
   <div class="row">
   <div class="col-lg-12">
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
   <button type="button" class="close" data-dismiss="alert">×</button>
   <strong>{{ $message }}</strong>
   </div>
   @endif
   @if (count($errors) > 0)
   <div class="alert alert-danger">
   <strong>Whoops!</strong> There were some problems with your input.
   <ul>
   @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
   @endforeach
   </ul>
   </div>
   @endif
   </div>
   </div> 
                      
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
<div class="container">

<form action="{{url('store')}}"method="post"autocomplete="off"class="form"enctype="multipart/form-data">
	
	ID:<span></span>
	<input type="text" name="id"><br>
  TagName:
  <input type="text" name="tagName"><br>
  Slug:
  <input type="text" name="slug" ><br>
  IsTrending :
  <select name="isTrending">
	<option value="1">Yes</option>
    <option value="0">No</option>
  </select><br>
  IsVisible:
  <select name="isVisible">
  <option value="1">Active</option>
  <option value="0">Deactive</option>
  </select><br>
	<input type="submit" name="submit">
	{{csrf_field()}}
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

