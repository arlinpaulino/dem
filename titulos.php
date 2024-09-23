<?php
    include "database/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Títulos - Biblioteca de Ohara</title>
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

        <section id="titulos">
            <br>
        </section>

        <img class="img-fluid rounded position-absolute top-50 about-heading-img mb-3 mb-lg-0" src="assets/img/libros-estante.jpg" alt="..."/>
        <section class="page-section about-heading">
            <div class="container">
                <div class="product-item">
                    <!-- Container para pantallas grandes -->
                    <div class="product-item-title d-flex d-none d-md-block" style="width : 630px;">
                        <div class="bg-faded p-5 d-flex me-auto rounded" style="margin-left : 50px;">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-lower">Libros Disponibles</span>
                                <span class="section-heading-upper">Consulta nuestra gran variedad de títulos</span>
                            </h2>
                        </div>
                    </div>

                    <!-- Container para pantallas mobiles -->
                    <div class="product-item-title d-flex d-md-none position-relative">
                        <div class="bg-faded p-4 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-lower">Libros Disponibles</span>
                                <span class="section-heading-upper">Consulta nuestra gran variedad de títulos</span>
                            </h2>
                        </div>
                    </div>                         
                    
                    <section class="container rounded cta about-heading-img mb-3 mb-lg-0">    
                        <div class="container">
                            <div class="row">
                                <!-- Lista de Libros -->
                                <?php
                                    $libreria = new DBLibreria;
                                    $titulos = $libreria->getTitulos();

                                    $elementos_por_pagina = 4;
                                    $num_total_paginas = ceil(count($titulos) / $elementos_por_pagina);
                                    $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
                                    $inicio = ($pagina_actual - 1) * $elementos_por_pagina;
                                    $fin = $inicio + $elementos_por_pagina;
                                    $titulos_pagina = array_slice($titulos, $inicio, $elementos_por_pagina);

                                    foreach ($titulos_pagina as $registro) {
                                        // Container para pantallas grandes
                                        print('<div class="col-lg-6 mt-4 d-none d-md-block">');
                                        print(    '<div class="cta-inner bg-faded rounded">');
                                        
                                        print(        '<div class="container d-flex align-items-center justify-content-center text-center rounded" style="height: 60px;">');
                                        print(            '<h2 class="section-heading">');
                                        print(                '<span class="section-heading-upper">'.$registro['titulo'].'</span>');                                          
                                        print(            '</h2>');
                                        print(        '</div>');

                                        print(        '<div class="container d-flex mt-4 mb-lg-0">');
                                        print(            '<div class="container align-items-center text-center">');
                                        print(                '<img src="assets/img/libro.png" style="width: 140px;"/>');
                                        print(            '</div>');

                                        print(            '<div class="container">');
                                        print(                '<div class="container justify-content-center align-items-center" style="height: 140px;">');
                                        print(                  '<p class="pt-2"><strong>Categoría: </strong><em>'.$registro['tipo'].'</em></p>');
                                        print(                  '<p><strong>Publicación: </strong><em>'.$registro['fecha_pub'].'</em></p>');
                                        print(                '</div>');

                                        print(                '<h2 class="section-heading text-center pt-2">');
                                        print(                  '<span>$'.$registro['precio'].'</span>');                                            
                                        print(                '</h2>');
                                        
                                        print(            '</div>');
                                        print(        '</div>');

                                        print(        '<div class="container d-flex justify-content-center mt-3">');
                                        print(            '<button class="btn btn-outline-dark btn p-3" style="border-radius: 50px">¡Lo quiero!</button>');
                                        print(        '</div>');
                                        print(    '</div>');
                                        print('</div>');

                                        // Container para pantallas móbiles
                                        print('<div class="col-sm-2 mt-4 d-md-none">');
                                        print(    '<div class="cta-inner bg-faded rounded">');
                                        
                                        print(        '<div class="container d-flex align-items-center justify-content-center text-center rounded" style="height: 60px;">');
                                        print(            '<h2 class="section-heading">');
                                        print(                '<span class="section-heading-upper">'.$registro['titulo'].'</span>');                                          
                                        print(            '</h2>');
                                        print(        '</div>');

                                        print(        '<div class="container d-flex p-0 m-0">');
                                        print(            '<div class="container d-flex align-items-center text-center p-0">');
                                        print(                '<img src="assets/img/libro.png" style="width: 80px;"/>');
                                        print(            '</div>');

                                        print(            '<div class="container">');
                                        print(                '<div class="container justify-content-center align-items-center" style="height: 140px;">');
                                        print(                  '<p class="pt-3"><strong>Categoría: </strong><em>'.$registro['tipo'].'</em></p>');
                                        print(                  '<p><strong>Publicación: </strong><em>'.$registro['fecha_pub'].'</em></p>');
                                        print(                '</div>');

                                        print(                '<div class="container d-flex justify-content-left">');
                                        print(                  '<h2 class="section-heading pt-5">');
                                        print(                      '<span >$'.$registro['precio'].'</span>');                                            
                                        print(                  '</h2>');
                                        print(                '</div>');
                                        print(            '</div>');
                                        print(        '</div>');

                                        print(        '<div class="container d-flex justify-content-center mt-3">');
                                        print(            '<button class="btn btn-outline-dark btn p-3" style="border-radius: 50px">¡Lo quiero!</button>');
                                        print(        '</div>');
                                        print(    '</div>');
                                        print('</div>');

                                    }
                                ?>
                            </div>
                        </div>
                    </section>     
                    
                    <div class="container mt-4">
                        <ul class="pagination pagination-lg justify-content-center">
                            <?php for ($i = 1; $i <= $num_total_paginas; $i++) : ?>
                                <li class="page-item <?php echo ($i == $pagina_actual) ? 'active' : ''; ?>">
                                    <a class="page-link" href="?pagina=<?php echo $i; ?>" style="color: black"><?php echo $i; ?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <br>
        </section>
        
        <?php
            include ("templates/footer.php");
        ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    
</html>
