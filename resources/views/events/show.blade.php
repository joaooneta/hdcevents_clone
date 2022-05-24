@extends('layouts.main')

@section('title', $event->title)

@section('content')

<img src="/img/events/{{ $event->image }}" alt="">
<p>{{ $event->title }}</p>
<p>{{ $event->description }}</p>
<p>{{ $event->city }}</p>
<p>{{ $event->image }}</p>
<p>Infraestrutura:</p>
@if ($event->items)
  @foreach ($event->items as $item)
    <p>{{ $item }}</p> 
  @endforeach
@else
  <p>Nenhum item incluso</p>
@endif

@endsection