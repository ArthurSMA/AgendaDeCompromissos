@extends('base')
@section('content')
    <h2>Cadastrar Novo Compromisso</h2>
    <form class="form" method="POST" action="{{ route('compromissos.store') }}">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <label>Data:</label>
        <input type="text" name="data" placeholder="yyyy-mm-dd" required>
        <label>Hora Inicio:</label>
        <input type="text" name="horaInicio" placeholder="00:00" required>
        <label>Hora Término:</label>
        <input type="text" name="horaFim" placeholder="00:00" required>
        <label>Local:</label>
        <input type="text" name="local" placeholder="Digite o local" required>
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="Agendado">Agendado</option>
            <option value="Realizado">Realizado</option>
            <option value="Cancelado">Cancelado</option>
        </select>
        <label>Observacoes:</label>
        <input type="text" name="observacoes">
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
@endsection
