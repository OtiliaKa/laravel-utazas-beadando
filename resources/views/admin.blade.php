@extends('layout')

@section('title', 'Profil')

@section('content')

<article class="post featured">
    <header class="major">
        <span class="text" href="profil"><h1>Admin felület</h1></span>
    </header>

    @auth

        <h2>Üzenetek</h2>
        @foreach($messages as $message)
        <div style="background-color: rgba(54, 162, 235, 0.2); padding: 10px; margin:10px;">
            <p>{{$message->name}} - {{$message->email}}</p>
            <p>{{$message->message}}</p>
            <small>
                {{$message->created_at->format('Y-m-d H:i')}}
            </small>
        </div>
        @endforeach

        <form action="/logout" method="POST">
            @csrf
        <button type="submit" class="button large">Kijelentkezés</button>

    @else
   
            <ul class="actions special">
            <li><form action="/login" method="POST">
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
        </li>
</article>

@endauth

@endsection