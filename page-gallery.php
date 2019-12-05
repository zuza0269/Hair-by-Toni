<?php get_header(); ?>
<main>
    <div class="pb-5 container">
        <div class="pt-5 row justify-content-center"> <h1 class="h1gal"> <span style="font-size: 60px; color:#E3542A;" >.</span> <?php the_field('gallery'); ?></h1>  </div>    
     <div class="text-center justify-content-center row">
            <hr class="line-g">
        </div>
       <div class="row text-center">
           <div class="col-sm">
               <img id="imgg1" height="350px" src="<?php the_field('firstimage'); ?>">
          
         
            <img id="imgg4"  class="mt-lg-4" height="350px" src="<?php the_field('second'); ?>">
      
       
            <img id="imgg" class="mt-lg-4" height="350px" src="<?php the_field('third'); ?>">
        </div>
            <div class="col-sm">
                <img id="imgg2" height="350px" src="<?php the_field('fourth'); ?>">
           
        
             <img id="imgg5"  class="mt-lg-4" height="350px" src="<?php the_field('fifth'); ?>">
      
     
             <img id="imgg" class="mt-lg-4" height="350px" src="<?php the_field('sixth'); ?>">
       </div>
       
            <div class="col-sm">
                <img  id="imgg3" height="350px" src="<?php the_field('seventh'); ?>">
            
             <img id="imgg6"  class="mt-lg-4" height="350px" src="<?php the_field('eight'); ?>">
         
  
             <img id="imgg" class="mt-lg-4" height="350px" src="<?php the_field('ninth'); ?>">
       </div>
       </div>
     
                        


    </div>
    </main>
    

    <?php get_footer(); ?>
</body>
</html>