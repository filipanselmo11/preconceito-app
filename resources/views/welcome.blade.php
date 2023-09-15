@extends('layouts.main')

@section('title', 'Aplicativo do Preconceito')
@section('page-title', 'Bem Vindo(a)')
@section('content')


<div id="preconceitos-container" class="col-md-12">
    <div id="cards-container" class="row">
        @foreach($preconceitos as $preconceito)
        <div class="card col-md-3" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $preconceito->title }}
                </h5>
                <p class="card-text">
                    {{ $preconceito->description }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
