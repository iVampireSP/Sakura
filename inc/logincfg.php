<?php
//Custom login
function custom_login(){
    echo '<link rel="stylesheet" id="wp-admin-css" href="'.get_bloginfo('template_directory').'/inc/css/customlogin.min.css" type="text/css" />';
    echo '<style>body{background:#92C1D1 url(https://cuncu-1252309123.cos.ap-chengdu.myqcloud.com/flower-drop.png) fixed center top no-repeat!important;background-size:cover!important}.login h1 a{background-image:url(https://cuncu-1252309123.cos.ap-chengdu.myqcloud.com/ivampiresp-story-2.png)!important}</style>';
}
add_action('login_head','custom_login');
