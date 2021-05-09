<!DOCTYPE html> 
<html <?php language_attributes(); ?>>
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>">          
        <meta content="width=device-width, initial-scale=1.0" name="viewport">                   
        <!-- Favicon -->         
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon.ico" rel="icon"> 
        <!-- Google Fonts -->                  
        <!-- CSS Libraries -->                                             
        <!-- Template Stylesheet -->                  
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>