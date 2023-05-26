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
        <div class="container d-flex align-items-center justify-content-center">
            <img src="{{ Vite::asset('resources\img\boolpizza_logo.svg') }}" alt="Yummy!" width="200" height="200">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pizzas as $pizza)
                                <tr>
                                    <th>{{ $pizza->nome }}</th>
                                    <td>{{ $pizza->ingredienti }}</td>
                                    <td>{{ $pizza->base_bianca }}</td>
                                    <td>{{ $pizza->prezzo }}</td>
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
