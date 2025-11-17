@extends('layout')

@section('title', 'Adatbázis')

@section('content')
<!-- Helységek -->
<article>
    <header class="major">
        <h2>Helységek</h2>
        <p>Fedezze fel célállomásainkat</p>
    </header>
    
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Azonosító</th>
                    <th>Név</th>
                    <th>Ország</th>
                </tr>
            </thead>
            <tbody>
                @foreach($helysegek as $helyseg)
                <tr>
                    <td>{{ $helyseg->az }}</td>
                    <td>{{ $helyseg->nev }}</td>
                    <td>{{ $helyseg->orszag }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</article>

<!-- Szállodák -->
<article>
    <header>
        <h2>Szállodák</h2>
        <p>Válassza ki álmai szállodáját</p>
    </header>
    
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Kód</th>
                    <th>Név</th>
                    <th>Csillag</th>
                    <th>Helység</th>
                    <th>Tengerpart távolsága</th>
                    <th>Repülőtér távolsága</th>
                    <th>Félpanzió</th>
                </tr>
            </thead>
            <tbody>
                @foreach($szallodak as $szalloda)
                <tr>
                    <td>{{ $szalloda->az }}</td>
                    <td>{{ $szalloda->nev }}</td>
                    <td>{{ $szalloda->besorolas }} ⭐</td>
                    <td>{{ $szalloda->helyseg->nev }}</td>
                    <td>{{ $szalloda->tengerpart_tav }} m</td>
                    <td>{{ $szalloda->repter_tav }} km</td>
                    <td>{{ $szalloda->felpanzio ? 'Igen' : 'Nem' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</article>

<!-- Árak -->
<article>
    <header>
        <h2>Árak</h2>
        <p>Legfrissebb tavaszi ajánlataink</p>
    </header>
    
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Szálloda</th>
                    <th>Indulás</th>
                    <th>Időtartam (nap)</th>
                    <th>Ár (Ft)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($arak as $ar)
                <tr>
                    <td>{{ $ar->szalloda->nev }}</td>
                    <td>{{ $ar->indulas }}</td>
                    <td>{{ $ar->idotartam }}</td>
                    <td>{{ number_format($ar->ar, 0, ',', ' ') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</article>
@endsection