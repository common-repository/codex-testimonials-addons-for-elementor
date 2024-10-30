<section id="testimonial-style-01">
    <div class="testimonial_grid style4">
      
        <div class="testimonial_details">
            <div class="testimonial_wrapper">

           
            
          
            <p> <?php echo esc_html($testimonial_text); ?> </p>
            <h2>  <?php echo esc_html($testimonial_name); ?>  </h2>
            <h3> <?php echo esc_html($testimonial_desigination); ?>  </h3>
            <div class="testimonial_icon">
                <?php foreach($testimonial_socials as $testimonia_icon){
                ?>
                <i class="<?php echo esc_attr($testimonia_icon['testimonial_social_icon']['value']);  ?>"></i>
                        

                <?php

                }
                
                ?>
            </div>
            </div>
        </div>
        <div class="testimonial_img">
            <img src="<?php echo esc_url($testimonail_image['url']); ?>" alt="<?php echo esc_attr($testimonial_name); ?>">
        </div>
    </div>
</section>


 

