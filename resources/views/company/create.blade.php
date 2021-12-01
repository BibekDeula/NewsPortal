  @extends('layouts.backend')
  @section('content')
  <html lang="en">
  <head>
    <title>Laravel 7 Image Upload tutorial example - XpertPhp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
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

<form action="{{url('users')}}"method="post"autocomplete="off"class="form"enctype="multipart/form-data">
	
	FullName:
	<input type="text" name="fullname"><br>
  Email:
  <input type="email" name="email"><br>
  Password:
  <input type="password" name="password"><br>
	Daily Target:
	<input type="text" name="dailytarget"><br>
  Role_Id:
  <input type="text" name="role_id"><br>
	IsActivated:
  <select name="isactivated"value=''>
	<option value="1">Enable</option>
  <option value="0">Disable</option>
</select>
Image:
  <input type="file" name="image" class="form-control">
<br>
	<input type="submit" name="submit">
	{{csrf_field()}}
</form>
</div> 

</td>
</body>
</html>
</div>
@endsection()