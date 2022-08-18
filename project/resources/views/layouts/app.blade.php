<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Website Jastip</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    {{-- Loads Roboto --}}
    @googlefonts
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm nav-masthead">
            <div class="container">
                <nav class="navbar-brand">

                    <a class=>
                        <img src="https://e7.pngegg.com/pngimages/779/61/png-clipart-logo-idea-cute-eagle-leaf-logo.png"
                            width="60" height="50">
                    </a>
                </nav>
                <a>
                    <h1 class="navbar-verse" href="{{ url('') }}">
                        {{ config('app.name') }}
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="navbar-inverse">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="navbar-inverse">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="navbar-inverse">
                                    <a class="nav-link" aria-current="page" href="{{url('staff')}}">Halaman Staff</a>
                                </li>
                                <li class="navbar-inverse">
                                    <a class="nav-link" aria-current="page" href="{{url('kurir')}}">Halaman Kurir</a>
                                </li>
                                <li class="navbar-inverse">
                                    <a style="text-decoration:none" class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                        Logout
                                    </a>
                                    <form class="nav-link" id="frm-logout" action="{{ route('logout') }}" method="POST"
                                        style="text-decoration: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    <!-- </div> -->
                                </li>
                            </ul>
                        </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>