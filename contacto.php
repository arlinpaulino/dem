<?php
    include ("database/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contacto - Biblioteca de Ohara</title>
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
        
        <!-- Formulario de Contacto -->
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded rounded">
                            <!--Container para pantallas grandes -->
                            <div class="container d-none d-md-block">
                                <h2 class="section-heading text-center mb-3">
                                    <span class="section-heading-upper mb-1">¿Tienes preguntas?</span>
                                    <span class="section-heading-lower">¡Contáctanos!</span>
                                </h2>
                            </div>

                            <!--Container para pantallas mobiles -->
                            <div class="container d-md-none">
                                <h2 class="section-heading text-center mb-3">
                                    <span class="section-heading-upper mb-1">¿Tienes preguntas?</span>
                                    <span class="section-heading-lower" style="font-size: 30px">¡Contáctanos!</span>
                                </h2>
                            </div>

                            <form action="contacto.php" method="POST">
                                <div class="text-center">
                                    <label class="mb-4">
                                        <small><em>LLena los campos para enviar un correo electrónico. Todos los campos con el asterisco ('*') son obligatorios.</em></small>
                                    </label>
                                </div>

                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="name" name="nombre" placeholder="Nombre *" maxlength="20" minlength="3" required/> 
                                    <label for="nombre">Nombre <sup>*</sup></label>
                                </div>
                            
                                <div class="form-floating mb-3 mt-3">
                                    <input type="email" class="form-control" id="email" name="correo" placeholder="Correo electrónico *" required/> 
                                    <label for="correo">Correo electrónico <sup>*</sup></label>
                                </div>
                                
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="subject" name="asunto" placeholder="Asunto *" maxlength="50" required/> 
                                    <label for="asunto">Asunto <sup>*</sup></label>
                                </div>

                                <div class="form-floating mb-4 mt-3">
                                    <textarea class="form-control" id="messagebox" name="message" placeholder="Mensaje *" maxlength="500" style="height: 200px" required></textarea> 
                                    <label for="message">Mensaje <sup>*</sup></label>
                                </div>

                                <div class="text-center">
                                    <input class="btn btn-outline-dark btn-lg" type="submit" value="Enviar" name="Guardar"/>
                                </div>
                            </form>

                            <?php
                                $libreria = new DBLibreria;
                                $data = $libreria->getMensaje();

                                $cnxn = null;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Procesar formulario -->
        

        <?php
            include ("templates/footer.php");
        ?>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
