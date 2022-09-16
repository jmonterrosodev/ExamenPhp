@extends('main.app')

@section('title', "Ingredientes")    

@section('content')
<!-- LISTA PASTELES -->
<div id="listPasteles" class="container center mt-5 pt-1">

    <h2 class="text-center mb-5">Listado de Ingredientes</h2>

    <a type="button" href="{{ route('ingredient.create') }}" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Agregar Pastel">
        Agregar Nuevo Ingrediente <i class="bi bi-plus-lg"></i>
    </a>

    <table class="table mt-3 table-responsive table-hover">
        <thead>
            <tr>
                <th scope="col">Ingrediente</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha Vencimiento</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ingredients as $ingredient)
                <tr>
                    <td scope="row"> {{ $ingredient->nombreIngredient}}  </td>
                    <td> {{ $ingredient->descIngredient}} </td>
                    <td> {{ $ingredient->fechaVence->format('d M Y')}} </td>
                    <td>
                        <a href="{{ route('ingredient.edit', $ingredient) }}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('ingredient.destroy', $ingredient) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach            
        </tbody>
    </table>
</div>

@endsection