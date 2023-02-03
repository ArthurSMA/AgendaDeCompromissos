@extends('base')
@section('content')
    <h2>Atualizar um Compromisso</h2>
    <form class="form" id="update-form" method="POST" action="{{ route('compromissos.update', $compromisso->id) }}">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" required value="{{ $compromisso->nome }}">
        <label>Data:</label>
        <input type="text" name="data" id="data" required value="{{ $compromisso->data }}">
        <label>Hora Inicio:</label>
        <input type="text" name="horaInicio" id="horaInicio" required value="{{ $compromisso->horaInicio }}">
        <label>Hora Término:</label>
        <input type="text" name="horaFim" id="horaFim" required value="{{ $compromisso->horaFim }}">
        <label>Local:</label>
        <input type="text" name="local" id="local" required value="{{ $compromisso->local }}">
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="Agendado">Agendado</option>
            <option value="Realizado">Realizado</option>
            <option value="Cancelado">Cancelado</option>
        </select>
        <label>Observacoes:</label>
        <input type="text" name="observacoes" id="observacoes" value="{{ $compromisso->observacoes }}">
    </form>
    <button form="update-form" type="submit">Salvar</button>
    <button form="delete-form" type="submit" value="Excluir">Excluir</button>
    <form method="POST" class="form" id="delete-form" action="{{ route('compromissos.destroy', $compromisso->id) }}">
        @csrf
        @method('DELETE')
    </form>
@endsection
