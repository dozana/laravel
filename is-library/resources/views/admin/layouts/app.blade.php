<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.partials.head')
</head>
<body>

<div id="app">
    @include('admin.partials.nav')

    <main class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4">
                    @include('admin.partials.sidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>

    @include('admin.partials.footer')
</div>

@yield('js')

</body>
</html>
