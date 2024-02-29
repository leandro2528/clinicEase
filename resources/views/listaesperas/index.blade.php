@extends('layouts.app')

@section('title', 'Listagem de Lista de Espera')

@section('content')
<div class="container-fluid">
<h4 class="text-center my-4">Lista de Espera</h4>
    <div class="row">
        <div class="col-6 px-5 pt-2">
            <table class="table table-hover">
                <thead style="font-size: 12px;">
                    <tr>
                        <th>Paciente</th>
                        <th>Convênio</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Observação</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody style="font-size: 10px;">
                    @foreach($listaesperas as $listaespera)
                    <tr>
                        <td>{{ $listaespera->agenda->nome }}</td>
                        <td>{{ $listaespera->convenio->nome }}</td>
                        <td>{{ $listaespera->email }}</td>
                        <td>{{ $listaespera->telefone }}</td>
                        <td>{{ $listaespera->observacao }}</td>
                        <td><a class="btn btn-success btn-sm" href="{{ route('agendas-create') }}">Agendar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <form class="p-5" style="background-color: #f8f9fa;" action="{{ route('listaesperas-store') }}" method="POST">
                <h6>Cadastro de pacientes para lista de espera</h6>
                @csrf
                <div class="form-group my-3">
                    <label for="">Paciente</label>
                    <select class="form-select" name="agenda_id" id="agenda_id">
                        <option value="select">-- Selecione um Parciente --</option>
                        @foreach($agendas as $agenda)
                            <option value="{{ $agenda->id }}">{{ $agenda->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Convênio</label>
                    <select class="form-select" name="convenio_id" id="convenio_id">
                        <option value="select">-- Selecione um Convênio --</option>
                        @foreach($convenios as $convenio)
                            <option value="{{ $convenio->id }}">{{ $convenio->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group my-3">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
                <div class="form-group my-3">
                    <label for="">Observação</label>
                    <input type="text" class="form-control" name="observacao">
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-primary btn-sm" value="Adicionar Lista de Espera">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection