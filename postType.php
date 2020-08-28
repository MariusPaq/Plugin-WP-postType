<?php
/*
Plugin Name: postType
Description: plugin, postType plug.
Author: Marius Paquet
Version: 1.0
*/
function wpm_custom_post_type() {

// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
$labels = array(
// Le nom au pluriel
'name' => _x( 'Projets', 'Post Type General Name'),
// Le nom au singulier
'singular_name' => _x( 'Projet', 'Post Type Singular Name'),
// Le libellé affiché dans le menu
'menu_name' => __( 'Projet'),
// Les différents libellés de l'administration
'all_items' => __( 'Tous les projets'),
'view_item' => __( 'Voir les projets'),
'add_new_item' => __( 'Ajouter un nouveau projet'),
'add_new' => __( 'Ajouter'),
'edit_item' => __( 'Editer un projet'),
'update_item' => __( 'Modifier un projet'),
'search_items' => __( 'Rechercher un projet'),
'not_found' => __( 'Non trouvée'),
'not_found_in_trash' => __( 'Non trouvée dans la corbeille'),
);

// On peut définir ici d'autres options pour notre custom post type

$args = array(
'description' => __( 'Tous sur les projets'),
'labels' => $labels,
// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
'supports' => array( 'title', 'editor','thumbnail', 'comments', 'revisions'),
'menu_icon' => 'dashicons-cover-image',
'menu_position' => 20,

'show_in_rest' => true,
'hierarchical' => false,
'public' => true,
'has_archive' => true,

);

// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
register_post_type( 'projets', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );
