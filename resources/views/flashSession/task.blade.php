<h3>Submit a Form</h3>
<h4>{{session('status')}}</h4>
<form action="tasks" method="post">
    <input type="text" name="email" placeholder="Email">
    <br>
   <!--@error('email')
    <span style="color:red" >{{$message}}</span>
    @enderror
    <br>-->
    <br>
    <input type="text" placeholder="Password" name="password">
    <br>
    <!--
        @error('password')
    <span style="color:red">{{$message}}</span>
    @enderror
    <br>-->
    <br>
    <button type="submit">Login</button>
    <!--{{ @csrf_field() }} OR
    -->
    @csrf <!-- will authentcate the user -->
</form>