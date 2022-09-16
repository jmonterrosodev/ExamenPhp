@extends('main.app')

@section('title', "Editar Pastel")    

@section('content')

    <div id="editarPastel" class="container-sm center">
        <h2 class="text-center mb-5 mt-5">Editar Pastel <b> {{ $cake->nombrePastel }}</b></h2>
        <form class="row g-2" action="{{ route('cake.update', $cake) }}" method="POST">
            @method('put')
            <x-pastel-form :cake='$cake'/>
            <div class="col-12 text-end right">
                <button type="submit" class="btn btn-lg btn-primary">Editar Pastel</button>
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