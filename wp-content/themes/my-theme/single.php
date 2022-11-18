<?php get_header(); ?>

<div class="container pt-5">
    <div class="row">
        <div class="col-sm-8">
        
        <?php if (has_post_thumbnail()) : 
            //thumbnail, medium, large, full
            the_post_thumbnail('large', array('class' => 'img-fluid'));
        
        endif; ?>
        
        <?php if( have_posts() ) : while (have_posts() ) : the_post(); ?>
            
        <h1><?php the_title(); ?></h1>

        <p><?php the_category(','); ?> | <?php the_date(); "<br />"?></p>

        <div>
            <?php the_content(); ?>

            <?php the_tags('tas:', ', ', ''); ?>

        </div>
        <?php endwhile; endif; ?>

        </div>
        
        <div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>

    </div>

</div>

<?php get_footer(); 


