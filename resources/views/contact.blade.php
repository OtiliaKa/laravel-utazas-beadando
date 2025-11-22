@extends('layout')

@section('content')
<div class="container">

    <h1>Kapcsolat</h1>

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

</div>
@endsection
