@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Informe os abaixo as informações do cliente
                    <a class="" style="loca" href="{{ route('clientes') }}"> Listagem de Cliente </a>
                </div>

                <div class="card-body">
                    @if (Session::has('mensagem_sucesso'))
                        <div class="alert alert-sucess" role="alert"> {{ Session::get('mensagem_sucesso') }} </div>
                    @endif

                    @if(Request::is('*/editar'))
                        {!! Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id ]) !!}
                    @else
                        {!! Form::open(['route'=> 'clientesSalvar']) !!}
                    @endif

                    
                    
                    {!! Form::label('nome', 'Nome') !!}
                    {!! Form::input('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome']) !!}
                    
                    {!! Form::label('endereco', 'Endereço') !!}
                    {!! Form::input('text', 'endereco', null, ['class' => 'form-control', 'placeholder' => 'Endereço']) !!}
                    
                    {!! Form::label('numero', 'Número') !!}
                    {!! Form::input('text', 'numero', null, ['class' => 'form-control', 'placeholder' => 'Número']) !!}
                    
                    {!! Form::submit('Enviar', ['class' => 'btn btn-primary' ]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
