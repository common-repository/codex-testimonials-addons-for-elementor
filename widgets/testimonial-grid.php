<?php
/**
 * EWA Elementor Heading Widget.
 *
 * Elementor widget that inserts heading into the page
 *
 * @since 1.0.0
 */
class Codex_Elementor_Testimonail_Basic extends \Elementor\Widget_Base {

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
		return 'elementor-testimonial-pake';
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
		return esc_html__( 'Testimonial Basic', ' codex-elementor-testimonial' );
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
			'testimonial_basic_layout',
			[
				'label' => esc_html__( 'Select Layaout', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::SELECT, 
				'label_block' => true,
				'default' => 'basic-style-1',
				'options' => [
					'basic-style-1'  => esc_html__( 'Testimonial Basic Style 1', ' codex-elementor-testimonial' ), 
					'basic-style-2'  => esc_html__( 'Testimonial Basic Style 2', ' codex-elementor-testimonial' ), 
					'basic-style-3'  => esc_html__( 'Testimonial Basic Style 3', ' codex-elementor-testimonial' ), 
					'basic-style-4'  => esc_html__( 'Testimonial Basic Style 4', ' codex-elementor-testimonial' ), 
					 
				],
			]
		);

		// testimonial Image

		$this->add_control(
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

		$this->add_control(
			'testimonial_name',
			[
				'label' => esc_html__( 'Name', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Md. Rabiul Alam', ' codex-elementor-testimonial' ),
				'placeholder' => esc_html__( 'Type name here', ' codex-elementor-testimonial' ),
				'lable_block' => true,
			]
		);

		
	    // testimonial Degignation

		$this->add_control(
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

		 $this->add_control(
			'testimonial_text',
			[
				'label' => esc_html__( 'Details', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Block patterns are pre-configured block layouts. Use them to get inspired or create new pages in a flash.', ' codex-elementor-testimonial' ),
				'placeholder' => esc_html__( 'Type details here', ' codex-elementor-testimonial' ),
				'lable_block' => true,
			]
		);

		 

		// testimonial Social Icon

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'testimonial_name_title',
			[
				'label' => esc_html__( 'Team Social Name', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook', ' codex-elementor-testimonial' ),
				'placeholder' => esc_html__( 'Type your icon name here', ' codex-elementor-testimonial' ),
			]
		);

		$repeater->add_control(
			'testimonial_social_icon', [
				'label' => esc_html__( 'Team Social Icon', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa fa-facebook-f',
					'library' => 'solid',
				],
				]
		);


		 

		$this->add_control(
			'testimonial_socials',
			[
				'label' => esc_html__( 'Team Socials', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(), 
				'default' => [
					[
						'testimonial_name_title' =>  esc_html__( 'Icon', ' codex-elementor-testimonial' ),
						'testimonial_social_icon' => esc_html__( '', ' codex-elementor-testimonial' ),
						 
					],
					 
					 
				 
				],
				'title_field' => '{{{ testimonial_name_title }}}',
				'separator' => 'before'
			]
		);

		$this->end_controls_section();

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

		 
	   // Social Icon Style

		$this->start_controls_section(
			'social_icon_style',
			 [
				 'label' => esc_html__('Social Icon Style',' codex-elementor-testimonial'),
				 'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			
			 ]
		 );
 
	 
		$this->add_control(
			'social_icon_color',
			[
				'label' => esc_html__( 'Color', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial_icon i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'social_bg_color',
			[
				'label' => esc_html__( 'Backgorund Color', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonial_icon i' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'social_icon_size',
			[
				'label' => esc_html__( 'Size', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 5,
					],
					 
				],
				'default' => [
					'unit' => 'px',
					'size' => 22,
				],
				'selectors' => [
					'{{WRAPPER}} .testimonial_icon i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'social_icon_border',
			[
				'label' => esc_html__( 'Border Radius', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', ],
				'selectors' => [
					'{{WRAPPER}} .testimonial_icon i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'social_padding_border',
			[
				'label' => esc_html__( 'padding', ' codex-elementor-testimonial' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px'],
				'selectors' => [
					'{{WRAPPER}} .testimonial_icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
		$testimonial_basic_layout = $settings['testimonial_basic_layout'];
		$testimonail_image = $settings['testimonail_image'];
		$testimonial_name = $settings['testimonial_name'];
		$testimonial_text = $settings['testimonial_text'];
		$testimonial_desigination = $settings['testimonial_desigination'];
		$testimonial_socials = $settings['testimonial_socials'];
		
		
		 
		 
		switch ($testimonial_basic_layout) {
			case "basic-style-1":
				include( __DIR__ . '/testimonial-basic/basic-style-1.php' );
				break;
			case "basic-style-2":
				include( __DIR__ . '/testimonial-basic/basic-style-2.php' );
				break;
			case "basic-style-3":
				include( __DIR__ . '/testimonial-basic/basic-style-3.php' );
				break; 
			case "basic-style-4":
				include( __DIR__ . '/testimonial-basic/basic-style-4.php' );
				break;	
			default:
			include( __DIR__ . '/testimonial-basic/basic-style-1.php' );
			}

       
	}
}