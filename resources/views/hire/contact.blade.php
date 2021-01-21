@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Feedback') }}</div>
                <p class="text-primary text-center"> <strong>Got question? We would love to solve your problem. Send us a message and 
                     we will repond as soon as possible</strong></p>
                    <div class="card-body">
                        <form method="post" action="/contact" enctype="multipart/form-data">
                        {{ @csrf_field() }}
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label text-md-right">{{__('Email')}}</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name ="Email1" placeholder="Enter Email">
                            </div> 
                        </div> 

                        <div class="form-group row">
                            <label for="PhoneNumber" class="col-sm-3 col-form-label text-md-right">{{__('Phone Number')}}</label>
                            <div class="col-md-6">
                                <input type="Phone" class="form-control" name ="Phone_Number" placeholder="Enter your Phone number">
                            </div> 
                        </div> 

                            <label for="message" class="col-sm-3 col-form-label text-md-right">Message</label>
                            <div class="col-md-6">
                                <textarea name="message"  row="7"></textarea>
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