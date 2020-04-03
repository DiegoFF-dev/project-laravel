@extends('adminlte::page')

@section('title', 'Edição Conteúdo')

@section('content_header')
@if(session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ session('status') }}
</div>
@endif
<h1>Conteúdo Site</h1>
<div class="navbar">
    <div class="pull-left">

    </div>
    <a href="{{route('admin-edit-content',['id'=>'1'])}}" class="btn btn-warning">Editar</a>
</div>
@stop

@section('content')
<div class="row">
    @foreach ($data as $item)
    <div class="col-md-12">
        <h4>Investimento</h4>
        <p><strong>Valor:</strong> {{$item->amount}},00</p>
    </div>
    <div class="col-md-6">
        <h4>Ascape</h4>
        <p>{{$item->ascape}}</p>
    </div>
    <div class="col-md-6">
        <h4>Origem</h4>
        <p>{{$item->source }}</p>
    </div>
    <div class="col-md-6">
        <h4>Finalidade</h4>
        <p>{{$item->finality }}</p>
    </div>
    <div class="col-md-6">
        <h4>Objetivo</h4>
        <p>{{$item->goal }}</p>
    </div>
    <div class="col-md-6">
        <h4>Visão</h4>
        <p>{{$item->vision }}</p>
    </div>
    <div class="col-md-6">
        <h4>Atividades</h4>
        <p>{{$item->activities }}</p>
    </div>
    <div class="col-md-6">
        <h4>Local</h4>
        <p>{{$item->place }}</p>
    </div>
    <div class="col-md-6">
        <h4>Próximos Encontros</h4>
        <p>{{$item->next}}</p>
    </div>
    @endforeach
</div>
@stop

@section('css')
<!--<link rel="stylesheet" href="/css/admin_custom.css">-->
@stop