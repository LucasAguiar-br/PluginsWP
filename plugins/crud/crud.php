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