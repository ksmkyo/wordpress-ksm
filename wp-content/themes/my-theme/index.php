<?php get_header(); ?>


            <?php  
            if(have_posts() ) :
                while( have_posts() ) :
                    the_post();
            ?>

            <h3><?php the_title(); ?></h3>

            <div>
                <?php the_content(); ?>
            </div>

            <?php
            endwhile;
        else:
            ?>
            <h3>POST NOT FOUND :(</h3>
            <?php
        endif;
        ?>
<?php get_footer(); 