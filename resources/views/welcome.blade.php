@extends('layouts.main')

@section('title', 'Aplicativo do Preconceito')
@section('page-title', 'Bem Vindo(a)')
@section('content')


<div id="preconceitos-container" class="col-md-12">
    <div id="cards-container" class="row">
        @if(count($preconceitos) > 0)
        @foreach($preconceitos as $preconceito)
        <div class="card col-md-3" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $preconceito->title }}
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                    {{ $preconceito->created_at }}
                </h6>
                <p class="card-text">
                    {{ $preconceito->description }}
                </p>
                <form action="/preconceitos/{{ $preconceito->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </div>
        </div>
        @endforeach
        @else
            <p>
                Nenhum Preconceito encontrado
            </p>
        @endif
    </div>
</div>

@endsection
