@extends('layout')
@section('content')
<!--{{print_r($data)}} -> to get old data-->
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show">
    {{Session::get('status')}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif
<table class="table" id="t1">
<h1>Equipments</h1>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Equipment Type</th>
      <th scope="col">Renting Price</th>
      <th scope="col">Condition Of Assets</th>
      <th scope="col">Location of Assets</th>
      <th scope="col">Image of Assets</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item -> id}}</th>
      <td>{{$item ->email}}</td>
      <td>{{$item ->Phone_Number}}</td>
      <td>{{$item ->Equipment_Type}}</td>
      <td>{{$item ->Price}}</td>
      <td>{{$item ->Condition}}</td>
      <td>{{$item ->Location}}</td>
      <td>{{$item ->Image}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<table class="table">
<h1>Vehicle</h1>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Vehicle Type</th>
      <th scope="col">Renting Price</th>
      <th scope="col">Condition Of Assets</th>
      <th scope="col">Location of Assets</th>
      <th scope="col">Image of Assets</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item -> id}}</th>
      <td>{{$item ->email}}</td>
      <td>{{$item ->Phone_Number}}</td>
      <td>{{$item ->Vehicle_Type}}</td>
      <td>{{$item ->Price}}</td>
      <td>{{$item ->Condition}}</td>
      <td>{{$item ->Location}}</td>
      <td>{{$item ->Image}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<script>
$(document).ready( function () {
    $('#t1').DataTable();
} );
</script>
@endsection