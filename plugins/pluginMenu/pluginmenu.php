<?php

/*
*Plugin Name: Plugin Menu
* Plugin URI: https://sp.senac.br
* Description: Este é um plugin que mostra como trabalha com menu do admin do wordpress
* Version: 0.0.1
* Author: Lucas Silva
* Author URI: https://sp.senac.br
* Lincese: CC BY
*/



add_action( 'admin_menu', 'menu_plugin');

function set_configs(){
    register_setting ('configs_exemplo', 'api-token');
    register_setting ('configs_exemplo', 'api-url');
}


function menu_plugin() {
    //criar nível item no primeiro nível do menu

  /*  
    add_menu_page( 'Configurações do meu plugin',
                    'Meu plug-in',
                    'administrator',
                    'meu-plugin-config',
                    'abre_configuracoes',
                    'dashicons-admin-generic');

*/

    add_submenu_page (  'options-general.php',
                        'configurações do meu Plug-in',
                        'Meu Plug-in',
                        'administrator',
                        'meu-plugin-config',
                        'abre_configuracoes');
}

function abre_configuracoes(){

    require 'pluginMenu_tpl.php';

}
