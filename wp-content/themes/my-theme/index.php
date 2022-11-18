<!-- Onde ficará os posts: http://localhost/wordpress-teste/ -->
<?php get_header(); ?>

    <div class="container"> 

        <div class="row"> 

            <div class="col-sm-12">

                <?php  

                if(have_posts() ) :
                    while( have_posts() ) :
                        the_post();

                    get_template_part('partials/post', 'default'); 

                endwhile;
            else:
                ?>
                <h3>POST NOT FOUND :(</h3>
                <?php
            endif;
            ?>
            
            </div>
        
        </div>
    
    </div>
        
<?php get_footer();  