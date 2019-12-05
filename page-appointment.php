<?php get_header(); ?>
<?php if (is_page('appointment')) ?>
<main class="ap">
<div class="container">

        <div class="pt-5 row justify-content-center"> <h1 class="h1"> <span style="font-size: 60px; color:#E3542A;" >.</span> APPOINTMENT </h1> </div>
        <div class="mt-5 row justify-content-center"> 
    <p id="nr"><?php the_field('appointment_text'); ?></p> 
    </div>
        <div  class="ml-md-5 mt-5 align-self-center text-center d-flex justify-content-center">
                <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); 
                        // Display post content
                        the_content();
                    endwhile; 
                endif; 
                ?> 
                </div>
                </div>
</main>    
<?php get_footer(); ?>

</body>
</html>   


