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
            <h4 class="card-title text-center mb-4 mt-1">You can post document(Technician) here</h4>
            <hr>
            <form method="post" action="/tech" enctype="multipart/form-data">
            {{ @csrf_field() }}

            <div class="form-group">
            <div class="input-group">
                <label for="Experienceskill" class="col-sm-3 col-form-label">Experience/Skill</label>
                <input type="text" class="form-control" name ="Experience" placeholder="Enter  Your Experience  or skill">
            </div> 
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
                <label for="technician" class="col-sm-3 col-form-label">Technician Type </label>
                <input class="form-control" name="Location" placeholder="Enter Expertise " type="text">
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
                <label for="certificate" class="col-sm-3 col-form-label">Certificate</label>
                <input class="form-control" type="file" class="form-control-file" name="certificate">
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