@extends('main.app')

@section('title', "Editar Ingrediente")    

@section('content')

    <div id="editarIng" class="container-sm center">
        <h2 class="text-center mb-5 mt-5">Editar Ingrediente <b> {{ $ingredient->nombreIngredient }}</b></h2>
        <form class="row g-2" action="{{ route('ingredient.update', $ingredient) }}" method="POST">
            @method('put')
            <x-ingredient-form :ingredient='$ingredient'/>
            <div class="col-12 text-end right">
                <button type="submit" class="btn btn-lg btn-primary">Editar</button>
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