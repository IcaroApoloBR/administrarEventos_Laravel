@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $event->title }}</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" class="form-control-file" id="image" name="image">
        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value="{{ $event->title }}">
    </div>
    <div class="form-group">
      <label for="date">Data do Evento:</label>
      <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
    </div>
    <div class="form-group">
      <label for="title">Localização:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" value="{{ $event->city }}">
    </div>
    <div class="form-group">
      <label for="title">Evento Privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não, o evento será aberto ao público</option>
        <option value="1" {{ $event->private == 1 ? "selected='selected'" : ""}}>Sim, apenas aos convidados e colaboradores</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no Evento?" value="{{ $event->description }}"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Adicione itens de Infraestrutura:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Palco"> Palco
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cerveja Gratis"> Cerveja Grátis
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Open Food"> Open Food
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Brindes"> Brindes
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Alterar Evento">
  </form>
</div>

@endsection