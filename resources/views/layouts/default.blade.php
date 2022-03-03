<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle') | DC COMICS</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <header>
        {{-- includo la navbar --}}
        @include('partials/navbar')
    </header>
    <div class="jumbotron"></div>
    <main>
        @yield('content')
    </main>
    <footer>
        {{-- includo il footer --}}
        @include('partials.footer')
    </footer>
</body>

</html>