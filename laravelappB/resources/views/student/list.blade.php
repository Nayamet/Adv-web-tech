@extends('Layout.loggedin')
@section('content1')
<h1>List</h1>
<table class="table table-bordered table-hover text-center">
    <tr>
        <th>name</th>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th>created_at</th>
    </tr>
    @foreach($students as $s)
    
        <tr>
            <td><a href="{{route('student.details',['id'=>$s->id,'name'=>$s->name])}}">{{$s->name}}</a></td>
            <td>{{$s->id}}</td>
            <td>{{$s->username}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->created_at}}</td>
        </tr>
    @endforeach
</table>
@endsection