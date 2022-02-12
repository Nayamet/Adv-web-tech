@extends('Layout.loggedin')
@section('content1')
<h1>List</h1>
<table style="border">
    <tr>
        <th>name</th>
        <th>id</th>
        <th>dp</th>
    </tr>
    @foreach($students as $s)
    
        <tr>
            <td><a href="{{route('student.details',['id'=>$s->id,'name'=>$s->name])}}">{{$s->name}}</a></td>
            <td>{{$s->id}}</td>
            <td>{{$s->dp}}</td>
        </tr>
    @endforeach
</table>
@endsection