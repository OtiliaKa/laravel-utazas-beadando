@extends('layout')

@section('content')
<div class="container">

    <h1>Kapcsolat</h1>

    @auth
        @if(session('success'))
            <div style="color: green; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
        @endif

        <p>
            Bejelentkezve mint: <b>{{ auth()->user()->name }}</b> ({{ auth()->user()->email }})
        </p>

        <form action="{{ route('contact.store') }}" method="POST">
            @csrf

            <label>Üzenet:</label><br>
            <textarea name="message" rows="5" style="width: 100%;">{{ old('message') }}</textarea>
            @error('message')
                <div style="color:red;">{{ $message }}</div>
            @enderror

            <br><br>
            <button type="submit">Üzenet küldése</button>
        </form>
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

</div>
@endsection
