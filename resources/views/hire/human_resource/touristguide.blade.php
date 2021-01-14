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
            <h4 class="card-title text-center mb-4 mt-1">You can post document here</h4>
            <hr>
            <form method="post" action="{{route('add_equipment')}}" enctype="multipart/form-data">
            {{ @csrf_field() }}

            <div class="form-group">
            <div class="input-group">
                <label for="Experience" class="col-sm-3 col-form-label">Experience</label>
                <input type="text" class="form-control" name ="Experience" placeholder="Enter Experience">
            </div> 
            </div>

            <div class="form-group">
            <div class="input-group">
                <label for="Skill" class="col-sm-3 col-form-label">Skill</label>
                <input type="text" class="form-control" name ="Skill" placeholder="Enter Skill">
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
                <input class="form-control" name="Condition" placeholder="Enter your asset condition" type="tetx">
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
                <label for="image" class="col-sm-3 col-form-label">Image asset</label>
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