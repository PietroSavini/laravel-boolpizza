@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center p-2" height="200">
        <img src="{{ Vite::asset('resources\img\boolpizza_logo.svg') }}" alt="Yummy pizza!!!!" width="200">
    </div>
    <h1 class="text-center py-5">Le nostre pizze</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Pizza</th>
                            <th scope="col">Ingredienti</th>
                            <th scope="col">Base bianca</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pizzas as $pizza)
                            <tr>
                                <th>{{ $pizza->nome }}</th>
                                <td>{{ $pizza->ingredienti }}</td>
                                <td>
                                    @if ($pizza->base_bianca)
                                        @php
                                            $pizza->base_bianca = 'Bianca';
                                        @endphp
                                    @else
                                        @php
                                            $pizza->base_bianca = 'Rossa';
                                        @endphp
                                    @endif
                                    {{ $pizza->base_bianca }}
                                </td>
                                <td>{{ $pizza->prezzo }}€</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('pizza.show', $pizza->id) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a class="btn btn-warning" href="{{ route('pizza.edit', $pizza->id) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form class="d-inline-block" action="{{ route('pizza.destroy', $pizza->id) }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Vuoi eliminare la pizza selezionata?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('pizza.create') }}" class="btn btn-primary">Create new pizza</a>
    </div>
@endsection
