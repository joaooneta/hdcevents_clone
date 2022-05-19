@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
  <h1>Crie o seu evento</h1>

  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
      <label for="image">Imagem do evento</label>
      <input type="file" name="image" id="image">
    </div>
    <div>
      <label for="title">Evento</label>
      <input type="text" name="title" id="title" placeholder="Nome do evento">
    </div>
    <div>
      <label for="city">Cidade</label>
      <input type="text" name="city" id="city" placeholder="Cidade do evento">
    </div>
    <div>
      <label for="private">Privado</label>
      <select name="private" id="private">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div>
      <label for="description">Descrição</label>
      <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrição do evento"></textarea>
    </div>
    <input type="submit" value="Criar evento">
  </form>
@endsection