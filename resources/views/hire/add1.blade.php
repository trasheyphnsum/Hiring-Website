@extends('layout')
@section('content')
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show">
    {{Session::get('status')}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif
<div class="row justify-content-center">
    <div class="col-4">
        <h1>Post your detail here</h1>
        <form method="post" action="add1">
        {{ @csrf_field() }}
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name ="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label >Phone Number</label>
                <input type="phone" class="form-control" name="Phone_Number"  placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
                <label>Vehicle or Machiine</label>
                <input type="text" class="form-control" name="Vehicle_Type"  placeholder="Enter Vehicle/machine Type">
            </div>
            <div class="form-group">
                <label>Renting Price(Nu.)</label>
                <input type="number" class="form-control" name="Price"  placeholder="Enter Renting Price">
            </div>
            <div class="form-group">
                <label>Condition of your asset</label>
                <input type="text" class="form-control" name="Condition"  placeholder="Enter vehicle/machine's Condition">
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text"  class="form-control" name="Location"  placeholder="Enter Location of your vehicle/machine" >
            </div>
            <div class="form-group">
                <label>Vehicle/Machine Photo</label>
                <input type="file" class="form-control-file" name="Image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<table class="table" id="t2">
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
    $('#t2').DataTable();
} );
</script>
@endsection