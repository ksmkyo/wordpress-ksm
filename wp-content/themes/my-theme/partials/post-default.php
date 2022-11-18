<!-- pagina inicial dos post -->

<div class="row py-4">
    
    <div class="col-sm-4">

        <?php if( has_post_thumbnail()) : 
            the_post_thumbnail('medium', array('class' => 'img-fluid'));
            
        endif; ?>
    </div>

    <div class="col-sm-8" >

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

        <p><?php the_category(','); ?> | <?php the_date(); "<br />"?></p>

        <div>
            <?php the_excerpt(); ?>

            <?php the_tags('tas:', ', ', ''); ?>

            <!-- <p><a class="btn btn-secondary" href="<?php the_permalink(); ?>">Leia mais</a></p> -->
        </div>
    
    </div>

</div>