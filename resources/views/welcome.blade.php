@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <!-- SECTION SEARCH -->
    <section class="section-search">
        <div class="search-container">
            <h1 class="heading heading-primary">Busque um evento</h1>
            <form class="search-form" action="/" method="GET">
                <input type="text" name="search" id="search" label="Procure um evento">
            </form>
        </div>
    </section>

    <!-- SECTION EVENTS -->
    <section class="section-events">
        <div class="container">
            @if($search)
                <h2 class="heading heading-secondary">Buscando por {{ $search }}</h2>
            @else
                <h2 class="heading heading-secondary">Próximos Eventos</h2>
            @endif
            <h3 class="heading heading-terciary">Veja os eventos dos próximos dias</h3>
        </div>
    </section>
    @foreach ($events as $event)
        <p>{{ $event->title }}</p>
        <p>{{ date('d/m/Y',  strtotime($event->date)) }}</p>
        <p>{{ $event->description }}</p>
        <p>{{ $event->city }}</p>
        <p>{{ $event->image }}</p>
        <a href="/events/{{ $event->id }}">Saber mais</a>
        <br><br>
    @endforeach
    @if (count($events) == 0 && $search)
        <p>Nenhum evento encontrado com o título {{ $search }}, <a href="/">Visualizar todos os eventos</a></p>
    @elseif(count($events) == 0)
        <p>Nenhum evento registrado</p>
    @endif
@endsection