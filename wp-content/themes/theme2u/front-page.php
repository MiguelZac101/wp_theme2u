<?php get_header(); ?>
    <div id="queVisitar">
        <?php dynamic_sidebar('front-page'); ?>
    </div>
<div id="informacionConsejos">
    <div class="informacion">
        <?php $informacion = new WP_Query('page_id=8'); ?>
        <?php while($informacion->have_posts()): $informacion->the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt();?>
        <?php endwhile; wp_reset_postdata();?>
    </div>
    <div class="consejos">
        <h2>Consejos para viajar a Canada</h2>
        <?php 
            $args = array(
                'cat' => 5,
                'posts_per_page' => 2,
                'order' => 'DESC',
                'orderby' => 'date',
            );
        ?>    
        <?php $consejos = new WP_Query($args);?>    
        <?php while($consejos->have_posts()): $consejos->the_post();?>
            
            <?php the_post_thumbnail('guia-toronto');?>
            <h3><?php the_title();?></h3>
            <?php the_excerpt();?>
            
        <?php endwhile; wp_reset_postdata();?>
    </div>
</div>
<?php get_footer(); ?>
