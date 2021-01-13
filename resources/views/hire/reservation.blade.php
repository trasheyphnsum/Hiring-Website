@extends('layout')
@section('content')
<div class="card hovercard">
    <div class="cardheader">               
		<div class="avatar">
            @foreach ($record as $re)
                <img alt="" src="{{ URL::to('/') }}/images/{{$re['Image']}}">
            @endforeach
		</div>
	</div>
</div>

<aside class="col-sm-5">
        <div class="card">
        <article class="card-body">
            <h4 class="card-title text-center mb-4 mt-1">Sign in</h4>
            <hr>
            <p class="text-success text-center">Some message goes here</p>
            <form  method="POST" action="login">
            {{ @csrf_field() }}
            <div class="form-group">
            <div class="input-group">
                <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Email or login" type="email">
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
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Login  </button>
                    <div> 
                    </div>                     
                </div>
            </div>
            <p class="text-right"><a href="#" class="btn">Forgot password?</a></p>
            </form>
        </article>
        </div> 
    </aside> 
@endsection