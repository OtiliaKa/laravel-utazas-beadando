@extends('layout')

@section('title', 'Új Helység')

@section('content')
<article>
    <header class="major">
        <h2>Új Helység Létrehozása</h2>
        <p>Adja meg az új helyszín adatait</p>
    </header>

    <form method="POST" action="{{ route('crud.store') }}">
        @csrf
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <label for="az">Azonosító</label>
                <input type="number" name="az" id="az" value="{{ old('az') }}" required>
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="nev">Név</label>
                <input type="text" name="nev" id="nev" value="{{ old('nev') }}" required>
            </div>
            <div class="col-12">
                <label for="orszag">Ország</label>
                <input type="text" name="orszag" id="orszag" value="{{ old('orszag') }}" required>
            </div>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Mentés" class="primary"></li>
                    <li><a href="{{ route('crud.index') }}" class="button">Vissza</a></li>
                </ul>
            </div>
        </div>
    </form>
</article>
@endsection