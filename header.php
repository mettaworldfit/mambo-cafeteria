<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.80">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mambo Car Wash</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Bad+Script&family=Oswald:wght@400;500;600;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        
        
       <!-- Logo -->
    <div class="logo">
        <a href="<?php echo esc_url( home_url('/')); ?>">
            <?php if( function_exists ('the_custom_logo')):?>
                        <?php the_custom_logo()?>
            <?php endif;?>
        </a>
    </div>

   <div class="msj">
   <p>Tel: 809-589-6776</p>
   </div>

    </div><!-- contenedor -->
</header> 
