<?php
/*
 * Template Name: Guía Toronto 
 */
?>
<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>

    <?php if (has_post_thumbnail()) { ?>   
        <div class="destacada">
            <?php the_post_thumbnail('destacada'); ?>
            <h2>
                <?php the_title(); ?>
            </h2>        
        </div>
    <?php } else { ?>
        <h2 class="noimagen"><?php the_title(); ?></h2>
    <?php } ?>

    <div id="primary" class="primary">

        <?php 
        $args = array(
//            'cat' => array(6,5,4),
            'posts_per_page' => 6,
            'orderby' => 'date',
            'order' => 'DESC'
        );        
        ?>
        <?php $guiatoronto = new WP_Query($args); ?>
        <?php while($guiatoronto->have_posts()):$guiatoronto->the_post();?>
        <pre>
            <?php var_dump($guiatoronto);?>
        </pre>
        <?php endwhile; wp_reset_postdata();?>
        
    </div>
<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
