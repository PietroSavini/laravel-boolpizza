<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

@extends('layouts.app')

@section('content')
    <h1 class="text-center py-5">I nostre pizze</h1>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pizzas as $pizza)
                            <tr>
                                <th>{{ $pizza->nome }}</th>
                                <td>{{ $pizza->ingredienti }}</td>
                                <td>@if($pizza->base_bianca)
                                        @php
                                            $pizza->base_bianca ="Bianca";
                                        @endphp
                                    @else 
                                        @php
                                            $pizza->base_bianca="Rossa";
                                        @endphp
                                    @endif
                                    {{ $pizza->base_bianca }}
                                </td>
                                <td>{{ $pizza->prezzo }}€</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
    

</body>

</html>