@extends('layout')

@section('title', 'Üzenetek küldése')

@section('content')

<article class="post featured">
    <header class="major">
        <span class="date">üzenetek</span>
        <!--<h2><a href="#">Üzenetek küldése</a></h2>-->
        <p>Itt találja az elküldött üzeneteit</p>
    </header>

    @auth
        @foreach($messages as $message)
        <div style="background-color: rgba(54, 162, 235, 0.2); padding: 10px; margin:10px;">
            <p>{{$message->name}} - {{$message->email}}</p>
            <p>{{$message->message}}</p>

        <small>
            {{$message['created_at']->format('Y-m-d H:i')}}
        </small>

        </div>
        @endforeach


    @else
        <p>Üzenet küldéséhez jelentkezzen be!</p>
        <form action="/profil" method="POST">
            @csrf
            <input type="hidden" name="redirect_to" value="{{ url()->current() }}">
            <input name='email' type="text" placeholder="E-mail cím" required><br>
            <input name='password' type="password" placeholder="Jelszó" required><br>
            @if ($errors->has('email'))
                <p style="color: red;">{{ $errors->first('email') }}</p>
            @endif
            @if ($errors->has('password'))
                <p style="color: red;">{{ $errors->first('password') }}</p>
            @endif
            <button type="submit" name="action" value="login">Bejelentkezés</button>
        </form>
    @endauth
</article>

@endsection