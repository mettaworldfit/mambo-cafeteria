<?php get_header(); ?>

<div class="container">
    

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1 class="single-post-title"><?php the_title(); ?></h1>


            <div class="post-container ">




                <!-- Single-Post Content -->

                <article class="post-single-content">
                    <div class="img-single-post">
                        <?php the_post_thumbnail(array(600, 600)); ?>

                    </div>

                    <div class="caption">
                        <span class="precio">$<?php the_field('precio'); ?></span>

                        <div class="description-article">
                            <?php the_content(); ?>
                        </div>
                    </div>



                </article>



            </div> <!-- post-container -->

</div> <!-- container -->


<?php endwhile;
    else : ?>
<h1>No hay post</h1>
<?php endif; ?>


<?php get_footer(); ?>