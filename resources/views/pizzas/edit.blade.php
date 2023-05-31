@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="my-2">
            <a href="{{ route('pizza.index') }}">Lista delle pizze</a>
        </div>
        <h2>Aggiorna la pizza : {{ $pizza->nome }}</h2>
        <form action="{{ route('pizza.update', $pizza->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $pizza->nome }}">
            </div>

            <div class="mb-3">
                <label for="ingredienti" class="form-label">Ingredienti</label>
                <input type="text" class="form-control" id="ingredienti" name="ingredienti"
                    value="{{ $pizza->ingredienti }}">
            </div>

            <div class="mb-3">
                <strong>base_bianca</strong>
                <label for="yes" class="form-label">yes</label>
                <input type="radio" id="yes" name="base_bianca" value="1" @checked($pizza->base_bianca)>
                <label for="no" class="form-label">no</label>
                <input type="radio" id="no" name="base_bianca" value="0" @checked(!$pizza->base_bianca)>

            </div>

            <div class="mb-3">
                <label for="prezzo" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="prezzo" name="prezzo" value="{{ $pizza->prezzo }}">
            </div>

            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
@endsection
