@extends('main.app')

@section('title', 'Inicio Proyecto')

@section('content')
<div class="bg-light py-5 mt-5 text-center">
      <h1 class="display-5 fw-bold">Examen Practico PHP/LARAVEL</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">
            * Crud de ambas tablas de Pasteles e Ingredientes no incluye la relacion pastel -> ingredientes de muchos a muchos
            <br>
            * No incluye vue.js 
        </p>
      </div>
    </div>
</div>
@endsection()