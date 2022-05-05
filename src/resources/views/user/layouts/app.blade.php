<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>multiauth app</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="uk-background-primary uk-light">
            <nav class="uk-navbar-container uk-navbar-transparent">
                <div class="uk-container">
                    <div class="uk-navbar" data-uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo" href="/">
                                {{ config('app.name', 'Laravel') }}
                            </a>

                            <ul class="uk-navbar-nav">
                                <li>
                                    <a href="#">Useful Links</a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-3" data-uk-grid>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li class="uk-nav-header">Laravel</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li class="uk-nav-header">UIkit</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li class="uk-nav-header">Vue.js</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <!-- Authentication Links -->
                                @guest
                                @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}">{{ __('Log In') }}</a>
                                </li>
                                @endif
                                @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <li>
                                    <a href="#">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('Log Out') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <main data-uk-height-viewport="expand: true">
            @yield('content')
        </main>

        <footer class="uk-section uk-section-xsmall uk-section-secondary">
            <div class="uk-container">
                <div class="uk-grid uk-text-center uk-text-left@s uk-flex-middle" data-uk-grid>
                    <div class="uk-text-small uk-text-muted uk-width-1-3@s">
                        Footer
                    </div>
                    <div class="uk-text-center uk-width-1-3@s">
                        Footer
                    </div>
                    <div class="uk-text-small uk-text-muted uk-text-center uk-text-right@s uk-width-1-3@s">
                        Footer
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>