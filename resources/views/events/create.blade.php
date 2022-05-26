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
      <label for="date">Data</label>
      <input type="date" name="date" id="date">
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
    <div>
      <label for="items">Infraestrutura:</label>
      <div><input type="checkbox" name="items[]" id="items" value="Cadeiras">Cadeiras</div>
      <div><input type="checkbox" name="items[]" id="items" value="Palco">Palco</div>   
      <div><input type="checkbox" name="items[]" id="items" value="Refrigerante grátis">Refrigerante grátis</div>
      <div><input type="checkbox" name="items[]" id="items" value="Open food">Open food</div>        
    </div>
    <input type="submit" value="Criar evento">
  </form>
@endsection