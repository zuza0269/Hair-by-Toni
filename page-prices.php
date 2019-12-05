<?php get_header(); ?>
<main>
    <div class="pb-5 container">
        <div class="pt-5 row justify-content-center"> <h1 class="h1"> <span style="font-size: 60px; color:#E3542A;" >.</span><?php the_field('prices'); ?> </h1> </div>
        <div class="row">
            <p class="pt-5 headline"><?php the_field('hair'); ?></p> 
            <hr class="line-p">
        </div>    
        <div  class="row">
            <div id="colls" class="col-6">
            <?php the_field('hairstyle_for'); ?>
            </div>
            <div id="price" class="text-right col-6">
            <?php the_field('hair_price'); ?>
                </div>
            </div>
            <div class="row">
                    <p class="pt-5 headline"><?php the_field('style'); ?></p> 
                    <hr class="line-p">
                </div>    
                <div  class="row">
                    <div id="colls" class="col-6">
                    <?php the_field('hairstyle_for'); ?>
                    </div>
                    <div id="price" class="text-right col-6">
                    <?php the_field('style_price'); ?>
                        </div>
                    </div>
                    <div class="row">
                            <p class="pt-5 headline"> <?php the_field('coloring'); ?></p> 
                            <hr class="line-p">
                        </div>    
                        <div  class="row">
                            <div id="colls" class="col-6">
                            <?php the_field('coloring_for'); ?>
                            </div>
                            <div id="price" class="text-right col-6">
                            <?php the_field('coloring_price'); ?>
                                </div>
                            </div>
                            <div class="row">
                                <p class="pt-5 headline"><?php the_field('haircoloring'); ?></p> 
                                <hr class="line-p">
                            </div>    
                            <div  class="row">
                                <div id="colls" class="col-6">
                                <?php the_field('haircoloring_for'); ?>
                                </div>
                                <div id="price" class="text-right col-6">
                                <?php the_field('haircoloring_price'); ?>
                                    </div>
                                </div>
                        

    </div>
    </main>
    

    <?php get_footer(); ?>
</body>
</html>