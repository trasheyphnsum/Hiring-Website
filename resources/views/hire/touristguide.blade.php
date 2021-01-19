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
                        <form method="post" action="" enctype="multipart/form-data">
                        {{ @csrf_field() }}
                        <div class="form-group row">
                            <label for="experience" class="col-sm-3 col-form-label text-md-right">{{__('Experience')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name ="experience" placeholder="Enter your experience">
                            </div> 
                        </div> 

                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label text-md-right">{{__('Type of Guides')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name ="Qualification" placeholder="Enter guide types">
                            </div> 
                        </div> 

                        <div class="form-group row">
                            <label for="qualification" class="col-sm-3 col-form-label text-md-right">{{__('Qualification')}}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name ="Qualification" placeholder="Enter your Qualification">
                            </div> 
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
                  
                            <label for="image" class="col-sm-3 col-form-label text-md-right">{{__('Certificate Image')}}</label>
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