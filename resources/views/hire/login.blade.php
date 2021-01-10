@extends('layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-4">
    <h1>Login User</h1>
        <form method="post" action="login">
        {{ @csrf_field() }}
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name ="Email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control" name="Password"  placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary">sign in</button>
        </form>
    </div>
</div>
@endsection