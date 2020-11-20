<?php

/*
*Plugin Name: Crud 
* Plugin URI: https://sp.senac.br
* Description: Esse é um plugin de exmeplo de crud
* Version: 0.0.1
* Author: Lucas Silva
* Author URI: https://sp.senac.br
* Lincese: CC BY
*/


if( !define('WPINC')) exit:

    register_activation_hook(__FILE__,'criar_tabela');

    function criar_tabela(){
        global $wpbd;

    $wpbd->query("CREATE TABLE {$wpbd->prefix} agenda(id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                                        NOME VARCHAR(255) NOT NULL,
                                                        WHATSAPP BIGINT UNSIGNED NOT NULL)");
    }

    register_deactivation_hook(__FILE__, 'apagar_tabela');

function apagar_tabela()
{
    global $wpdb;
    $wpdb->query(" DROP TABLE {$wpdb->prefix}agenda");
}

add_action('admin_menu', 'menu_do_meu_plugin');
function menu_do_meu_plugin()
{
    /*
    add_menu_page( 'configurações do Meu Plug-in',
    'Meu Plug-in',
    'administrator',
    'meu-plugin-config',
    'abre_configuracoes',
'dashicons-admin-generic');
*/
    add_submenu_page(
        'options-general.php',
        'Configurações do Meu Plugin',
        'Meu Plug-in',
        'administrator',
        'meu-plugin-config',
        'abre_configuracoes'
    );
}
function abre_configuracoes()
{
    require 'lista_tpl.php';
}
