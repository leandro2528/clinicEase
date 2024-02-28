@extends('layouts.app')

@section('title', 'Painel Inícial')

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-4">
                <h4 class="mt-5">Cadastro de Agenda</h4><br/>
            <form action="{{ route('agendas-store') }}" method="POST">
                @csrf
                <div class="form-group my-3">
                    <label for="">Nome</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="form-group my-3">
                    <label for="">Telefone</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
                <div class="form-group my-3">
                    <label for="">E-mail</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group my-3">
                    <label for="">Convênio</label>
                    <select class="form-select" name="convenio_id" id="convenio_id">
                        <option value="select">-- Selecione um Convênio</option>
                        @foreach($convenios as $convenio)
                            <option value="{{ $convenio->id }}">{{ $convenio->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="">Data / Hora</label>
                    <input type="date" class="form-control" name="data_hora">
                </div>
                <div class="form-group my-3">
                    <label for="">Observação</label>
                    <input type="text" class="form-control" name="observacao">
                </div>
                <div class="form-group my-3">
                    <input type="submit" class="btn btn-warning btn-sm" value="Atualizar Agenda">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
