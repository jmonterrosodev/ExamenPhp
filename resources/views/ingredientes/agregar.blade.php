@extends('main.app')

@section('title', "Nuevo Ingrediente")    

@section('content')

    <div id="agregarIngrediente" class="container-sm center">
        <h2 class="text-center mb-5 mt-5">Agregar Nuevo Ingrediente</h2>
        <form class="row g-2" action="{{ route('ingredient.store') }}" method="POST">
            <x-ingredient-form/>
            <div class="col-12 text-end right">
                <button type="submit" class="btn btn-lg btn-primary">Crear ingrediente</button>
            </div>
        </form>
       
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>


@endsection