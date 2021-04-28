<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://www.instagram.com/codevrd/
 *
 * @package WordPress
 * @subpackage Mambo_theme
 * @since Mambo_theme 1.0
 */

?>

<footer class="site-footer">
    <div class="contenido-footer ">

        <!-- Content here -->
        <div class="col-sm-12">
            <div class="row">

                <div class="col-sm-4">
                 
                    <div class="copyright">
                        <p> &copy <?= date('Y')?> <?= bloginfo() ?> </p>
                        <p>Todos los derechos reservados.</p>
                        <p>developed by <a href="https://www.instagram.com/codevrd/">@codevrd</a></p>

                          <?php dynamic_sidebar('Footer-1') ?>
                       
                    </div>
                </div>

                <div class="col-sm-4 site-nav">
                <?php dynamic_sidebar('Footer-2') ?>
                </div>


                <div class="col-sm-4">
                <?php dynamic_sidebar('Footer-3') ?>
                </div>

            </div>
        </div>

    </div>



</footer>

<?php wp_footer(); ?>
</body>

</html>