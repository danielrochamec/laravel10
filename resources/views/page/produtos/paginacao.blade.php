{{-- Extenção da index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>
    <div>
        <form action="{{route('produto.index')}}" method="get">
            <div class="btn-group" role="group" aria-label="Basic example">
                <input class="form-control me-2" name="pesquisar" type="search" placeholder="Digite o Nome">
                <button class="btn btn-secondary">Pesquisar</button>
            </div>
            
            <a type="button" href="" class="btn btn-success float-end">
                Incluir Produto
            </a>

        </form>
        <div class="table-responsive">
            @if ($findProduto->isEmpty())
            <p> Não Existe Dados    </p>
            @else
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($findProduto as  $produto)
                    <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{'R$'.' '. number_format($produto->valor, 2, ',', '.')}}</td>
                        <td>
                            <a href="" class="btn btn-light btn-sn">
                                Editar
                            </a>
                            <a href="{{route('produto.delete')}}" class="btn btn-danger btn-sn">
                                Excluir
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        </main>
    </div>
@endsection
