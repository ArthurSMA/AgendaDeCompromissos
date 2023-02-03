@extends('base')
@section('content')
    <h2>Compromissos Cadastrados</h2>
    @if (!isset($compromissos))
        <h3 style="color: red">Nenhum Registro Encontrado!</h3>
    @else
        <table class="data-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data</th>
                    <th>Hora Inicio</th>
                    <th>Hora Término</th>
                    <th>Local</th>
                    <th>Status</th>
                    <th>Observacoes</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compromissos as $c)
                    <tr>
                        <td>{{ $c->nome }} </td>
                        <td>{{ $c->data }} </td>
                        <td>{{ $c->horaInicio }} </td>
                        <td>{{ $c->horaFim }} </td>
                        <td>{{ $c->local }} </td>
                        <td>{{ $c->status }} </td>
                        <td>{{ $c->observacoes }} </td>
                        <td> <a href="{{ route('compromissos.show', $c->id) }}">Exibir</a> </td>
                        <td> <a href="{{ route('compromissos.edit', $c->id) }}">Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Compromissos Cadastrados: {{ $compromissos->count() }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
    @if (isset($msg))
        <script>
            alert("{{ $msg }}");
        </script>
    @endif
@endsection
