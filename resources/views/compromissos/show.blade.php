@extends('base')
@section('content')
    @if (isset($msg))
        <h3 style="color: red">Compromisso não encontrado!</h3>
    @else
        <h2>Mostrando dados do compromisso</h2>
        <p><strong>Nome: </strong> {{ $compromisso->nome }} </p>
        <p><strong>Data: </strong> {{ $compromisso->data }} </p>
        <p><strong>Hora Inicio: </strong> {{ $compromisso->horaInicio }} </p>
        <p><strong>Hora Término: </strong> {{ $compromisso->horaFim }} </p>
        <p><strong>Local: </strong> {{ $compromisso->local }} </p>
        <p><strong>Status: </strong> {{ $compromisso->status }} </p>
        <p><strong>Observacoes: </strong> {{ $compromisso->observacoes }} </p>
        <a href="{{ route('compromissos.index') }}">Voltar</a>
    @endif
@endsection
