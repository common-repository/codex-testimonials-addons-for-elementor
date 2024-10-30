

<script>
	jQuery(document).ready(function ($) {
	var carousel = function() {
		$('.testimonial_carousel').owlCarousel({
	    loop: <?php echo $slide_loop;?>,
	    autoplay: <?php echo $slide_autoplay;?>,
	    margin: <?php echo $item_mergin;?>, 
	    animateOut: '<?php echo $slide_animate_out;?>',
	    animateIn: '<?php echo $slide_animate_in;?>',
	    nav: <?php echo $slide_nav;?>,
	    autoplayHoverPause: false,
	    items:<?php echo $item_number;?>,
	    navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items: <?php echo $item_number;?>,  
	      }
	    }
		});
	};
	carousel();
});
</script>

<div class="testimonial_carousel owl-carousel">
<?php foreach($testimonial_slider as $testimonial_sliders){
                ?>
    <div>
 
    <section id="testimonial-style-01" class="test-slider-one">
        <div class="testimonial_grid style4">
            <div class="testimonial_img">  
                <img src="<?php echo esc_url($testimonial_sliders['testimonail_image']['url']); ?>" alt="<?php echo esc_attr($testimonial_name); ?>">
            </div>
            <div class="testimonial_details">
                <div class="testimonial_wrapper"> 
                    <h2>  <?php echo esc_html($testimonial_sliders['testimonial_name']); ?>  </h2>
                    <h3> <?php echo esc_html($testimonial_sliders['testimonial_desigination']); ?>  </h3>
                    <p> <?php echo esc_html($testimonial_sliders['testimonial_text']); ?>  </p>
                     
                </div>
            </div>
        </div>
    </section> 
    </div>
     
    <?php

    }

    ?>

      

   
</div>