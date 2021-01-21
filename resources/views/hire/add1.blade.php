@extends('layout')
@section('content')
@if(Session::get('message'))
<div class="alert alert-success alert-dismissible fade show">
    {{Session::get('message')}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('You can post Your Vehicle or Machine details') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('add_machine')}}" enctype="multipart/form-data">
                        {{ @csrf_field() }}

                        <div class="form-group row">
                            <label for="Type" class="col-sm-3 col-form-label text-md-right">{{__('Type')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name ="Type" placeholder="Enter vehicle or  machine">
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="Price" class="col-sm-3 col-form-label text-md-right">{{__('Rate')}}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="Price" placeholder="Enter Renting Rate" type="number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Condition" class="col-sm-3 col-form-label text-md-right">{{__('Condition')}}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="Condition" placeholder="Enter your vehicle or machine condition" type="tetx">
                            </div>
                        </div>

                        <div class="form-group row">
                        
                            <label for="Location" class="col-sm-3 col-form-label text-md-right">{{__('Location')}}</label>
                            <div class="col-md-6">
                                <input class="form-control" name="Location" placeholder="Enter your vehicle or machine Location" type="text">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                  
                            <label for="image" class="col-sm-3 col-form-label text-md-right">{{__('  Vehicle Image')}}</label>
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