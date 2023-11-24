@extends('index')
@section('content')
    <form class="row g-3" method="POST" action="{{route('cadastrar.produto')}}">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Adicionar Novo Produto</h1>
        </div>
        <div class="col-md-6">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Valor</label>
            <input class="form-control">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">ADICIONAR</button>
        </div>
    </form>
@endsection
