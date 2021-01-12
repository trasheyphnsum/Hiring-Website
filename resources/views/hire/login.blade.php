@extends('layout')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">User Login</h1>
    <div class="row justify-content-center">
        <div class="col-4">
            <form method="post" action="login">
                {{ @csrf_field() }}
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name ="Email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" name="Password"  placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-primary">sign in</button>
            </form> 
            <p>Not a member? <a href="/register">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>  
        </div>
    </div> 
    </div>
</div>
@endsection