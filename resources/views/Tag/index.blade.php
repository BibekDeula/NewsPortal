<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
.button {
  padding: 7px 8px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 8px;
  box-shadow: 0 4px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
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

@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+ Add Tags </button>
<br><br>
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
<!DOCTYPE html>
<html>
<head>
<table id='customers'>
    <tr>
        <th>ID</th>
        <th>TagName</th>
        <th>Slug</th>
        <th>IsTrending</th>
        <th>IsVisible</th>
        <th>Action</th>
   </tr>
      @foreach($datas as $data)
    <tr> 
      <td>{{$data->id}}</td>
      <td>{{$data->tagName}}</td>
      <td>{{$data->slug}}</td>
       <td> 
      @if($data->isTrending==1)
      <button onclick="myfunction()"id="trending"type="button" style="background-color: #1E90FF;color:white"class="button">Set Trending</button>
     @else
    <button id="not" style="background-color: red;color:white"class="button"name="buter">Remove Trending</button>
     @endif
        </td>
        <td>
     @if($data->isVisible==1)
       <p><a href="{{url('tags',[$data->id,'edit'])}}"style="text-decoration:none;color:green">Active</a></p>
     @else
       <p><a href="{{url('tags',[$data->id,'edit'])}}"style="text-decoration:none;color:red">Deactive</a></p>
     @endif
  
       
        <td><button class="btn btn-success edit" data-toggle="modal" data-target="#show">Edit</button> </td>
          </tr>
  

              <!-- Modal -->
  <div class="modal fade" id="show" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <h1> Users </h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
         
          <form action="{{route('tags.update')}}"method="POST"autocomplete="off"class="form"enctype="multipart/form-data">
    		<input type="hidden"id="editform" name="id" value="{{$data->id}}">

    @method('PUT')
    @csrf
          ID:<span></span>
          <input type="text"id="id" name="id" value="{{$data->id}}"><br>
          TagName:
          <input type="text"id="tagName" name="tagName" value="{{$data->tagName}}"><br>
          Slug:
          <input type="text"id="slug" name="slug" value="{{$data->slug}}" ><br>
          IsTrending :
          <select name="isTrending"id="isTrending">
          <option value="1">Yes</option>
            <option value="0">No</option>
          </select><br>
          IsVisible:
          <select name="isVisible"id="isVisible">
          <option value="1">Active</option>
          <option value="0">Deactive</option>
          </select><br>
          <input type="submit" name="submit">
          {{csrf_field()}}
        
        </form>
    
        @endforeach
          
      
      
        </div>
        
      </div>
      
    </div>
  </div>
    
  </div>
      
      
</table>

@endsection



{{-- YO CHAI BOOTSTRAP MODEL USE GAREKO create page ko lagi--}}


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <h1> Tags </h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        


        <div class="modal-body">
        <section class="content">

            <!-- Default box -->



   {{-- YO CHAI FORM KO LAGI  --}}


<form action="{{url('store')}}"method="post"autocomplete="off"class="form"enctype="multipart/form-data">
	ID:
	<input type="text" name="id"><br>
  TagName:
  <input type="text" name="tagName"><br>
  Slug:
  <input type="text" name="slug"><br>
  IsTrending :
  <select name="isTrending">
	<option value="1">Yes</option>
    <option value="0">No</option>
  </select>
  IsVisible:
  <select name="isVisible">
  <option value="1">Active</option>
  <option value="0">Deactive</option>
  </select><br><br>
	<input type="submit" name="submit">
	{{csrf_field()}}
</form>
</div> 
</td>

</div>


                 
                
        </section>
        <!-- /.content -->
    </div>

          </div>
        </div>
    </div>
   
  
</head>
  
</body>
