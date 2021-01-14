@extends('layout')
@section('content')
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show">
    {{Session::get('status') }}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif
<div class="col d-flex justify-content-center">
    <aside class="col-sm-5">
        <div class="card">
        <article class="card-body">
            <h4 class="card-title text-center mb-4 mt-1">Sign up</h4>
            <hr>
            <p class="text-success text-center">Some message goes here</p>
            <form method="POST" action="register">
            {{ @csrf_field() }}
            <div class="form-group">
            <div class="input-group">
                <label for="Name" class="col-sm-3 col-form-label">Name</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input type="text" class="form-control" name ="Name" placeholder="Enter name">
            </div> 
            </div> 

            <div class="form-group">
            <div class="input-group">
                <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input type="email" class="form-control" name ="Email" placeholder="Enter Email">
            </div> 
            </div> 

            <div class="form-group">
            <div class="input-group">
                <label for="PhoneNumber" class="col-sm-3 col-form-label">Phone No.</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input type="Phone" class="form-control" name ="Phone_Number" placeholder="Enter your Phone number">
            </div> 
            </div> 

            <div class="form-group">
            <div class="input-group">
                <label for="UserName" class="col-sm-3 col-form-label">User name</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input type="text" class="form-control" name ="User_Name" placeholder="Enter User name">
            </div> 

            </div>
            <div class="form-group">
                <div class="input-group">
                <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" name="Password" placeholder="******" type="password">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                <label for="inputPassword" class="col-sm-3 col-form-label"> Confirm</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" name="retype_password" placeholder="Once more type Again Your password" type="password">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg float-right">Sign up</button>
            </div>
            </form>
        </article>
        </div> 
    </aside> 
</div>
@endsection