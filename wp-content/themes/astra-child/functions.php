<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;

add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;

add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('planty-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&display=swap', [], null);
});

// Hook Filter Admin - permet de modifier la liste des items du menu WordPress AVANT qu’ils soient affichés sur le site

add_filter('wp_get_nav_menu_items', function ($items, $menu, $args) { // $items est la liste des liens du menu, $menu est le menu WP concerné, $args sont les arguments passés à wp_nav_menu()
  if ( is_user_logged_in() ) 
    return $items; // Retourne la liste telle quelle si l’utilisateur est connecté

 $admin_url = rtrim( admin_url(), '/' ); // URL de l’admin WP, sans le slash final
  foreach ($items as $i => $item) { // Parcourt chaque item du menu
    $classes = (array) ($item->classes ?? []); //Si le lien a la classe CSS admin-only, on le supprime
    $title   = trim( wp_strip_all_tags( $item->title ?? '' ) ); // Titre du lien, sans balises HTML ni espaces superflus, si le titre du lien est "Admin"
    $url     = rtrim( (string) ($item->url ?? ''), '/' ); // URL du lien, sans le slash final, si le titre du lien est "Admin"

    if ( in_array('admin-only', $classes, true) || $url === $admin_url || $title === 'Admin' ) { // Si le lien a la classe CSS admin-only, ou si son URL est celle de l’admin WP, ou si le titre du lien est "Admin"
      unset($items[$i]); // On supprime cet item de la liste
    }
  } 
  return array_values($items); // Réindexe le tableau des items avant de le retourner
}, 10, 3); // 10 = priorité d’exécution, 3 = nombre d’arguments passés au callback
