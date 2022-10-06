<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container">
        <h4>Busqueda libro</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="/libros" method="get">
                    <label for="txtTilulo">Titulo</label>
                    <input id="txtTilulo" name="Titulo" value="{{ $Titulo }}" />
                </form>
                <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Titulo </th>
                        </tr>
                        <tr>
                            <th>Nombre portada </th>
                        </tr>
                        <tr>
                            <th>Tipo encuadernacion </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($libro as $l)
                        <tr>
                            <td> {{ $l->Titulo }} </td>
                        </tr>
                        <tr>
                            <td> {{ $l->NombrePortada  }} </td>
                        </tr>
                        <tr>
                            <td> {{ $l->TipoEncuadernacion }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-x1-12">
            </div>
        </div>
    </div>
</body>
</html>