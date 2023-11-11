<!DOCTYPE html>
<html>

<head>
    <title>Task List App</title>
    @yield('style')
</head>

<body>
    <h1>@yield('title')</h1>
    <div>
        @if (session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
