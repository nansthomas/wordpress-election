        
        <!-- </div> -->
        
        <footer class="footer">

            <div class="footer__newsletter">
                <h3 class="footer__newsletterTitle">Restez informé</h3>
    
                <div class="footer__fields">
                    <?php echo do_shortcode('[mc4wp_form id="173"]'); ?>
                </div>
            </div>
            
            <div class="footer__menu">
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
        </footer>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
</html>