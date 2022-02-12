
<html lang="en">
    <head>
        
    </head>
    <body>
        <div id="header">
            <a href="{{route('student.list')}}">List</a>
            <a href="{{route('student.create')}}">Create</a>
            <a href="{{route('student.get')}}">Get</a>
        </div>
        @yield('content1')
        @yield('content2')
        <div id="footer">@copy; adv. web spring 2022;  Nayamet Ullah</div>
    </body>
</html>