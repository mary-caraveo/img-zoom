<?php

//Plugin name: zoom imagenes
//Description: Activa el zoom a las imagenes
//version: 1.0
//Author: Maria Caraveo
//Author URI: github

function assets_plugin() {
  $url_raiz = plugin_dir_url(__FILE__);
  wp_enqueue_style('zoom_imagen',$url_raiz.'/assets/css/estilos.css', '', '1.0', 'all');
}

add_action('wp_enqueue_scripts','assets_plugin');
