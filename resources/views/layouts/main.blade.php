<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL APP</title>
</head>
<body>
    <div>
        <div>
            <nav>
                <ul>
                    <li><a href="{{route('about.index')}}">About</a></li>
                    <li><a href="{{route('main.index')}}">Main</a></li>
                    <li><a href="{{route('post.index')}}">Posts</a></li>
                </ul>
            </nav>
        </div>
        @yield('content')
    </div>
</body>
</html>