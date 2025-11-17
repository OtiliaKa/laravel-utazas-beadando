@extends('layout')

@section('title', 'Főoldal')

@section('content')

<article class="post featured">
    <header class="major">
        <span class="date">2024</span>
        <h2><a href="#">Üdvözöljük a<br />
        Napfény Tours oldalán</a></h2>
        <p>Az álmok utazási irodája - 2011 óta biztosítjuk a legjobb utazási élményeket Tunéziában és Egyiptomban</p>
    </header>
    <a href="#" class="image main"><img src="{{ asset('assets/images/main_travel.jpg') }}" alt="Utazás" /></a>
    <ul class="actions special">
        <li><a href="{{ url('/database') }}" class="button large">Fedezd fel ajánlatainkat</a></li>
    </ul>
</article>


<section class="posts">
    <article>
        <header>
            <span class="date">Tunézia</span>
            <h2><a href="#">Sousse<br />
            aranyparti élmény</a></h2>
        </header>
        <a href="#" class="image fit"><img src="{{ asset('assets/images/sousse.jpg') }}" alt="Sousse" /></a>
        <p>Fedezze fel Sousse csodálatos partszakaszát és gazdag történelmét. Ideális választás családoknak és pároknak egyaránt.</p>
        <ul class="actions special">
            <li><a href="{{ url('/database') }}" class="button">Részletek</a></li>
        </ul>
    </article>
    <article>
        <header>
            <span class="date">Egyiptom</span>
            <h2><a href="#">Sharm El Sheikh<br />
            korallzátonyok</a></h2>
        </header>
        <a href="#" class="image fit"><img src="{{ asset('assets/images/sharm_el_sheikh.jpg') }}" alt="Sharm El Sheikh" /></a>
        <p>Merüljön el a Vörös-tenger csodálatos vízi világában. Búvárkodás, napfény és kiváló szállodák várnak.</p>
        <ul class="actions special">
            <li><a href="{{ url('/database') }}" class="button">Részletek</a></li>
        </ul>
    </article>
    <article>
        <header>
            <span class="date">Tunézia</span>
            <h2><a href="#">Djerba<br />
            szigeti paradicsom</a></h2>
        </header>
        <a href="#" class="image fit"><img src="{{ asset('assets/images/djerba.jpg') }}" alt="Djerba" /></a>
        <p>Djerba szigete az álmok választása. Családias hangulat, gyönyörű strandok és autentikus tunéziai kultúra.</p>
        <ul class="actions special">
            <li><a href="{{ url('/database') }}" class="button">Részletek</a></li>
        </ul>
    </article>
    <article>
        <header>
            <span class="date">Egyiptom</span>
            <h2><a href="#">Hurghada<br />
            tengerparti kikapcsolódás</a></h2>
        </header>
        <a href="#" class="image fit"><img src="{{ asset('assets/images/hurghada.jpg') }}" alt="Hurghada" /></a>
        <p>Hurghada a Vörös-tenger gyöngye. Vízi sportok, éjszakai élet és felejthetetlen naplementék.</p>
        <ul class="actions special">
            <li><a href="{{ url('/database') }}" class="button">Részletek</a></li>
        </ul>
    </article>
</section>


<footer>
    <div class="pagination">
        <a href="#" class="previous">Prev</a>
        <a href="#" class="page active">1</a>
        <a href="#" class="page">2</a>
        <a href="#" class="page">3</a>
        <span class="extra">&hellip;</span>
        <a href="#" class="page">8</a>
        <a href="#" class="page">9</a>
        <a href="#" class="page">10</a>
        <a href="#" class="next">Next</a>
    </div>
</footer>
@endsection