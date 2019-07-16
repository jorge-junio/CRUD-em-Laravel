@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Clientes
                    <a class="" style="loca" href="{{ route('clientesNovo') }}"> Novo Cliente </a>
                </div>

                @if (Session::has('mensagem_sucesso'))
                    <div class="alert alert-sucess" role="alert"> {{ Session::get('mensagem_sucesso') }} </div>
                @endif

                <div class="card-body">
                    <table class="table">
                        
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Ações</th>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td> {{$cliente->id}} </td>
                                <td> {{$cliente->nome }} </td>
                                <td> {{$cliente->endereco }} </td>
                                <td> {{$cliente->numero }} </td>
                                <td>
                                    <a href="/clientes/{{ $cliente->id }}/editar" class="btn btn-sm">Editar</a>
                                    <a href="/clientes/{{ $cliente->id }}/excluir" class="btn btn-sm">Excluir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
