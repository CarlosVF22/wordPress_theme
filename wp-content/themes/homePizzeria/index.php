<?php get_header(); ?>
<main class="main-container">
    <div class="lista-ingredientes">
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'Ingrediente',
                'post_per_page' => -1, 
                // 'order'         => 'ASC',
                // 'orderby'       => 'title'
            );

            $ingredientes = new WP_Query($args);

            if($ingredientes->have_posts()){
                while($ingredientes->have_posts()){
                    $ingredientes->the_post();
                    ?>

                    <div class="col-12 col-md-4 ingrediente-container text-center" id="<?php the_title();?>">
                        <figure>
                            <?php the_post_thumbnail('large'); ?>
                        </figure>
                        <h4>
                            <?php the_content();?>
                        </h4>
                    </div>

            <?php }
            }

            ?>
        </div>
    </div>
    <section clas="information-section">
            <?php
            $args = array(
                'post_type' => 'informacion',
                'post_per_page' => -1, 
                // 'order'         => 'ASC',
                // 'orderby'       => 'title'
            );

            $informacion = new WP_Query($args);

            if($informacion->have_posts()){
                while($informacion->have_posts()){
                    $informacion->the_post();
                    ?>
                    <div class="container-information">
                        <figure class="image-background-information">
                            <?php the_post_thumbnail();?>
                        </figure>
                        <div class="overlay" id="overlay-information">
                            <div class="information-contenido text-center">
                                <?php the_content();?>
                                <div class="button-orden-information">
                                    <button type="button" class="btn btn-warning">ORDENA AHORA</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            }
            ?>
    </section>
</main>
<?php get_footer(); ?>