@extends('Layout.loggedin')
@section('content1')
<h1>Get</h1>
<h3>Name : {{$name}}</h3>
<h3>Id : {{$id}}</h3>

<ol>
    @for($i=0;$i<count($courses);$i++)
    <li>{{$courses[$i]}}</li>
    @endfor

</ol>
<ul>
    @foreach($courses as $c)
    <li>{{$c}}</li>
    @endforeach
</ul>
@endsection