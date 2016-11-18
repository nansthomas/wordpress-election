<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <!-- FAFA -->
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '1689462871366802',
            xfbml      : true,
            version    : 'v2.8'
          });
          FB.AppEvents.logPageView();
        };

        (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "//connect.facebook.net/fr_FR/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
         }
        (document, 'script', 'facebook-jssdk'));
      </script>
      <!-- END FAFA -->

            <header class="header">
                <div class="header__nav">
                    <div id="header__image">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" width="50" height="36" />
                        </a>
                    </div>
                    <?php
                    $args=array(
                        'theme_location' => 'header', // nom du slug
                        'menu' => 'header_fr', // nom à donner cette occurence du menu
                        'menu_class' => 'menu_header container', // class à attribuer au menu
                        'menu_id' => 'menu_id' // id à attribuer au menu
                        // voir les autres arguments possibles sur le codex
                    );
                    wp_nav_menu($args);
                    ?>
                </div>

            </header>

            <!-- <div class="container"> -->
