@extends('layout')
@section('content')
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show">
    {{Session::get('status')}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif
<div class="col d-flex justify-content-center">
    <aside class="col-sm-5">
        <div class="card">
        <article class="card-body">
            <h4 class="card-title text-center mb-4 mt-1">You can post Your Vehicle or Machine detail details</h4>
            <hr>
            <form method="POST" action="add1">
            {{ @csrf_field() }}
            <div class="form-group">
            <div class="input-group">
                <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                <input type="email" class="form-control" name ="Email" placeholder="Enter Email">
            </div> 
            </div> 

            <div class="form-group">
            <div class="input-group">
                <label for="PhoneNumber" class="col-sm-3 col-form-label">Phone No.</label>
                <input type="Phone" class="form-control" name ="Phone_Number" placeholder="Enter your Phone number">
            </div> 
            </div> 

            <div class="form-group">
            <div class="input-group">
                <label for="VehicletType" class="col-sm-3 col-form-label">Vehicle</label>
                <input type="text" class="form-control" name ="Vehicle_type" placeholder="Enter vechile or Machine type">
            </div> 
            </div>

            <div class="form-group">
             <div class="input-group">
                <label for="Price" class="col-sm-3 col-form-label">Price(Nu.)</label>
                <input class="form-control" name="Price" placeholder="Enter Renting Price" type="number">
            </div>
            </div>

            <div class="form-group">
            <div class="input-group">
                <label for="Condition" class="col-sm-3 col-form-label"> Condition</label>
                <input class="form-control" name="Condition" placeholder="Enter your vehicle or machine condition" type="tetx">
            </div>
            </div>

            <div class="form-group">
            <div class="input-group">
                <label for="Location" class="col-sm-3 col-form-label">Location</label>
                <input class="form-control" name="Location" placeholder="Enter your vehicle Location" type="text">
            </div>
            </div>
            
            <div class="form-group">
            <div class="input-group">
                <label for="image" class="col-sm-3 col-form-label">Vehicle Image</label>
                <input class="form-control" type="file" class="form-control-file" name="Image">
            </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg float-right">Submit</button>
            </div>
            </form>
        </article>
        </div> 
    </aside> 
</div>
<!-- <table class="table" id="t2">
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
      <td>{{$item ->Image}} </td>
    </tr>
    @endforeach
  </tbody>
</table>

<script>
$(document).ready( function () {
    $('#t2').DataTable();
} );
</script> -->
@endsection