@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Cadastre o seu Evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" class="form-control-file" id="image" name="image">
      </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
    </div>
    <div class="form-group">
      <label for="title">Localização:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
    </div>
    <div class="form-group">
      <label for="title">Evento Privado?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não, o evento será aberto ao público</option>
        <option value="1">Sim, apenas aos convidados e colaboradores</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no Evento?"></textarea>
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
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection