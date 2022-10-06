@vite(['resources/js/app.js', 'resources/css/app.scss'])
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@extends('layouts.layout') 
@section('title','Categorias')
@section('content')
<h1>Listado de las Categorias</h1>
<a href="categoria/create" class="btn btn-primary">Crear</a>
<table class="table table-white table-sprinted mt-4">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Fecha Creacion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>
                {{$categoria->IdCategoria}}
            </td>
            <td>
                {{$categoria->Descripcion}}
            </td>
            <td>
                {{$categoria->FechaCreacion}}
            </td>
            <td>
                <form action="" method="POST">
                    @csrf
                    @method('delete')
                    <a class="btn btn-danger">Eliminar</a>
                </form>
                <a href="" class="btn btn-info">Editar</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
