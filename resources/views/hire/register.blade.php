@extends('layout')
@section('content')
<h1>Post your detail here</h1>
<div class="col-sm-3">
    <form method="post" action="register">
    {{ @csrf_field() }}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name ="Name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name ="Email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label >Phone Number</label>
            <input type="phone" class="form-control" name="Phone_Number"  placeholder="Enter Phone Number">
        </div>
        <div class="form-group">
            <label >user Name</label>
            <input type="text" class="form-control" name="User_Name"  placeholder="Enter user name">
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" name="Password"  placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label >Retype password</label>
            <input type="password" class="form-control" name="retype_password"  placeholder="Enter password to confirm">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection