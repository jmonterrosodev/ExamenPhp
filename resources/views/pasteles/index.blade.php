@extends('main.app')

@section('title', "Inicio")    

@section('content')
<!-- LISTA PASTELES -->
<div id="listPasteles" class="container center mt-5 pt-1">

    <h2 class="text-center mb-5">Listado de Pasteles</h2>

    <a type="button" href="{{ route('cake.create') }}" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Agregar Pastel">
        Agregar Nuevo Pastel <i class="bi bi-plus-lg"></i>
    </a>

    <table class="table mt-3 table-responsive table-hover">
        <thead>
            <tr>
                <th scope="col">Pastel</th>
                <th scope="col">Descripción</th>
                <th scope="col">Creador</th>
                <th scope="col">Fecha Vencimiento</th>
                <th scope="col">Ingredientes</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cakes as $cake)
                <tr>
                    <td scope="row"> {{ $cake->nombrePastel}}  </td>
                    <td> {{ $cake->descPastel}} </td>
                    <td> {{ $cake->creadorPastel}} </td>
                    <td> {{ $cake->fechaVence->format('d M Y')}} </td>
                    <td>
                        <!-- <ol class="list-group list-group-numbered">
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    Content for list item
                                </div>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-sm btn-warning"><i class="bi bi-pen"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i></button>                                  
                                    </div>
                                </div>                    
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    Content for list item
                                </div>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-sm btn-warning"><i class="bi bi-pen"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i></button>                                  
                                    </div>
                                </div>                      
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    Content for list item
                                </div>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group me-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-sm btn-warning"><i class="bi bi-pen"></i></button>
                                        <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i></button>                                  
                                    </div>
                                </div>                     
                            </li>
                        </ol> -->
                    </td>
                    <td>
                        <a href="{{ route('cake.edit', $cake) }}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('cake.destroy', $cake) }}" method="post">
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