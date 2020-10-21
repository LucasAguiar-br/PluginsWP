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

add_filter('login_errors', 'altera_msg_login');

function altera_msg_login() {

    return 'Credenciais inválidas';
}
