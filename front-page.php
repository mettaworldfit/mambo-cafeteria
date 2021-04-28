<?php
/**
 *
 * @link https://www.instagram.com/codevrd/
 *
 * @package WordPress
 * @subpackage Mambo_theme
 * @since Mambo_theme 1.0
 */

?>

<?php get_header(); ?>


<div class="container background-menu">

    <h1 class="menu-logo">Menu</h1>


    <h2 class="category">Platos suaves</h2>

    <div class="menu-container">

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'Platos suaves',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
        );

        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) : $the_query->the_post()
        ?>

            <!-- Menú Here -->

            <article class="menu-content">

                <div class="menu-caption">
                    <h3 class="menu-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
                </div>

                <div class="menu-description">
                    <?php the_content(); ?>
                    <span class="menu-price">$<?php the_field('precio'); ?>.00</span>
                </div>

            </article>

        <?php endwhile;
        wp_reset_postdata(); ?>


    </div> <!-- menu-container -->

    <!-- Categoría: Platos fuertes -->

    <h2 class="category">Platos fuertes</h2>

    <div class="menu-container">

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'Platos fuertes',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
        );

        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) : $the_query->the_post()
        ?>

            <!-- Menú Here -->

            <article class="menu-content">

                <div class="menu-caption">
                    <h3 class="menu-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
                </div>

                <div class="menu-description">
                    <?php the_content(); ?>
                    <span class="menu-price">$<?php the_field('precio'); ?>.00</span>
                </div>

            </article>

        <?php endwhile;
        wp_reset_postdata(); ?>


    </div> <!-- menu-container -->

    <!-- Categoría: Pizzas -->

    <h2 class="category">Pizzas</h2>

    <div class="menu-container">

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'Pizzas',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
        );

        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) : $the_query->the_post()
        ?>

            <!-- Menú Here -->

            <article class="menu-content">

                <div class="menu-caption">
                    <h3 class="menu-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
                </div>

                <div class="menu-description">
                    <?php the_content(); ?>
                    <span class="menu-price">$<?php the_field('precio'); ?>.00</span>
                </div>

            </article>

        <?php endwhile;
        wp_reset_postdata(); ?>


    </div> <!-- menu-container -->

    <br><br><br><br>

    <!-- Categoría: Bebidas -->

    <h2 class="category">Bebidas</h2>

    <div class="menu-container">

        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'Bebidas',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
        );

        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) : $the_query->the_post()
        ?>

            <!-- Menú Here -->

            <article class="menu-content">

                <div class="menu-caption">
                    <div class="cheap-content">
                        <h3 class="menu-title"><a> <?php the_title(); ?> </a></h3> <span class="menu-price">$<?php the_field('precio'); ?>.00</span>
                    </div>
                </div>



            </article>

        <?php endwhile;
        wp_reset_postdata(); ?>


    </div> <!-- menu-container -->


</div> <!-- container -->




<?php get_footer(); ?>