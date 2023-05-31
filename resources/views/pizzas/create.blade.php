@extends('layouts.app')

@section('content')
<form action="{{ route('pizza.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">name</label>
            <input type="text" class="form-control" id="title" name="nome">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">ingedents</label>
            <input type="text" class="form-control" id="thumb" name="ingredienti" >
        </div>


        <div class="mb-3">
            <strong>base_bianca</strong>
            <label for="yes" class="form-label">yes</label>
            <input type="radio"  id="yes" name="base_bianca" value="1">
            <label for="no" class="form-label">no</label>
            <input type="radio" id="no" name="base_bianca" value="0">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="prezzo" >
        </div>
        <button type="submit" class="btn btn-success">INVIA</button>
    </form>
@endsection