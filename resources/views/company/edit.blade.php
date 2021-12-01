@extends('layouts.backend')
@section('content')
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
  background-color: #f2f2f2;
  padding: 80px;
  
}
</style>
</head>
<body>



<div class="container">
<h2>Edit</h2>
<form action="{{route('user.update')}}"method="POST"autocomplete="off" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{$datas->id}}">
    @method('PUT')
    @csrf

        FullName:
        <input type="text" name="fullname"value="{{$datas->fullname}}"><br>
        Email:
        <input type="email" name="email"value="{{$datas->email}}"><br>
        Password:
        <input type="password" name="password"value="{{$datas->password}}"><br>
        Daily Target:
        <input type="text" name="dailytarget"value="{{$datas->dailytarget}}"><br>
        Role_Id:
        <input type="text" name="role_id"value="{{$datas->role_id}}"><br>
        IsActivated:
        <select name="isactivated"value="{{$datas->isactivated}}"value="">
        <option value="1">Enable</option>
        <option value="0">Disable</option>
      </select>
      Image:<br>
        <input type="file" name="image" class="form-control"value="{{$datas->image}}"><br><br>
      Submit:
        <input type="submit" name="submit">

</form> 
@endsection()