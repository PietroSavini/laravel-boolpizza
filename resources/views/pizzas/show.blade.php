@extends('layouts.app')

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col text-center">
                <div class="card">
                    <figure class="m-0">
                        <img src="https://images.pexels.com/photos/1566837/pexels-photo-1566837.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            style="width: 200px" alt="Pizza">
                    </figure>

                    <div class="card-body">
                        <h5 class="card-title">Nome: {{ $pizza->nome }}</h5>
                        <p class="card-text">Ingredienti:
                            @foreach ($pizza->ingredients as $ingredient)
                                {{ $ingredient->name }} {{ $loop->last ? '' : ',' }}
                            @endforeach
                        </p>
                        @if ($pizza->base_bianca)
                            @php
                                $pizza->base_bianca = 'Bianca';
                            @endphp
                        @else
                            @php
                                $pizza->base_bianca = 'Rossa';
                            @endphp
                        @endif
                        <p class="card-text">Base: {{ $pizza->base_bianca }}</p>
                        <p class="card-text">Prezzo: € {{ $pizza->prezzo }}</p>
                        <a href="{{ route('pizza.index') }}">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
