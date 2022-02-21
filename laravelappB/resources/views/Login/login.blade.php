@extends('Layout.loggedin')
@section('content2')
<html>
    <br>
        <form action="{{route('login.submit')}}" method="Post">
            {{@csrf_field()}}
           
            <input type="text" name="username" value="{{old('username')}}" placeholder="Username"><br>
            @error('username')
                <span class="text-danger">{{$message}}</span><br>
            @enderror
            

            <input type="password" name="password" placeholder="Password"><br>
            @error('password')
                <span class="text-danger">{{$message}}</span><br>
            @enderror
            
            <input type="submit" value ="Login">
        </form>

</html>
@endsection