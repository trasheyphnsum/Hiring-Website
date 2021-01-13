@extends('layout')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
        @if(Session::get('message')=='equipment')
          <h2 class="text-center"> Equipment Available<h2>
        @else 
            <h2 class="text-center"> Machine/Vehicle Available<h2>
        @endif

            
        </div>
    </div>
    <div class="row mt-4">
    @foreach ($record as $re)
        <div class="col-md-4" style="margin-bottom:10px">
            <div class="card">
                <div class="card-body">
                    <img alt=""  class ="card-img-top"src="{{ URL::to('/') }}/images/{{$re['Image']}}" width="300px" height="200px">
                    @if(Session::get('message')=='equipment')
                    <h4 class="card-title text-center mb-4 mt-1">{{$re->Equipment_Type}}</h4>
                    @else
                    <h4 class="card-title text-center mb-4 mt-1">{{$re->Vehicle_Type}}</h4>
                    @endif
                    <hr>
                    <p class ="card-text">Email:{{$re->email}}</p>
                    <p class ="card-text">Phone Number:{{$re->Phone_Number}}</p>
                    <p class ="card-text">Renting Price:{{$re->Price}}</p>
                    <p class ="card-text">Condition:{{$re->Condition}}</p>
                    <p class ="card-text">Location:{{$re->Location}}</p>
                </div>
                <div class="text-right">
                <button type="submit" class="btn btn-primary btn-lg float-right" data-toggle="modal" data-target="#popUpWindow">Book</button>  
                </div>                  
            </div>
        </div>
    @endforeach
    </div>
    {{$record->links()}}
</div> 
<div class="container">
    <div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
        <div class="modal-content">
            <!-- header -->
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Reservation Form</h3>
            </div>
            <!-- body -->
            <div class="modal-header">
            <form role="form" method="post" action="">
                <div class="form-group">
                <input type="email" class="form-control" placeholder="Email"/>
                <input type="password" class="form-control" placeholder="Password" />
                </div>
            </form>
            </div>
            <!-- footer -->
            <div class="modal-footer">
            <button class="btn btn-primary btn-block">Log In</button>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection