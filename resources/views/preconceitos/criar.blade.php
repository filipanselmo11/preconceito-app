@extends('layouts.main')

@section('page-title', 'Criar Preconceito')

@section('content')

<div id="criar-preconceito" class="col-md-6 offset-md-3">
    <h1>
        Crie seu preconceito
    </h1>
    <form action="/preconceitos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Preconceito:</label>
            <input type="text" id="title" name="title" placeholder="Nome do Preconceito" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" placeholder="Descreva o preconceito" class="form-control"></textarea>
        </div>
        <br/>
        <input type="submit" class="btn btn-primary" value="Criar Preconceito">
    </form>
</div>

@endsection
