@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <!-- SECTION SEARCH -->
    <section class="section-search">
        <div class="search-container">
            <h1 class="heading heading-primary">Busque um evento</h1>
            <form class="search-form" action="">
                <input type="text" name="search" id="search" label="Procure um evento">
            </form>
        </div>
    </section>

    <!-- SECTION EVENTS -->
    <section class="section-events">
        <div class="container">
            <h2 class="heading heading-secondary">Próximos Eventos</h2>
            <h3 class="heading heading-terciary">Veja os eventos dos próximos dias</h3>
        </div>
    </section>
    @foreach ($events as $event)
        <p>{{ $event->title }}</p>
        <p>{{ $event->description }}</p>
        <p>{{ $event->city }}</p>
        <br>
    @endforeach
@endsection