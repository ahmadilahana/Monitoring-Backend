<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
    <title>@yield('title')</title>
</head>
<body>

    @if (Auth::user())
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">My Artikel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link btn btn-outline-info mr-2" href="/artikel">Home</a>
                        <a class="nav-link btn btn-outline-info mr-2" href="/artikel/daftar">Daftar Artikel</a>
                        <form action="{{ route('logout')}}" method="post">
                            @csrf
                            <button type="submit" class="nav-link btn btn-outline-info"> Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    @endif
        
        @yield('content')
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="{{ asset('/js/bootstrap.js')}}"></script>
</body>
</html>