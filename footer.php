<footer class="page-footer font-small blue pt-4">

<div class="container text-md-left">

  <div class="row justify-content-center">

    <div class="text-center col-md-4 mt-md-0 mt-3">

      <h2 class="h2f"> <span style="font-size: 40px; color:#E3542A;" >.</span><?php the_field('footer_address'); ?></h2> 
     <p class="footer-text"><?php the_field('footer_address_text'); ?></p>
      <p class="footer-text"><?php the_field('footer_contact_info'); ?></p>
        
        <hr class="mt-5 footer-line">

    </div>

    <div  class="text-center col-md-4 mb-md-0 mb-3">
      <img width="100px" src="<?php the_field('footer_logo'); ?>" alt="logo">
      <div class=" text-center justify-content-center row">
        <a target="_blank" class="ic" href="https://www.facebook.com/ToniEsbjerg/"> <img width="30px" src="<?php the_field('facebook_link'); ?>" alt="fb"> </a> 
        <a target="_blank" class="ic ml-3" href="https://www.google.dk/maps/place/Hair+By+Toni/@55.4680893,8.4567418,15z/data=!4m5!3m4!1s0x0:0x3b01d4875b21c364!8m2!3d55.4680893!4d8.4567418">  <img width="30px" src="<?php the_field('google_link'); ?>" alt="tt"> </a> 
        <a target="_blank" class="ic ml-3" href="https://www.instagram.com/toniesbjerg/?hl=cs">  <img  width="30px" src="<?php the_field('instagram_link'); ?>" alt="ig"> </a>
      </div>
    </div>

    <div class="text-center col-md-4 mt-md-0 mt-3">

      <h2 class="h2f"> <span style="font-size: 40px; color:#E3542A;" >.</span><?php the_field('footer_opening_hours'); ?></h2> 
      <div class="row">
        <div class="footer-text mt-2 pl-5 text-left col">
        <?php the_field('days'); ?>
        </div>
        <div class="text-right mt-2 pr-5 footer-text col">
        <?php the_field('hours'); ?>
        </div>
        
      </div>
      <hr class=" footer-line2">
    </div>

  </div>

</div>
<!-- Footer Links -->
<!-- Copyright -->
<div id="copyright" class="footer-copyright text-center py-3">© 2005 Copyright
</div>
<!-- Copyright -->

</footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php wp_footer( ); ?>