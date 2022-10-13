@extends('layout.app')
@section('title','Registrar novo livro')
@section('content')
    @section('page')
        <h3>Registrar novo livro</h3>
    @endsection
    
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
    @endif
    <br><br>
    {{Form::open(['route'=>'livros.store','method'=>'POST'])}}
        {{Form::label('titulo','Titulo')}}
        {{Form::text('titulo','',['class'=>'form-control','required', 'placeholder'=>'Titulo do Livro'])}}
        <br>
        {{Form::label('descricao','Descricao')}}
        {{Form::textarea('descricao','',['class'=>'form-control','required', 'placeholder'=>'Descrição...'])}}
        <br>
        {{Form::label('autor','Autor')}}
        {{Form::text('autor','',['class'=>'form-control','required', 'placeholder'=>'Nome do Autor' ])}}
        <br>
        {{Form::label('editora','Editora')}}
        {{Form::text('editora','',['class'=>'form-control','required', 'placeholder'=>'Nome da Editora'])}}
        <br>
        {{Form::label('ano','Ano')}}
        {{Form::number('ano','',['class'=>'form-control','required', 'placeholder'=>'Ano de lançamento'])}}
        <br>
        {{Form::submit('Salvar',['class'=>'btn btn-secondary'])}}
        {!!Form::button('Cancelar',['onclick'=>'javascript:history.go(-1)','class'=>'btn btn-dark'])!!}
    {{Form::close()}}
@endsection