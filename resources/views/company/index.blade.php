@extends('layouts.backend')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
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
      <div class="col-lg-12">
   @if ($message = Session::get('update'))
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
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+ Add Users </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <h1> Users </h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          




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

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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
input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  /* background-color: #f2f2f2; */
  padding: 0px;
  width: 100%;
  height: 100%;
}

</style>
</head>
<body>



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
  <input type="file" name="image" class="form-control"><br>
  <input type="submit" name="submit">
  {{csrf_field()}}
</form>

</div> 

</td>
</body>
</html>
</div>
        </div>
       
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>



<p id="demo"></p>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1569C7;
  color: white;
}
</style>
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>



<button class="close"></button>

</body>
</html><br><br>
<table id="customers">
	<tr>
		<th>ID:</th>
		<th>fullname:</th>
		<th>email:</th>
    <th>DailyTarget</th>
    <th>Image</th>
		<th>IsActivated</th>
	
	</tr>

		@foreach($datas as $data)
		<tr>
		<td>{{$data->id}}     	</td>
		<td><a href="{{url('users',$data->id)}}l"style="color:blue;text-decoration:none">{{$data->fullname}}</a></td>
		<td>{{$data->email}}</td>
    <td>{{$data->dailytarget}}</td>
    <td><img src="{{asset('images')}}/{{$data->image}}"width="100px"height="10%"></td>
     <td>
                                        @if($data->isactivated==1)
                                         
                                            <p><a href="  {{url('users',[$data->id,'edit'])}}"style="text-decoration: none;color:Green"><h4>Active</h4></a></p>
                                          
                                            
                                        @else
                                      <a href=" {{url('users',[$data->id,'edit'])}}" style="color:red;text-decoration: none";><h4>Deactive</h4></p>
                                           </a>
                                          
                                        @endif
		@endforeach
		
</td>	</tr></td></td></tr></table>
		
		<td>
		
</div>
	</tr>


	@endsection()