@extends('layout')

@section('title', 'Helység Szerkesztése')

@section('content')
<article>
    <header class="major">
        <h2>Helység Szerkesztése</h2>
        <p>Módosítsa a helyszín adatait</p>
    </header>

    <form method="POST" action="/crud/{{ $helyseg->az }}">
        @csrf
        @method('PUT')
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <label for="az">Azonosító</label>
                <input type="number" name="az" id="az" value="{{ $helyseg->az }}" readonly>
            </div>
            <div class="col-6 col-12-xsmall">
                <label for="nev">Név</label>
                <input type="text" name="nev" id="nev" value="{{ $helyseg->nev }}" required>
            </div>
            <div class="col-12">
                <label for="orszag">Ország</label>
                <input type="text" name="orszag" id="orszag" value="{{ $helyseg->orszag }}" required>
            </div>
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Frissítés" class="primary"></li>
                    <li><a href="{{ route('crud.index') }}" class="button">Vissza</a></li>
                </ul>
            </div>
        </div>
    </form>
</article>
@endsection