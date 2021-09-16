<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
    <header class="header-container">
        <figure class="background-image">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/pizza1.jpg" alt="Fondo pizza">
        </figure>
        <div class="overlay" id="overlay-header">

        </div>
        <div class="nav-title-container">
            <div class="row">
                <div class="col-6 col-md-12">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/pizzeria_logo.svg" alt="Logo">
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <nav class="navbar navbar-expand-md navbar-dark">
                        <div class="container-fluid" id="menu-image">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">  
                                <?php wp_nav_menu(
                                    array(
                                        "theme_location" =>"top_menu",
                                        "menu_class" => "menu-principal",
                                        "container_class" => "container-menu",
                                )
                            );?>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="container-text-title container">
                        <h1>AUTENTICA PIZZA ITALIANA</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-container container">
                        <p>
                            Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="button-orden-container">
                        <button type="button" class="btn btn-warning">ORDENA AHORA</button>
                    </div>
                </div>
                <div class="col">
                    <div class="pizza-top-container">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/pizza-top.png" alt="pizza-top" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </header>
                