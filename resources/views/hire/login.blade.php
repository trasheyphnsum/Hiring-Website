@extends('layout')
@section('content')
<h1>Post your detail here</h1>
<div class="col-sm-3">
    <form method="post" action="register">
    {{ @csrf_field() }}
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name ="Email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" class="form-control" name="Password"  placeholder="Enter Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection