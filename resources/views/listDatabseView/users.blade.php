<h1> User List</h1>

<!--<li>
    <span>Name</span> 
    <span>Details</span>
 </li>
 @foreach( $data as $item)
 <li>
    <span>{{$item->name}}</span> 
    <span>{{$item->detail}}</span>
 </li>
 @endforeach



 <style>
 span{
    color: blue;
    display: inline-block;
    width:100px;
    background-color:bisque;
    margin-bottom:3px;
    margin-left:5px;
    padding: 10px;
 }
 li{
    list-style: none;
 }
 span:irst-child{ 

 }
 </style>-->
 <table>
 @foreach( $data as $item)
 <tr>
   <td>{{$item ->name}}</td>
   <td>{{$item ->detail}}</td>
 </tr>
 @endforeach
 </table>

 {{$data->links()}}

 <style>
 td{
    color: blue;
    background-color:bisque;
    padding: 10px;
 }
 li{
    list-style: none;
    display:none;
 }
 </style>