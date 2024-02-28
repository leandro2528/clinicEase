@extends('layouts.app')

@section('title', 'Painel Inícial')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-4">
                <h4 class="mt-5">Atualização de Agenda</h4><br/>
            <form action="{{ route('agendas-update', ['id'=>$agendas->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group my-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" value="{{ $agendas->nome }}" name="nome">
                </div>
                <div class="form-group my-3">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" value="{{ $agendas->telefone }}" name="telefone">
                </div>
                <div class="form-group my-3">
                    <label for="">E-mail</label>
                    <input type="email" class="form-control" value="{{ $agendas->email }}" name="email">
                </div>
                <div class="form-group my-3">
                    <label for="">Convênio</label>
                    <select name="convenio_id" id="convenio_id">
                        <option value="select">-- Selecione um Convênio</option>
                        @foreach($convenios as $convenio)
                            <option value="{{ $convenio->id }}">{{ $convenio->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Data / Hora</label>
                    <input type="date" class="form-control" value="{{ $agendas->data_hora }}" name="data_hora">
                </div>
                <div class="form-group my-3">
                    <label for="">Observação</label>
                    <input type="text" class="form-control" value="{{ $agendas->observacao }}" name="observacao">
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-warning btn-sm" value="Adicionar Agenda">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
