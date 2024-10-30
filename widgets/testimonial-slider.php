<?php
/**
 * EWA Elementor Heading Widget.
 *
 * Elementor widget that inserts heading into the page
 *
 * @since 1.0.0
 */
class Codex_Elementor_Testimonail_Slider extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve heading  widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'elementor-testimonial-slider';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve heading widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Testimonial Slider', ' codex-elementor-testimonial' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve heading  widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-lock-user';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the heading widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'codex-elementor-testimonial' ];
	}

	/**
	 * Register heading widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		
		// start of the Content tab section
	   $this->start_controls_section(
	       'codex_testimonail_tab',
		    [
		        'label' => esc_html__('Elementor Testimonial Pake',' codex-elementor-testimonial'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
	    );

		// Codex Team Card Layout
		
		$this->add_control(
			'testimonial_slider_layout',
			[
				'label' => esc_html__( 'Select Layaout', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::SELECT, 
				'label_block' => true,
				'default' => 'basic-style-1',
				'options' => [
					'basic-style-1'  => esc_html__( 'Testimonial Slider Style 1', ' codex-elementor-testimonial' ), 
					'basic-style-2'  => esc_html__( 'Testimonial Slider Style 2', ' codex-elementor-testimonial' ), 
				  
					 
				],
			]
		);

		// testimonial Image

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'testimonail_image',
			[
				'label' => esc_html__( 'Team Image', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		
	    // testimonial Name

		$repeater->add_control(
			'testimonial_name',
			[
				'label' => esc_html__( 'Name', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
				'default' => esc_html__( 'Md. Rabiul Alam', ' codex-elementor-testimonial' ),
				'placeholder' => esc_html__( 'Type name here', ' codex-elementor-testimonial' ),
				'lable_block' => true,
			]
		);

		
	    // testimonial Degignation

		$repeater->add_control(
			'testimonial_desigination',
			[
				'label' => esc_html__( 'Designation', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'CEO , CodexExpertBD', ' codex-elementor-testimonial' ),
				'placeholder' => esc_html__( 'Type designation here', ' codex-elementor-testimonial' ),
				'lable_block' => true,
			]
		);


		 // testimonial Details

		 $repeater->add_control(
			'testimonial_text',
			[
				'label' => esc_html__( 'Details', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Block patterns are pre-configured block layouts. Use them to get inspired or create new pages in a flash.', ' codex-elementor-testimonial' ),
				'placeholder' => esc_html__( 'Type details here', ' codex-elementor-testimonial' ),
				'lable_block' => true,
			]
		);

        $this->add_control(
			'testimonial_slider',
			[
				'label' => esc_html__( 'Testimonial Slider', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(), 
				'default' => [
					[
						'testimonail_image' =>  esc_html__( 'Add Image', ' codex-elementor-testimonial' ),
						'testimonial_name' => esc_html__( 'Md Rabiul Alam', ' codex-elementor-testimonial' ),
						'testimonial_desigination' => esc_html__( 'CEO , WordPress Developer', ' codex-elementor-testimonial' ),
						'testimonial_text' => esc_html__( 'Block patterns are pre-configured block layouts. Use them to get inspired or create new pages in a flash.', ' codex-elementor-testimonial' ),
						 
					],
					 
					 
				 
				],
				'title_field' => '{{{ testimonial_name }}}',
				'separator' => 'before'
			]
		);

		// testimonial Social Icon

        $this->end_controls_section();

	 // start of the Content tab section
     $this->start_controls_section(
        'settings-section',
         [
             'label' => esc_html__('Settings', 'clark-elementor'),
             'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
        
         ]
     );
 

    $this->add_control(
        'item_number',
        [
            'label' => esc_html__( 'Slider Number', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => '1',
            'options' => [
                '1'  => esc_html__( '1', 'plugin-name' ),
                '2' => esc_html__( '2', 'plugin-name' ),
                '3' => esc_html__( '3', 'plugin-name' ),
                '4' => esc_html__( '4', 'plugin-name' ),
            ],
        ]
    );
    $this->add_control(
        'item_mergin',
        [
            'label' => esc_html__( 'Slider Mergin', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => '1',
            'options' => [
                '5'  => esc_html__( '5', 'plugin-name' ),
                '8' => esc_html__( '8', 'plugin-name' ),
                '10' => esc_html__( '10', 'plugin-name' ),
                '15' => esc_html__( '15', 'plugin-name' ),
            ],
        ]
    );
     $this->add_control(
        'slide_loop',
        [
            'label' => esc_html__( 'Slide Loop?', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'clark-elementor' ),
            'label_off' => esc_html__( 'Hide', 'clark-elementor' ),
            'return_value' => 'true',
            'default' => 'true',
        ]
    );

    $this->add_control(
        'slide_autoplay',
        [
            'label' => esc_html__( 'Slide Autoplay?', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'clark-elementor' ),
            'label_off' => esc_html__( 'Hide', 'clark-elementor' ),
            'return_value' => 'true',
            'default' => 'true',
        ]
    );

    $this->add_control(
        'slide_nav',
        [
            'label' => esc_html__( 'Slide Nav?', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'clark-elementor' ),
            'label_off' => esc_html__( 'Hide', 'clark-elementor' ),
            'return_value' => 'true',
            'default' => 'true',
        ]
    );

    $this->add_control(
        'slide_animate_in',
        [
            'label' => esc_html__( 'Slide Animate In', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'fadeIn',
            'options' => [
                'fadeIn'  => esc_html__( 'fadeIn', 'plugin-name' ),
                'fadeInLeft' => esc_html__( 'fadeInLeft', 'plugin-name' ),
                'fadeInRight' => esc_html__( 'fadeInRight', 'plugin-name' ),
                'fadeInDown' => esc_html__( 'fadeInDown', 'plugin-name' ),
            ],
        ]
    );

    $this->add_control(
        'slide_animate_out',
        [
            'label' => esc_html__( 'Slide Animate Out', 'plugin-name' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'fadeOut',
            'options' => [
                'fadeOut'  => esc_html__( 'fadeOut', 'plugin-name' ),
                'fadeOutLeft' => esc_html__( 'fadeOutLeft', 'plugin-name' ),
                'fadeOutRight' => esc_html__( 'fadeOutRight', 'plugin-name' ),
                'fadeOutDown' => esc_html__( 'fadeOutDown', 'plugin-name' ),
            ],
        ]
    );

     $this->end_controls_section();
    // end of the Content tab section


		// End of the Contect Section 

		// Start of style tab Section

		// Title Style

		$this->start_controls_section(
			'title_style',
			 [
				 'label' => esc_html__('Testimonial Title Style',' codex-elementor-testimonial'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );

		 $this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Title Color', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial_wrapper h2' => 'color: {{VALUE}}',
				],
				 
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .testimonial_wrapper h2',
			]
		);
		
		

		 $this->end_controls_section();

	   // Designation Style

		$this->start_controls_section(
			'desigination_style',
			 [
				 'label' => esc_html__('Testimonial Desiginasion Style',' codex-elementor-testimonial'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );

		 
		 $this->add_control(
			'desigination_color',
			[
				'label' => esc_html__( 'Title Color', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial_wrapper h3' => 'color: {{VALUE}}',
				],
				 
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'designation_typogrphy',
				'selector' => '{{WRAPPER}} .testimonial_wrapper h3',
			]
		);

		 $this->end_controls_section();

		 // Testimonial Details Style

		$this->start_controls_section(
			'testdetails_style',
			 [
				 'label' => esc_html__('Testimonial Details Style',' codex-elementor-testimonial'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );

		 
		 $this->add_control(
			'testdesigination_color',
			[
				'label' => esc_html__( 'Title Color', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial_wrapper p' => 'color: {{VALUE}}',
				],
				 
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'testdesignation_typogrphy',
				'selector' => '{{WRAPPER}} .testimonial_wrapper p',
			]
		);

		 $this->end_controls_section();


		 // Testimonial Details Style

		$this->start_controls_section(
			'testi_image_style',
			 [
				 'label' => esc_html__('Testimonial Image Style',' codex-elementor-testimonial'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );

	 

		 $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'codex-elementor-testimonial' ),
				'selector' => '{{WRAPPER}} .testimonial_img',
			]
		);
		
		$this->add_control(
			'imageborder',
			[
				'label' => esc_html__( 'Border', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', ],
				'selectors' => [
					'{{WRAPPER}} .testimonial_img img' => 'border: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);	
		 $this->end_controls_section();

		 
	    

		  // Testimonial Box Style

		$this->start_controls_section(
			'box_bg_style',
			 [
				 'label' => esc_html__('Box Style',' codex-elementor-testimonial'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
 
 

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Box Background', 'plugin-name' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .testimonial_grid',
			]
		);

		
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'borders',
				'label' => esc_html__( 'Border', 'codex-elementor-testimonial' ),
				'selector' => '{{WRAPPER}} .testimonial_grid',
			]
		);
		
		$this->add_control(
			'bgimageborder',
			[
				'label' => esc_html__( 'Border', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', ],
				'selectors' => [
					'{{WRAPPER}} .testimonial_grid' => 'border: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);	
		
		$this->add_control(
			'bg_box_padd',
			[
				'label' => esc_html__( 'padding', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px'],
				'selectors' => [
					'{{WRAPPER}} .testimonial_grid' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		 $this->end_controls_section();

	}

	/**
	 * Render heading  widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		// get our input from the widget settings.
		$settings = $this->get_settings_for_display(); 
		$testimonial_slider_layout = $settings['testimonial_slider_layout'];
		$testimonail_image = $settings['testimonail_image'];
		$testimonial_name = $settings['testimonial_name'];
		$testimonial_text = $settings['testimonial_text'];
		$testimonial_desigination = $settings['testimonial_desigination'];
		$testimonial_slider = $settings['testimonial_slider'];
        $item_number = $settings['item_number'];
        $item_mergin = $settings['item_mergin'];
        $slide_loop = $settings['slide_loop'];
		$slide_autoplay = $settings['slide_autoplay'];
		$slide_nav = $settings['slide_nav'];
		$slide_animate_in = $settings['slide_animate_in'];
		$slide_animate_out = $settings['slide_animate_out'];

        if($slide_loop == 'true') {
			$slide_loop = 'true';
		} else {
			$slide_loop = 'false';
		}

		if($slide_autoplay == 'true') {
			$slide_autoplay = 'true';
		} else {
			$slide_autoplay = 'false';
		}

		if($slide_nav == 'true') {
			$slide_nav = 'true';
		} else {
			$slide_nav = 'false';
		}

		 
		switch ($testimonial_slider_layout) {
			case "slider-style-1":
				include( __DIR__ . '/testimonial-slider/slider-style-1.php' );
				break;
			case "basic-style-2":
				include( __DIR__ . '/testimonial-slider/slider-style-2.php' );
				break;
		 	
			default:
			include( __DIR__ . '/testimonial-slider/slider-style-1.php' );
			}

       
	}
}