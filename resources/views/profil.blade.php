@extends('layout')

@section('title', 'Profil')

@section('content')


<article class="post featured">
    <header class="major">
        <span class="text" href="profil"><h1>profil</h1></span>
    </header>
        
    @auth

            <small>Üdvözlöm, <b>{{ auth()->user()->name }}</b><small>
        <form action="/logout" method="POST">
            @csrf
        <button type="submit" class="button large" style="margin: 10px" >Kijelentkezés</button>
    </form>

        <a href="messages">
             @csrf

    @else
   
            <ul class="actions special">
            <li>
                <form method="POST" action="/profil">
                    @csrf
                <input type="text" name="email" placeholder="E-mail cím">
                <input type="password" name="password" placeholder="Jelszó">

                <!-- Extra mező csak regisztrációhoz: elrejthető és csak akkor értelmezhető, ha a regisztráció gombot nyomják -->
                <input type="text" name="name" placeholder="Név">

                <button type="submit" name="action" value="login">Bejelentkezés</button>
                <button type="submit" name="action" value="register">Regisztráció</button>


                 @if ($errors->has('email'))
                    <p style="color: red;">{{ $errors->first('email') }}</p>
                @endif

                @if ($errors->has('password'))
                    <p style="color: red;">{{ $errors->first('password') }}</p>
                @endif


            </form>

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
               <!-- <form action="/login" method="POST">
                @csrf
                <input name='email' type="text" placeholder="E-mail cím" required><br>
                <input name='password' type="password" placeholder="Jelszó" required><br>

                @if ($errors->has('email'))
                    <p style="color: red;">{{ $errors->first('email') }}</p>
                @endif

                @if ($errors->has('password'))
                    <p style="color: red;">{{ $errors->first('password') }}</p>
                @endif

                <button type="submit" class="button large">Bejelentkezés</button>
                    <h2><a href="logged-in"></a><h2>
            </form></li>
    </ul>

             <ul class="actions special">
        <li>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="Név" required><br>
                <input name="email" type="email" placeholder="E-mail cím" required><br>
                <input name="password" type="password" placeholder="Jelszó" required><br>
                @if ($errors->any())
                    <ul style="color: red;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <button type="submit" class="button large">Regisztráció</button>

            </form>
        </li>-->
</article>

@endauth

@endsection