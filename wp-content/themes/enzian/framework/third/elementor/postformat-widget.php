<?php

if (!defined('ABSPATH')) {
	die;
}

if(!class_exists('Enzian_Elementor_PostFormat_Content_Widget')){

	class Enzian_Elementor_PostFormat_Content_Widget extends \Elementor\Widget_Base{

		public function get_name() {
			return 'lakit-postformat-content';
		}

		public function get_title() {
			return esc_html__('LaStudioKit PostFormat Content', 'enzian');
		}

		public function get_icon() {
			return 'eicon-post-info';
		}

		public function get_script_depends() {
			return ['lastudio-kit-base'];
		}

		public function get_style_depends() {
			return ['lastudiokit-builder'];
		}

		protected function register_controls() {

			$this->start_controls_section(
				'section_content',
				[
					'label' => esc_html__( 'Settings', 'enzian' ),
				]
			);

			$this->add_group_control(
				\Elementor\Group_Control_Image_Size::get_type(),
				[
					'name' => 'size',
					'label' => __( 'Image Size', 'enzian' ),
					'default' => 'full',
					'exclude' => [ 'custom' ],
				]
			);

			$this->add_responsive_control(
				'align',
				[
					'label' => __( 'Alignment', 'enzian' ),
					'type' => \Elementor\Controls_Manager::CHOOSE,
					'options' => [
						'left' => [
							'title' => __( 'Left', 'enzian' ),
							'icon' => 'eicon-text-align-left',
						],
						'center' => [
							'title' => __( 'Center', 'enzian' ),
							'icon' => 'eicon-text-align-center',
						],
						'right' => [
							'title' => __( 'Right', 'enzian' ),
							'icon' => 'eicon-text-align-right',
						],
						'justify' => [
							'title' => __( 'Justified', 'enzian' ),
							'icon' => 'eicon-text-align-justify',
						],
					],
					'default' => '',
					'selectors' => [
						'{{WRAPPER}}' => 'text-align: {{VALUE}};',
					],
				]
			);

			$this->end_controls_section();

			$this->start_controls_section(
				'section_image_gallery',
				[
					'label' => esc_html__( 'Image/Gallery', 'enzian' ),
					'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				]
			);

			$this->add_responsive_control(
				'width',
				[
					'label' => __( 'Size (%)', 'enzian' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'default' => [
						'size' => 100,
						'unit' => '%',
					],
					'size_units' => [ '%' ],
					'range' => [
						'%' => [
							'min' => 1,
							'max' => 100,
						],
					],
					'selectors' => [
						'{{WRAPPER}}' => '--postformat-width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			$this->add_control(
				'custom_height',
				array(
					'label'        => esc_html__( 'Enable Custom Image Height', 'enzian' ),
					'type'         => \Elementor\Controls_Manager::SWITCHER,
					'label_on'     => esc_html__( 'Yes', 'enzian' ),
					'label_off'    => esc_html__( 'No', 'enzian' ),
					'return_value' => 'yes',
					'default'      => '',
					'prefix_class'  => 'is-custom-height-'
				)
			);

			$this->add_responsive_control(
				'height',
				array(
					'label' => esc_html__( 'Image Height', 'enzian' ),
					'type'  => \Elementor\Controls_Manager::SLIDER,
					'range' => array(
						'px' => array(
							'min' => 100,
							'max' => 1000,
						),
						'%' => [
							'min' => 0,
							'max' => 200,
						],
						'vh' => array(
							'min' => 0,
							'max' => 100,
						)
					),
					'size_units' => array( 'px', '%', 'em', 'vw', 'vh' ),
					'default' => [
						'size' => 300,
						'unit' => 'px'
					],
					'selectors' => array(
						'{{WRAPPER}}' => '--postformat-height: {{SIZE}}{{UNIT}};',
					),
					'condition' => [
						'custom_height!' => ''
					]
				)
			);

			$this->end_controls_section();

			$this->start_controls_section(
				'section_quote',
				[
					'label' => esc_html__( 'Quote', 'enzian' ),
					'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				]
			);

			$this->add_control(
				'quote_bg_color',
				array(
					'label' => esc_html__( 'Background Color', 'enzian' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => array(
						'{{WRAPPER}} .postformat-content--quote' => 'background-color: {{VALUE}}',
					),
				)
			);

			$this->add_control(
				'quote_text_color',
				array(
					'label' => esc_html__( 'Text Color', 'enzian' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => array(
						'{{WRAPPER}} .postformat-content--quote' => 'color: {{VALUE}}',
					),
				)
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				array(
					'name'     => 'quote_text_typography',
					'label'    => esc_html__( 'Quote Typography', 'enzian' ),
					'selector' => '{{WRAPPER}} .postformat-content-text',
				)
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				array(
					'name'     => 'quote_cite_typography',
					'label'    => esc_html__( 'Cite Typography', 'enzian' ),
					'selector' => '{{WRAPPER}} .postformat-content-cite',
				)
			);

			$this->end_controls_section();

			$this->start_controls_section(
				'section_link',
				[
					'label' => esc_html__( 'Link', 'enzian' ),
					'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				]
			);

			$this->add_control(
				'link_bg_color',
				array(
					'label' => esc_html__( 'Background Color', 'enzian' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => array(
						'{{WRAPPER}} .postformat-content--link' => 'background-color: {{VALUE}}',
					),
				)
			);

			$this->add_control(
				'link_color',
				array(
					'label' => esc_html__( 'Text Color', 'enzian' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => array(
						'{{WRAPPER}} .postformat-content--link' => 'color: {{VALUE}}',
					),
				)
			);

			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				array(
					'name'     => 'link_typography',
					'label'    => esc_html__( 'Link Typography', 'enzian' ),
					'selector' => '{{WRAPPER}} .postformat-content--link',
				)
			);
			$this->add_responsive_control(
				'link_padding',
				array(
					'label'       => esc_html__( 'Padding', 'enzian' ),
					'type'        => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units'  => array( 'px' ),
					'selectors'   => array(
						'{{WRAPPER}} .postformat-content--link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					),
				)
			);
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'link_border',
					'selector' => '{{WRAPPER}} .postformat-content--link',
				]
			);
			$this->end_controls_section();
		}

		protected function render() {
			global $post;
			$image_size = $this->get_settings_for_display('size_size');

			if( !$post instanceof WP_Post){
				return;
			}

			echo enzian_get_post_thumbnail_format( $image_size );
		}

	}

}