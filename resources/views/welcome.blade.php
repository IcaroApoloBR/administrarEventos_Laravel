@extends('layouts.main')

@section('title', 'Dev Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque por um Evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Eventos em Destaque</h2>
    <p class="subtitle">Veja os Eventos dos Próximos Dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d-m-Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X Presenças Confirmadas</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0)
            <p>Não há eventos disponíveis até o momento</p>
        @endif
    </div>
</div>

@endsection