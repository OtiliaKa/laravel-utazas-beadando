@extends('layout')

@section('title', 'CRUD')

@section('content')
<article>
    <header class="major">
        <h2>Helységek Kezelése</h2>
        <p>CRUD műveletek a helységek táblán</p>
    </header>

    <!-- Siker üzenet -->
    @if(session('success'))
    <div style="background: #d4edda; color: #155724; padding: 15px; margin: 20px 0; border: 1px solid #c3e6cb; border-radius: 5px;">
        ✅ {{ session('success') }}
    </div>
    @endif

    <!-- Új gomb -->
    <div style="margin-bottom: 20px;">
        <a href="{{ route('crud.create') }}" class="button primary" style="margin-bottom: 20px;">➕ Új Helység</a>
    </div>

    <!-- Táblázat -->
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Név</th>
                    <th>Ország</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <tbody>
                @foreach($helysegek as $helyseg)
                <tr>
                    <td><strong>{{ $helyseg->az }}</strong></td>
                    <td>{{ $helyseg->nev }}</td>
                    <td>{{ $helyseg->orszag }}</td>
                    <td style="white-space: nowrap;">
                        <!-- Szerkesztés gomb -->
                        <a href="{{ route('crud.edit', $helyseg->az) }}" class="button small" style="background: #4CAF50; color: white; margin-right: 5px;">
                            ✏️ Szerkesztés
                        </a>
                        
                        <!-- Törlés gomb -->
                        <form action="{{ route('crud.destroy', $helyseg->az) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button small" style="background: #f44336; color: white;" 
                                    onclick="return confirm('Biztos törlöd: {{ $helyseg->nev }}?')">
                                🗑️ Törlés
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Információ -->
    <div style="margin-top: 30px; padding: 15px; background: #f8f9fa; border-radius: 5px;">
        <h4>📊 Összesen: {{ $helysegek->count() }} helység</h4>
        <p>Használd a Szerkesztés gombot a módosításhoz, vagy a Törlés gombot az eltávolításhoz.</p>
    </div>
</article>
@endsection