@extends('layout')
@section('content')
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show">
    {{Session::get('status')}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif
<div class="col d-flex justify-content-center">
    <aside class="col-sm-6">
        <div class="card">
        <article class="card-body">
            <h4 class="card-title text-center mb-4 mt-1">You can post Your Vehicle or Machine detail details</h4>
            <hr>
            <form method="POST" action="add1" enctype="multipart/form-data">
            @csrf
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

@endsection