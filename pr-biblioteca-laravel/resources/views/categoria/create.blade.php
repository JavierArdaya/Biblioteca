@extends('layouts.layout') 
@section('content')
<h2>Crear Categoria</h2>
<form action="/categoria" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Descripcion de la Categoria: </label>        
        <input type="text" class="form-control" id="descripcion" name="descripcion" tabindex="1">
    </div>
    <a href="/categoria" class="btn btn-danger" tabindex="2">Cancelar</a>  
    <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>  
</form>
@endsection