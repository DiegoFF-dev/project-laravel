@extends('adminlte::page')

@section('title', 'Incluir')

@section('content_header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-1">
            <div class="col-sm-6">
              <h1>Itens inclusos</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">General Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
@stop

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Adicionar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <label for="item">Novo item</label>
                        <input type="text" class="form-control" id="item" name="item" placeholder="Informe o novo item?">
                    </div>
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Lista</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form role="form">
                    <div class="row">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Item</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($included as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->included}}</td>
                                    <td>
                                        <a href="">Editar | </a>
                                        <a href="">Excluir  </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!--/.col (right) -->
</div>

@stop