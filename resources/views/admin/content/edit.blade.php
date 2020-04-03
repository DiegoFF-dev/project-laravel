@extends('adminlte::page')

@section('title', 'Edição Conteúdo')

@section('content_header')
<h1 class="mb-3">Edição de conteúdo</h1>
@stop

@section('content')
@if($errors->any())
@foreach ($errors->all() as $error)
<ul class="alert alert-warning">
    <li>{{$error}}</li>
</ul>
@endforeach
@endif
<form class="" action="{{route('admin-update-content', ['id'=> $data->id])}}" method="post">
    @csrf
    <div class="form-row">
        <div class="col-md-2">
            <div class="form-group">
                <label for="ascape">Investimento:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                        <input class="form-control" type="number" id="next" name="amount" value="{{$data->amount}}"
                            required="required">
                        <span class="input-group-text">,00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="ascape">Ascape:</label>
                <textarea class="form-control" id="ascape" name="ascape" rows="4"> {{$data->ascape}} </textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="ascape">Origem:</label>
                <textarea class="form-control" id="source" name="source" rows="4"> {{$data->source}} </textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="ascape">Finalidade:</label>
                <textarea class="form-control" id="finality" name="finality" rows="4"> {{$data->finality}} </textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="ascape">Objetivo:</label>
                <textarea class="form-control" id="goal" name="goal" rows="4"> {{$data->goal}} </textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="ascape">Visão:</label>
                <textarea class="form-control" id="vision" name="vision" rows="4"> {{$data->vision}} </textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="ascape">Atividades:</label>
                <textarea class="form-control" id="activities" name="activities"
                    rows="4"> {{$data->activities}} </textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="ascape">Local:</label>
                <textarea class="form-control" id="place" name="place" rows="4"> {{$data->place}} </textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="ascape">Próximos encontros:</label>
                <textarea class="form-control" id="next" name="next" rows="4"> {{$data->next}} </textarea>
            </div>
        </div>
    </div>
    <button type="reset" class="btn btn-warning">Cancelar</button>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>



@stop

@section('css')
<!--<link rel="stylesheet" href="/css/admin_custom.css">-->
@stop