<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Página web principal de la Librería de Ohara" />
        <meta name="author" content="Arlin Paulino" />
        <title>Inicio - Biblioteca de Ohara</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body>
        <?php
            include ("templates/topbanner.php");
        ?>
        
        <!-- Carrusel para pantallas grandes -->
        <div id="demo" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            </div>

            <div class="carousel-inner" style="height: 700px">
                <div class="carousel-item active">
                    <section class="page-section clearfix">
                        <div class="container">
                            <div class="intro">
                                <img class="intro-img img-fluid mb-3 mb-lg-0  rounded" src="assets/img/intro.jpg" alt="..." />
                                <div class="intro-text left-0 text-center bg-faded p-5 rounded" style="margin-top: 80px">
                                    <h2 class="section-heading mb-4">
                                        <span class="section-heading-lower">¡Explora!</span>
                                    </h2>
                                    <p class="mb-3">Contamos con más de 300 títulos a tu disposición a los mejores precios,
                                        y con una amplia variedad de categorías, para que nunca te aburras de leer. El árbol del conocimiento
                                        está a tu alcance, ¡no pierdas esta oportunidad! 
                                    </p>
                                    <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="titulos.php#titulos">Comienza a leer</a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="page-section">
                        <div class="container">
                            <div class="product-item">
                            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/escritor.jpg" alt="..." style="height: 450px"/>
                                <div class="product-item-title d-flex position-absolute start-50 top-50">
                                    <div class="bg-faded p-4 ms-auto rounded text-center" style="width: 500px;">
                                        <h2 class="section-heading mb-0">
                                            <span class="section-heading-lower">Autores destacados</span>
                                        </h2>
                                        <p class="mb-0">Recolectamos obras de escritores de renombre galardonados por las instituciones más prestigiosas del mundo.</p>
                                        <div class="intro-button mx-auto mt-3"><a class="btn btn-primary btn-xl" href="autores.php#autores">Conoce más</a></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>    
                    </section>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- Carrusel para pantallas mobiles -->
        <div id="demo" class="carousel slide d-md-none" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            </div>

            <div class="carousel-inner" style="height: 700px">
                <div class="carousel-item active">
                    <section class="page-section clearfix">
                        <div class="container">
                            <div class="intro">
                                <div class="intro-text left-0 text-center bg-faded p-4 mb-3 rounded align-items-center" style="height: 385px">
                                    <h2 class="section-heading mb-4">
                                        <span class="section-heading-lower">¡Explora!</span>
                                    </h2>
                                    <p class="mb-3">Contamos con más de 300 títulos a tu disposición a los mejores precios,
                                        y con una amplia variedad de categorías, para que nunca te aburras de leer. El árbol del conocimiento
                                        está a tu alcance, ¡no pierdas esta oportunidad! 
                                    </p>
                                    <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="titulos.php#titulos">Comienza a leer</a></div>
                                </div>
                                <img class="intro-img img-fluid mb-3 mb-lg-0  rounded" src="assets/img/intro-md.jpg" alt="..." />
                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item">
                    <section class="page-section">
                        <div class="container">
                            <div class="product-item">
                                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/escritor.jpg" alt="..."/>
                                <div class="product-item-title">
                                    <div class="bg-faded p-4 mb-3 rounded text-center" style="height: 385px">
                                        <h2 class="section-heading mt-1">
                                            <span class="section-heading-lower">Autores destacados</span>
                                        </h2>
                                        <p class="pt-3">Recolectamos obras de escritores de renombre galardonados por las instituciones más prestigiosas del mundo.</p>
                                        <div class="intro-button mx-auto mt-4"><a class="btn btn-primary btn-xl" href="autores.php#autores">Conoce más</a></div>
                                    </div>
                                </div>                                
                            </div>
                        </div>    
                    </section>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <?php
            include ("templates/footer.php");
        ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
