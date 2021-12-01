@extends('layouts.backend')

@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse; 
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 20px;
  padding-bottom: 20px;
  text-align: right;
  
}
</style>
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
    @endsection()