<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>Laboratorio 3</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/logo.png" class="img-fluid" alt="..."></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catalogo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Sala</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Habitacion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Comedor</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Niños</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Baños</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Cocina</a></li>
                    </ul>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Contactenos</a>
                </li>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Texto buscado" aria-label="Texto buscado">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/slide1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/slide2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/slide3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<br><br>

<div class="container-sm">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card border-light mb-3">
                <div class="card-body text-dark">
                <p style="text-align:center"><img style="width:150px; text-align:center" src="assets/top.png " class="img-fluid" alt="..."></p>
                    <h3 style="text-align:center" class="card-title">Nosotros</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="text-align:center"><button type="button" class="btn btn-success"><i class="bi bi-eye"></i> Ver detalle</button></p>
                </div>
            </div>
            
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card border-light mb-3">
                <div class="card-body text-dark">
                <p style="text-align:center"><img style="width:150px; text-align:center" src="assets/top.png " class="img-fluid" alt="..."></p>
                    <h3 style="text-align:center" class="card-title">Nuestra Mision</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="text-align:center"><button type="button" class="btn btn-success"><i class="bi bi-eye"></i> Ver detalle</button></p>
                </div>
            </div>
            
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card border-light mb-3">
                <div class="card-body text-dark">
                    <p style="text-align:center"><img style="width:150px; text-align:center" src="assets/top.png " class="img-fluid" alt="..."></p>
                    <h3 style="text-align:center" class="card-title">Nuestra Vision</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="text-align:center"><button type="button" class="btn btn-success"><i class="bi bi-eye"></i> Ver detalle</button></p>
                </div>
            </div>
            
        </div>
    </div>
    
</div>

<h1 style="text-align:center"> Catalogo </h1>
<br>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="assets/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="font-family: Sofia, sans-serif;">10.50$</p>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                    <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="assets/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="font-family: Sofia, sans-serif;">10.50$</p>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                    <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="assets/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="font-family: Sofia, sans-serif;">10.50$</p>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                    <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="assets/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="font-family: Sofia, sans-serif;">10.50$</p>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                    <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="assets/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="font-family: Sofia, sans-serif;">10.50$</p>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                    <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="assets/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="font-family: Sofia, sans-serif;">10.50$</p>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                    <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="assets/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="font-family: Sofia, sans-serif;">10.50$</p>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                    <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card" style="width: 18rem;">
            <img src="assets/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p style="font-family: Sofia, sans-serif;">10.50$</p>
                <hr>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                    <button style="width: 127px" type="button" class="btn btn-dark"><i class="bi bi-cart-plus"></i> Comprar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<ul class="nav    ">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Todos los derechos reservados - 2022</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Contáctenos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Síguenos en redes sociales</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>