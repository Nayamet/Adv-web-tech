
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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