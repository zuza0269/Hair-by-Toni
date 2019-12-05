<?php get_header(); ?>
<nav data-scroll-header>
        <section id="pageA">
                <div class="container">
                        <div id="div1" class="pt-5 row justify-content-center">
                                        <div class="left col col-auto">
                                        <?php the_field('hair_by_toni'); ?>
                                                        <p class="p mt-2"> <?php the_field('beauty'); ?> <br>
                                                      <span style=" color:#E3542A; float:right;"><?php the_field('since_year'); ?></span> </p>
                                                        </div>
                          <div class="pb-5 text-center col-md-6">
                                <img id="img" src="<?php the_field('main_image'); ?>"  alt="img">    
                          </div>
                        <div class="right col col-auto">
                                        <p class="p1  mt-2"> <br>
                                                <span style="color:#E3542A;"><?php the_field('salon'); ?></span> <br> 
                                                <?php the_field('hairdressing'); ?>
                                        </p>
                                        <?php the_field('esbjerg'); ?>
                                      </div>
                </div>
                <div class="pt-5 text-center row justify-content-center"> 
                        <a data-scroll href="#pageB">  <img id="arrow"  src="<?php the_field('arrow'); ?>"  alt="img"></a>
          </div>
                <hr id="hr"  class="about-line"> <p class="about-text"> <span style="font-size: 30px; color:#E3542A;">.</span> <?php the_field('side_about_us'); ?> </p>
                </section>
</nav>
<nav  data-scroll-header>
        <section id="pageB">
                       
                <div class="container">
                                <p class="services-text"> <span style="font-size: 30px; color:#E3542A;">.</span>  <?php the_field('side_services'); ?> </p>
                        <div class="row justify-content-center"> <h1 class="h1a"> <span style="font-size: 60px; color:#E3542A;" >.</span><?php the_field('about_us'); ?> </h1> </div>
                        <div class="pt-5 row justify-content-center">
                                 
                          <div class="pb-4 text-center col-md-8">
                                <p class="ab"><?php the_field('about_us_text_before'); ?> 
                                        <span id="dots">...</span><span id="more"><?php the_field('about_us_text_after'); ?> 
                                                        </span></p>
                                <button class=" pb-5 btn btn-link" type="button" onclick="myFunction()" id="myBtn">Read more</button>
                          </div>

                        </div>
                        <hr id="hr" class="services-line"> 
                </section>
</nav>
<nav  data-scroll-header>
        <section id="pageC">
           
                <div class="container">
              
                               <div class=" row justify-content-center"> <h1 class="h1s"> <span style="font-size: 60px; color:#E3542A;" >.</span><?php the_field('services'); ?></h1> </div>
                        
                               <div  class=" pb-4 card-group">
                              
                                <div id="card" class=" card" style="background-color:#F7F7F7; border: none;">
                                  
                                  <img class=" pl-5 pr-5" src="<?php the_field('service_one'); ?>" class="card-img-top" alt="woman">
                                 <div class="text-center card-body">
                                  <img class="serv" width="250px" src="<?php the_field('service_one_text'); ?>" alt="col">
                               <p class="text"><?php the_field('coloring_text'); ?><br> <span style="color:rgba(227, 85, 42, 0.637)"><?php the_field('coloring_price'); ?></span>
                               </p>
                                 </div>
                                
                        
                                </div>
                               
                                <div id="card" class=" card" style="background-color:#F7F7F7;border: none;">
                                  <img class=" pl-5 pr-5" src="<?php the_field('service_two'); ?>" class="card-img-top" alt="tool">
                                  <div class="text-center card-body">
                                    <img class="serv" width="250px" src="<?php the_field('service_two_text'); ?>" alt="col">
                                    <p class="text"><?php the_field('styling_text'); ?><br> <span style="color:rgba(227, 85, 42, 0.637)"><?php the_field('styling_price'); ?></span></p>
                                   </div>
                                  
                              </div>
                           
                                <div id="card" class=" card" style="background-color:#F7F7F7; border: none;">
                                  <img class=" pb-4 pl-5 pr-5" src="<?php the_field('service_three'); ?>" class="card-img-top" alt="man">
                                  <div class="text-center card-body">
                                    <img class="serv" width="250px" src="<?php the_field('service_three_text'); ?>" alt="col">
                                    <p class="text"><?php the_field('cut_text'); ?><br><span style="color:rgba(227, 85, 42, 0.637)"><?php the_field('cut_price'); ?></span> </p>
                                   </div>
                                  
                                </div>
                              </div>
                              </div>
                              <p class="testim-text"> <span style="font-size: 30px; color:#E3542A;">.</span> <?php the_field('side_testimonials'); ?> </p>  
                              <hr id="hr"  class="testim-line"> 
                </section>
</nav>
<section id="pageD">
                <div class="container">
                    <p class="contact-text"> <span style="font-size: 30px; color:#E3542A;">.</span> <?php the_field('side_contact_us'); ?> </p>  
                               <div class=" row justify-content-center"> <h1 class="h1t"> <span style="font-size: 60px; color:#E3542A;" >.</span><?php the_field('testimonials'); ?></h1> </div>
                               <div id="carouselExampleControls" class="pt-5 pb-5 carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img width="10px"  src="<?php the_field('testimonial_one'); ?>" class="d-block w-100" alt="1">
                                  </div>
                                  <div class="carousel-item">
                                    <img id="test" src="<?php the_field('testimonial_two'); ?>" class="d-block w-100" alt="2">
                                  </div>
                                  <div class="carousel-item">
                                    <img id="test" src="<?php the_field('testimonial_three'); ?>" class="d-block w-100" alt="3">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  
                                </a>
                              </div>
                        </div>
                        <hr id="hr"  class="contact-line"> 
                </section>
<section id="pageE">
  
  <div id="cont" class="container">
    <div class=" row justify-content-center"> <h1 class="h1c"> <span style="font-size: 60px; color:#E3542A;" >.</span><?php the_field('contact_us'); ?></h1> </div>
    <div class=" row justify-content-center"> 
        <p id="x">X</p>
        </div>
    <div class=" row justify-content-center"> 
    <p id="nr"><?php the_field('contact_us_text'); ?></p> 
    </div>
    <br>
<div class="pb-5 row justify-content-center" >
    <form>
        <div class="form-group">
          <input type="name" class="form-control" id="exampleInputName1"  placeholder="Enter name"  style=" border-radius: 0px; border:1.5px solid #121212; color: #121212;  font-family: identikaSans Light, sans-serif;  background-color: #F7F7F7;">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email"  style=" border-radius: 0px; border:1.5px solid #121212; color: #121212;   font-family: identikaSans Light, sans-serif;  background-color: #F7F7F7;">
          </div>
          <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your message..." rows="3" style=" border-radius: 0px; color: #121212;  font-family: identikaSans Light, sans-serif; border:1.5px solid black;  background-color: #F7F7F7;"></textarea>
            </div>
            <button type="button" class="btn btn-outline-dark" style="border-radius: 0px; border:1.5px solid #E3542A; float: right;  color: #E3542A; background-color: #F7F7F7;">SEND</button>
          </form>
        </div>
          </div>
     

          <div class="container-fluid">
              
                  <div class="mapouter">
                      <div class="gmap_canvas">
                        <iframe width="100%" height="350" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9046.75573852664!2d8.4567418!3d55.4680893!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3b01d4875b21c364!2sHair%20By%20Toni!5e0!3m2!1scs!2sdk!4v1574683476945!5m2!1scs!2sdk"  style="border:0;" allowfullscreen="" frameborder="0" scrolling="no">
                        </iframe>
                      </div></div>
                   
            </div>
  </section>
  <?php get_footer(); ?>
</body>
</html>