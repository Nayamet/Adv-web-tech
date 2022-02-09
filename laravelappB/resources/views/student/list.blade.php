<h1>List</h1>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>dp</th>
    </tr>
    @foreach($students as $s)
    
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->dp}}</td>
        </tr>
    @endforeach
</table>