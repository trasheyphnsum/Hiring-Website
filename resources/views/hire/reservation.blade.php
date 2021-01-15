@extends('layout')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
        @if(Session::get('message')=='equipment')
          <h2 class="text-center"> Equipment Available<h2>
        @else 
            <h2 class="text-center"> Machine/Vehicle Available<h2>
        @endif

            
        </div>
    </div>
    <div class="row mt-4">
    @foreach ($record as $re)
        <div class="col-md-4" style="margin-bottom:10px">
            <div class="card">
                <div class="card-body">
                    <img alt=""  class ="card-img-top"src="{{ URL::to('/') }}/images/{{$re['Image']}}" width="300px" height="200px">
                    @if(Session::get('message')=='equipment')
                    <h4 class="card-title text-center mb-4 mt-1">{{$re->Equipment_Type}}</h4>
                    @else
                    <h4 class="card-title text-center mb-4 mt-1">{{$re->Vehicle_Type}}</h4>
                    @endif
                    <hr>
                    <p class ="card-text">Email:{{$re->email}}</p>
                    <p class ="card-text">Phone Number:{{$re->Phone_Number}}</p>
                    <p class ="card-text">Renting Price:{{$re->Price}}</p>
                    <p class ="card-text">Condition:{{$re->Condition}}</p>
                    <p class ="card-text">Location:{{$re->Location}}</p>
                </div>
                <div class="text-right">
                <button type="submit" class="btn btn-primary btn-lg float-right" data-toggle="modal" data-target="#popUpWindow">Book</button>  
                </div>                  
            </div>
        </div>
    @endforeach
    </div>
    {{$record->links()}}
</div>

<!-- popup Reservation form -->
<div class="container" id="text">
    <div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Reservation Form</h3>
            </div>
            <!-- body -->
            <div class="modal-header">
            <form role="form" method="post" action="">

            <div class="form-group">
            <div class="input-group">
                <label for="Name" class="col-sm-4 col-form-label">Name</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input type="text" class="form-control" name ="Name" placeholder="Enter name">
            </div> 
            </div> 

            <div class="form-group">
            <div class="input-group">
                <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input type="email" class="form-control" name ="Email" placeholder="Enter Email">
            </div> 
            </div> 

            <div class="form-group">
            <div class="input-group">
                <label for="PhoneNumber" class="col-sm-4 col-form-label">Phone No.</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input type="Phone" class="form-control" name ="Phone_Number" placeholder="Enter your Phone number">
            </div> 
            </div>
            
            <div class="form-group">
            <div class="input-group">
                <label for="PickupLocation" class="col-sm-4 col-form-label">Pick up Location </label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
                </div>
                <input type="text" class="form-control" name ="pickup" placeholder="Enter pickup location">
            </div> 
            </div> 

            <div class="form-group">
            <div class="input-group">
                <label for="dropLocation" class="col-sm-4 col-form-label">Drop Location</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
                </div>
                <input type="text" class="form-control" name ="drop" placeholder="Enter drop location">
            </div> 
            </div> 

            <div class="form-group">
            <div class="input-group">
                <label for="pickdate" class="col-sm-4 col-form-label">Pick up Date</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                </div>
                <input type="date" name="pickDate" id="Date" >
            </div>
            </div>

            <div class="form-group">
            <div class="input-group">
                <label for="pickdate" class="col-sm-4 col-form-label">Drop Date</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                </div>
                <input type="date" name="dropDate" id="date">
            </div>
            </div>
            
            <div class="form-group">
            <div class="input-group">
                <label for="pickdate" class="col-sm-4 col-form-label">pick up Time</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-clock"></i> </span>
                </div>
                <input type="time" name="PickTime" id="time">
            </div>
            </div>

            <div class="form-group">
            <div class="input-group">
                <label for="pickdate" class="col-sm-4 col-form-label">Drop Time</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-clock"></i> </span>
                </div>
                <input type="time" name="dropTime" id="time">
            </div>
            </div>

            <div class="col-auto">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                <label class="form-check-label" for="autoSizingCheck">
                By, checking the box, you agreed to the terms and condition between you and the owner. 
                </label>
            </div>
            </div>
             
            </form>
            </div>
            <!-- footer -->
            <div class="modal-footer">
            <button class="btn btn-primary btn-lg float-right">Submit</button>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection