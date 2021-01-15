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
            <h4 class="card-title text-center mb-4 mt-1">You can post document(Driver) here</h4>
            <hr>
            <form method="post" action="{{route('add_equipment')}}" enctype="multipart/form-data">
            {{ @csrf_field() }}

            <div class="form-group">
            <div class="input-group">
                <label for="Drivertype" class="col-sm-3 col-form-label">Driver Type</label>
                <input type="text" class="form-control" name ="Experience" placeholder="Enter Driver Type">
            </div> 
            </div>
            <div class="form-group">
            <label for="Drivertype" class="col-sm-3 col-form-label">License Type</label>
            <select class="dropdown-form" id="select-width">
                    <option>Two-wheeler</option>
                    <option>Light vehicle</option>
                    <option>Medium vehicle</option>
                    <optgroup class="dropdown-form" label ="Heavy vehicle">
                        <option>Six-wheeler</option>
                        <option>Ten-wheeler</option>
                        <option>Eighteen-wheeler</option>
                    </optgroup>

                    <optgroup class="dropdown-form" label ="Passenger transport vehicle">
                        <option>Taxi</option>
                        <option>Medium Bus</option>
                        <option>Heavy Bus</option>
                    </optgroup>
                    <optgroup class="dropdown-form" label="Heavy earth-moving equipment">
                        <option>Bull Dozer</option>
                        <option>Excavator</option>
                        <option>Pay Loader</option>
                    </optgroup>
                    <option>Road Roller</option>
                    <option>Tractor</option>
                    <option>Power Tiller</option>
            </select>
            </div>

            <div class="form-group">
            <div class="input-group">
                <label for="Qualification" class="col-sm-3 col-form-label">Qualification</label>
                <input type="text" class="form-control" name ="Skill" placeholder="Enter Your Qualification">
            </div> 
            </div>

            <div class="form-group"> 
             <div class="input-group">
                <label for="servicePrice" class="col-sm-3 col-form-label">Charge(Nu.)</label>
                <input class="form-control" name="serviceCharge" placeholder="Enter Service charge" type="number">
            </div>
            </div>

            <div class="form-group">
            <div class="input-group">
                <label for="Location" class="col-sm-3 col-form-label">Location</label>
                <input class="form-control" name="Location" placeholder="Enter your asset Location" type="text">
            </div>
            </div>
            
            <div class="form-group">
            <div class="input-group">
                <label for="license" class="col-sm-3 col-form-label">License</label>
                <input class="form-control" type="file" class="form-control-file" name="license">
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