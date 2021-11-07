<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "View/snippets/css.php"?>
    <title>Tienda Virtual</title>
</head>
<body>
    <!--Barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Tienda Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 justify-align-items-end">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Tienda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Iniciar sesion</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Todos los productos</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Ofertas</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carrito
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!--Encabezado-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Prendas</h1>
                <p class="lead fw-normal text-white-50 mb-0">Ropa en oferta</p>
            </div>
        </div>
    </header>
    <!-- Productos seccion-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Imagen del producto-->
                        <img class="card-img-top" src="Public/images/short.jpg" alt="short" />
                        <!-- Detalles-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre del producto-->
                                <h5 class="fw-bolder">Short</h5>
                                <!-- Precio del producto-->
                                S/40.00
                            </div>
                        </div>
                        <!-- Compra -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Producto 2-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Oferta</div>
                        <!-- Imagen del producto-->
                        <img class="card-img-top" src="Public/images/abrigo.jpg" alt="abrigo" />
                        <!-- Detalles-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Nombre-->
                                <h5 class="fw-bolder">Abrigo</h5>
                                <!-- Estrellas-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Precio-->
                                <span class="text-muted text-decoration-line-through">S/20.00</span>
                                S/15.00
                            </div>
                        </div>
                        <!-- Compra-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Oferta</div>
                        <img class="card-img-top" src="Public/images/bufanda.jpg" alt="bufanda" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Bufanda</h5>
                                <span class="text-muted text-decoration-line-through">S/20.00</span>
                                S/8.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="Public/images/buzo.jpg" alt="buzo" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Buzo</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                S/60.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Oferta</div>
                        <img class="card-img-top" src="Public/images/casaca.jpg" alt="casaca" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Casaca</h5>
                                <span class="text-muted text-decoration-line-through">S/40.00</span>
                                S/30.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="Public/images/gorra.jpg" alt="gorra" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Gorra</h5>
                                S/30.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Oferta</div>
                        <img class="card-img-top" src="Public/images/jean.jpg" alt="jean" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Jean</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <span class="text-muted text-decoration-line-through">S/70.00</span>
                                S/55.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="Public/images/polo.jpg" alt="polo" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Polo</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                S/25.00
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pie de seccion-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Pagina Principal</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <?php include "View/snippets/js.php"?>
</body>

</html>