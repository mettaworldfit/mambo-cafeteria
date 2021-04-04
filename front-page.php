<?php get_header(); ?>



<div class="container">

<h1 class="text-center mb-5">Menú</h1>


    <div class="post-container ">

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'orderby'=> 'title', 
            'order' => 'ASC'
        );

        $the_query = new WP_Query($args);
        while ($the_query->have_posts()) : $the_query->the_post()
        ?>

            <!-- Post Here -->



            <div class="post-content">
                <div class="img">
                    <?php the_post_thumbnail(array(420, 300)); ?>

                </div>

                <div class="caption">
                    <h3> <?php the_title(); ?></h3>
                    <span class="precio">$<?php the_field('precio'); ?></span>
                </div>

            </div>



        <?php endwhile;
        wp_reset_postdata(); ?>


    </div>


</div>




<?php get_footer(); ?>