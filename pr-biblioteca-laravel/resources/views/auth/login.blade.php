
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
@vite(['resources/js/app.js', 'resources/css/app.scss'])
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <section class="vh-100" style="background-color: #768FA6;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="FondoMejillonesLogin.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="/login" method="POST">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <img src="https://scontent.fvvi1-2.fna.fbcdn.net/v/t1.6435-9/66721349_1130064013851492_1112262771497500672_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=IFfvxFJcWIcAX-_B_pV&_nc_ht=scontent.fvvi1-2.fna&oh=00_AT9EfbmdLyF9oel4zq4snjoOm2aU_BEAz_QCFF671F3HkA&oe=635951C5"
                            width="50"
                            height="50"
                            alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            &nbsp;
                            &nbsp;
                          <span class="h2 fw-bold mb-0">Instituto Mejillones</span>
                        </div>                        
      
                        <div class="form-outline mb-4">
                          <input type="email" id="Codigo" class="form-control form-control-lg" name="Codigo"/>
                          <label class="form-label" for="Codigo">Correo Electrónico</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="Password" class="form-control form-control-lg" name="Password" />
                          <label class="form-label" for="Password">Contraseña</label>
                        </div>
                        <div class="pt-1 mb-4">
                          <input class="btn btn-primary btn-lg btn-block" type="submit" value="Login"></input>
                        </div>
                        <a class="small text-muted" href="#!">¿Se te olvidó tu contraseña?</a>
                        <br/>
                        <a href="#!" class="small text-muted">Términos de Uso.</a>
                        <a href="#!" class="small text-muted">Política de privacidad</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>