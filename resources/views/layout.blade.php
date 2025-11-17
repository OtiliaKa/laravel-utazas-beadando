<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title') - Napfény Tours</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">


<div id="wrapper" class="fade-in">


    <header id="header">
        <a href="{{ url('/') }}" class="logo">Napfény Tours</a>
    </header>

    
    <nav id="nav">
        <ul class="links">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Főoldal</a></li>
            <li class="{{ Request::is('database') ? 'active' : '' }}"><a href="{{ url('/database') }}">Adatbázis</a></li>
            <li class="{{ Request::is('chart') ? 'active' : '' }}"><a href="{{ url('/chart') }}">Diagram</a></li>
            <li class="{{ Request::is('crud') ? 'active' : '' }}"><a href="{{ url('/crud') }}">CRUD</a></li>
            
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Kapcsolat</a></li>
            <li class="{{ Request::is('messages') ? 'active' : '' }}"><a href="{{ url('/messages') }}">Üzenetek</a></li>
            <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ url('/admin') }}">Admin</a></li>
        </ul>
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
        </ul>
    </nav>

    
    <div id="main">
        
        @if(session('success'))
            <div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 10px; margin: 10px 0; border: 1px solid #c3e6cb;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger" style="background: #f8d7da; color: #721c24; padding: 10px; margin: 10px 0; border: 1px solid #f5c6cb;">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </div>

    
    <footer id="footer">
        <section>
            <h3>Napfény Tours Utazási Iroda</h3>
            <p>Az álmok utazási irodája - 2011 óta biztosítjuk a legjobb utazási élményeket Tunéziában és Egyiptomban</p>
        </section>
        <section>
            <h3>Elérhetőség</h3>
            <ul class="icons alt">
                <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
            </ul>
        </section>
    </footer>

    
    <div id="copyright">
        <ul><li>&copy; Napfény Tours</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
    </div>

</div>


<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

@yield('scripts')
</body>
</html>