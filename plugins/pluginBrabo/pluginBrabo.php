<?php


/*
*Plugin Name: Plugin Brabo
* Plugin URI: https://sp.senac.br
* Description: Este é um plugin brabo em
* Version: 0.0.1
* Author: Lucas Silva
* Author URI: https://sp.senac.br
* Lincese: CC BY
*/

add_filter ('login_errors', 'altera_msg_login');

function altera_msg_login() {

    return 'Credenciais inválidas';
}



add_action('wp_head', 'colocar_og_tags' );
function colocar_og_tags ()  {
    if ( is_single ()) {
        $dados_do_post = get_post( get_the_ID());
        $nome_do_site= get_bloginfo();
        $titulo = $dados_do_post->post_tittle;
        $resumo = $dados_do_post ->post_excerpt; 
        echo "
        <meta property='og:tittle' content='". $titulo(). "' >
        <meta property='og:site_name' content='". $nome_do_site . "' >
        <meta property='og:url' content='". get_permalink(). "' >
        <meta property='og:description' content='". $resumo. "' >
            ";
    }
}

<?
