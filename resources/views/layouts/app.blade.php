<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partial.head')
</head>
<body>
    <div id="app">
       
       @include('layouts.partial.nav')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
