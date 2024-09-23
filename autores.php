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
        <title>Autores - Biblioteca de Ohara</title>
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

        <section id="autores">
            <br>
        </section>

        <img class="img-fluid rounded position-absolute top-50 about-heading-img mb-3 mb-lg-0" src="assets/img/maquina-de-escribir.jpg" alt="..."/>
        <section class="page-section about-heading">
            <div class="container">
                <div class="product-item">
                    <!-- Container para pantallas grandes -->
                    <div class="product-item-title d-flex d-none d-md-block" style="width : 560px">
                        <div class="bg-faded p-5 d-flex me-auto rounded" style="margin-left : 50px;">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-lower">Autores</span>
                                <span class="section-heading-upper">Descubre los escritores de nuestros títulos</span>
                            </h2>
                        </div>
                    </div>

                    <!-- Container para pantallas mobiles -->
                    <div class="product-item-title d-flex d-md-none position-relative" style="height : 200px">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-lower">Autores</span>
                                <span class="section-heading-upper">Descubre los escritores de nuestros títulos</span>
                            </h2>
                        </div>
                    </div>                    
                    
                    <section class="container rounded cta about-heading-img mb-3 mb-lg-0">    
                        <div class="" >
                            <div class="row d-flex justify-content-center scroll-container" style="height: 700px; overflow-y: auto;">

                                <!-- Lista de Autores -->
                                <?php
                                $libreria = new DBLibreria;
                                $autores = $libreria->getAutores();
                                
                                foreach ($autores as $registro) {
                                                                        
                                    print(  '<div class="col-lg-9 col-sm-2 mt-3 cta-inner d-flex align-items-center justify-content-center bg-faded p-4 rounded mb-3">');
                                    print(      '<div class="p-1 d-flex align-items-center justify-content-center" style="width: 70px; height: 80px">');
                                    print(          '<img src="assets/img/autor_photo.png" style="width: 50px">');
                                    print(      '</div>');

                                    print(      '<div class="p-2 d-flex align-items-center" style="width: 250px; height: 80px">');
                                    print(          '<h2 class="section-heading">');
                                    print(              '<span class="section-heading-upper pt-2">'.$registro['nombre'].' '.$registro['apellido'].'</span>');                                          
                                    print(          '</h2>');
                                    print(      '</div>');

                                    print(      '<div class="p-2 d-flex align-items-center" style="width: 200px; height: 80px">');
                                    print(          '<p class="pt-3"><em>'.$registro['ciudad'].', '.$registro['estado'].' — '.$registro['pais'].'</em></p>');
                                    print(      '</div>');

                                    print(      '<div class="p-1 d-flex align-items-center justify-content-center" style="width: 130px; height: 80px">');
                                    print(          '<button class="btn btn-outline-dark btn p-3" style="border-radius: 50px">Ver libros</button>');
                                    print(      '</div>');
                                    print(  '</div>');

                                }

                                $cnxn = null;
                                ?>

                            </div>
                        </div>
                    </section>

                </div>
            </div>
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