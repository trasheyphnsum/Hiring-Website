@extends('layout')
@section('content')
<div class="row justify-content-center">
    <aside class="col-sm-5">
        <div class="card">
        <article class="card-body">
            <h4 class="card-title text-center mb-4 mt-1">Feedback</h4>
            <hr>
            <p class="text-primary text-center"> <strong>Got question? We would love to solve your problem. Send us a message and 
            we will repond as soon as possible</strong></p>
            <form method="POST" action="contact">
            @csrf
            <div class="form-group">
            <div class="input-group">
                <label for="staticEmail" class="col-sm-3 col-form-label">Name</label>
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
                <label for="staticEmail" class="col-sm-3 col-form-label">Phone No.</label>
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input type="Phone" class="form-control" name ="Phone_Number" placeholder="Enter your Phone number">
            </div> 
            </div> 
            <div class="form-group">
            <div class="input-group">
                <label for="staticEmail" class="col-sm-3 col-form-label">Message</label>
                <textarea name="message" class="col-sm-9" row="7"></textarea><br/>
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