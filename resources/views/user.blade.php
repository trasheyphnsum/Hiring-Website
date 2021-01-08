<!--if-else-->
<!--@if($data['name']=='Tashi')
<h2>Same user</h2>
@else
<h2>Other user</h2>
@endif-->

<!--foreach
@foreach($data as $key=> $item)
<h3>{{$key}}:{{ $item}}</h3>
@endforeach
-->
<!--for loop
@for($i= 1; $i<10; $i++)
    <p> Current value is {{$i}}</p>
@endfor
-->

<!--<form action="UserController" method="post">
    <input type="text" name="email" placeholder="Email">
    <br>
   @error('email')
    <span style="color:red" >{{$message}}</span>
    @enderror
    <br>
    <br>
    <input type="text" placeholder="Password" name="password">
    <br>
    @error('password')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>
    <br>
    {{@csrf_field()}}
    <button type="submit">Submit</button>
</form>-->
<!--{{$data['name']}}-->
@extends('header')
<h1>How to use Csrf and put method</h1>
<form>
@csrf
@method('PUT')
</form>

<x-profile/>