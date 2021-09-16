<?php
function init_template(){

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag');

register_nav_menus(
    array(
        //nombre lozalizacion // descripcion que vemos en el administrador
        "top_menu" =>"Menú principal"
    )
    );
}

add_action("after_setup_theme","init_template");

function assets(){
    // estilos
    wp_register_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css","","5.1.1","all");
    wp_enqueue_style("estilos",get_stylesheet_uri(  ),array("bootstrap"),"1.0","all");
    
    // javaScript
    wp_enqueue_script("bootstrap-script","https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js",array(),"5.1.1",true);


}
add_action("wp_enqueue_scripts","assets");

// Agregando widgets
function sidebar(){
    register_sidebar(
        array(
            'name' => 'Pie de página',
            'id'   => 'footer',
            'description' => 'Zona de Widgets para pie de página',
            'before_title' => '<p>',
            'after_title'  => '</p>',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
        )
        );
}

add_action('widgets_init', 'sidebar');

function ingredientesEspeciales(){
    $labels = array(
        'name' => 'Ingredientes',
        'singular_name' => 'Ingrediente',
        'manu_name' => 'ingredientes',
    );

    $args = array(
        'label'  => 'Ingrediente', 
        'description' => 'Sección de ingredientes especiales',
        'labels'       => $labels,
        'supports'   => array('title','editor','thumbnail', 'revisions'),
        'public'    => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-format-image',
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite'       => true,
        'show_in_rest' => true,
        "rewrite" =>true,
        "show_in_rest" =>true,

    );    
    register_post_type('Ingrediente', $args);
}

add_action('init', 'ingredientesEspeciales');

function information(){
    $labels = array(
        'name' => 'Informacion',
        'singular_name' => 'Informacion',
        'manu_name' => 'informacion',
    );

    $args = array(
        'label'  => 'informacion', 
        'description' => 'Sección para agregar direccion, telefono y redes sociales',
        'labels'       => $labels,
        'supports'   => array('title','editor','thumbnail', 'revisions'),
        'public'    => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-admin-post',
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite'       => true,
        'show_in_rest' => true,
        "rewrite" =>true,
        "show_in_rest" =>true,

    );    
    register_post_type('informacion', $args);

}
add_action('init', 'information');