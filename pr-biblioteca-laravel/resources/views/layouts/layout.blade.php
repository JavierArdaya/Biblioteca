<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#">Mejillones</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Libros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Usuarios</a>
                </li>
              </ul>
            </div>
            <div class="navbar-nav justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Administrador
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
          </nav>
    </header>
   @yield('content')
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top fixed-bottom" style="background-color: #e3f2fd;">
              <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                </a>
                <p class="text-muted">Univalle &copy; 2022</p>
              </div>
          
              <div class="col mb-3">
              </div>
              <div class="col mb-3">
                <h5>Inicio</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                </ul>
              </div>
          
              <div class="col mb-3">
                <h5>Libros</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Libros</a></li>
                </ul>
              </div>
          
              <div class="col mb-3">
                <h5>Usuarios</h5>
                <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Usuarios</a></li>
                </ul>
              </div>
    </footer>
</body>
</html>