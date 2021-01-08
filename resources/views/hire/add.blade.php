@extends('layout')
@section('content')
<h1>Post your detail here</h1>
<div class="col-sm-3">
    <form method="post" action="add">
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
            <label>Equipment Type</label>
            <input type="text" class="form-control" name="Equipment_Type"  placeholder="Enter Equipment Type">
        </div>
        <div class="form-group">
            <label>Renting Price(Nu.)</label>
            <input type="number" class="form-control" name="Price"  placeholder="Enter Renting Price">
        </div>
        <div class="form-group">
            <label>Condition of your asset</label>
            <input type="text" class="form-control" name="Condition"  placeholder="Enter asset's Condition">
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text"  class="form-control" name="Location"  placeholder="Enter Location of your assets" >
        </div>
        <div class="form-group">
            <label>Equipment Photo</label>
            <input type="file" class="form-control-file" name="Image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection