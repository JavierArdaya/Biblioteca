@extends('layouts.layout') 
@section('title','Admin Inicio')
@section('content')
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-50">
                <img src="..." class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-50">
                <img src="..." class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Libros</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-50">
                <img src="..." class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Reporte</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
