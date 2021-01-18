@extends('layout')
@section('content')
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show">
    {{Session::get('status')}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('You can post your details') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{route('add_equipment')}}" enctype="multipart/form-data">
                        {{ @csrf_field() }}
                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label text-md-right">{{__('Type of Driver')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name ="Qualification" placeholder="Enter types(vehicle or machine)">
                            </div> 
                        </div> 

                        <div class="form-group row">
                            <label for="experience" class="col-sm-3 col-form-label text-md-right">{{__('Experience')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name ="experience" placeholder="Enter your experience">
                            </div> 
                        </div> 
                        <div class="form-group">
                        <label for="Drivertype" class="col-sm-3 col-form-label text-md-right">License Type</label>
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

                        <div class="form-group row">
                            <label for="EquipmentType" class="col-sm-3 col-form-label text-md-right">{{__('Service Charge')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name ="charge" placeholder="Enter  Service charge">
                            </div> 
                        </div>

                        <div class="form-group row">
                        
                            <label for="Location" class="col-sm-3 col-form-label text-md-right">{{__('Location')}}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="Location" placeholder="Enter your asset Location" type="text">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                  
                            <label for="image" class="col-sm-3 col-form-label text-md-right">{{__('License Image')}}</label>
                            <div class="col-md-6" >
                                <input class="form-control" type="file" class="form-control-file" name="Image">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg float-right">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</div>
@endsection