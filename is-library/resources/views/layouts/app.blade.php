<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body>

<div id="app">
    @include('partials.nav')

    <main class="py-4">
        @yield('content')
    </main>

    @include('partials.footer')
</div>

@yield('js')

</body>
</html>
