<h1>Data Lists</h1>

<!-- {{print_r($data)}}  array format-->
<!--to get readable format-->
<ul>
@foreach($data as $item)
<li><h3>{{ $item ['title'] }}</h3> <p>{{ $item ['body'] }}</p></li>
@endforeach
</ul>