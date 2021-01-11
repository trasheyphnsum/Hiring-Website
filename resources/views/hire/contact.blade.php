@extends('layout')
@section('content') 
<div class="row justify-content-center">
    <div class="col-4">
        <h1>Contact Us</h1>
        <p><strong>Got question? We would love to solve your problem. Send us a message and 
        we will repond as soon as possible</strong></p>
        <form method="get" action="contact">
        @csrf
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
            <div class="row-8">
            <p>Message</p><textarea name="message" rows="5" cols="57"></textarea><br/>
            </div>
            <br><button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>
@endsection