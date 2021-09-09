<?php

namespace Element_ready\Widget_Controls;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Box_Shadow;

trait Shopping_Cart_Style {

    public function icon_css($title = 'icon style',$slug='shopping_icon_style',$element_name='shopping_ICON_ELEMENT_NAME') {
        
        
        $widget = $this->get_name().'_'.element_ready_menu_camelize($slug);
        
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            [
                'label' => $title,
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );

                    // Typgraphy
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'      => $widget.'_typography',
                            'selector'  => '{{WRAPPER}} .element-ready-shopping-cart-open i',
                        ]
                    );

                    // Icon Color
                    $this->add_control(
                        $widget.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .element-ready-shopping-cart-open i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .element-ready-shopping-cart-open i',
                        ]
                    );

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .element-ready-shopping-cart-open i',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        $widget.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping-cart-open i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    
                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => $widget.'_shadow',
                            'selector' => '{{WRAPPER}} .element-ready-shopping-cart-open i',
                        ]
                    );

                    // Margin
                    $this->add_responsive_control(
                        $widget.'_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping-cart-open i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Padding
                    $this->add_responsive_control(
                        $widget.'_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping-cart-open i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

                $this->start_controls_tab(
                    $widget.'_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );

                    //Hover Color
                    $this->add_control(
                        'hover_'.$element_name.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} :hover .element-ready-shopping-cart-open i, {{WRAPPER}} :focus .element-ready-shopping-cart-open i' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Hover Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping-cart-open i,{{WRAPPER}} :focus .element-ready-shopping-cart-open i',
                        ]
                    );	

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping-cart-open i,{{WRAPPER}} :hover .element-ready-shopping-cart-open i',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        'hover_'.$element_name.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} :hover .element-ready-shopping-cart-open i' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_shadow',
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping-cart-open i',
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();

            $this->add_responsive_control(
                $widget.'_section___section_show_hide_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Display', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex'         => esc_html__( 'Flex', 'element-ready' ),
                        'block'        => esc_html__( 'Block', 'element-ready' ),
                        'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                        'grid'         => esc_html__( 'Grid', 'element-ready' ),
                        'none'         => esc_html__( 'None', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-open' => 'display: {{VALUE}};',
                    ],
                ]
            );
            $this->add_control(
                $widget.'_section___section_popover_'.$element_name.'_position',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                    'label_off' => esc_html__( 'Default', 'element-ready' ),
                    'label_on' => esc_html__( 'Custom', 'element-ready' ),
                    'return_value' => 'yes',
                ]
            );
    
            $this->start_popover();
            $this->add_responsive_control(
                $widget.'_section__'.$element_name.'_position_type',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'fixed'    => esc_html__('Fixed','element-ready'),
                        'absolute' => esc_html__('Absolute','element-ready'),
                        'relative' => esc_html__('Relative','element-ready'),
                        'sticky'   => esc_html__('Sticky','element-ready'),
                        'static'   => esc_html__('Static','element-ready'),
                        'inherit'  => esc_html__('inherit','element-ready'),
                        ''         => esc_html__('none','element-ready'),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart' => 'position: {{VALUE}};',
                    ],
                  
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_position_left',
                [
                    'label' => esc_html__( 'Position Left', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart' => 'left: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_top',
                [
                    'label' => esc_html__( 'Position Top', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart' => 'top: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_bottom',
                [
                    'label' => esc_html__( 'Position Bottom', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart' => 'bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_right',
                [
                    'label' => esc_html__( 'Position Right', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart' => 'right: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_popover();
        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }

    public function interface_text_css($title = 'Interface Text style',$slug='shopping_interface_style',$element_name='shopping_interface_ele') {
        
        
        $widget = $this->get_name().'_'.element_ready_camelize($slug);
        
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            [
                'label' => $title,
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );

                    // Typgraphy
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'      => $widget.'_typography',
                            'selector'  => '{{WRAPPER}} .element-ready-shopping-cart-open',
                        ]
                    );

                    // Icon Color
                    $this->add_control(
                        $widget.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .element-ready-shopping-cart-open' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .element-ready-shopping-cart-open',
                        ]
                    );

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .element-ready-shopping-cart-open',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        $widget.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping-cart-open' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    
                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => $widget.'_shadow',
                            'selector' => '{{WRAPPER}} .element-ready-shopping-cart-open',
                        ]
                    );

                    // Margin
                    $this->add_responsive_control(
                        $widget.'_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping-cart-open' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Padding
                    $this->add_responsive_control(
                        $widget.'_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping-cart-open' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

                $this->start_controls_tab(
                    $widget.'_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );

                    //Hover Color
                    $this->add_control(
                        'hover_'.$element_name.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} :hover .element-ready-shopping-cart-open, {{WRAPPER}} :focus .element-ready-shopping-cart-open' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Hover Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping-cart-open,{{WRAPPER}} :focus .element-ready-shopping-cart-open',
                        ]
                    );	

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping-cart-open,{{WRAPPER}} :hover .element-ready-shopping-cart-open',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        'hover_'.$element_name.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} :hover .element-ready-shopping-cart-open' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_shadow',
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping-cart-open',
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();

            $this->add_responsive_control(
                $widget.'_section___section_show_hide_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Display', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex'         => esc_html__( 'Flex', 'element-ready' ),
                        'block'        => esc_html__( 'Block', 'element-ready' ),
                        'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                        'grid'         => esc_html__( 'Grid', 'element-ready' ),
                        'none'         => esc_html__( 'None', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-open' => 'display: {{VALUE}};',
                    ],
                ]
            );
            $this->add_control(
                $widget.'_section___section_popover_'.$element_name.'_position',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                    'label_off' => esc_html__( 'Default', 'element-ready' ),
                    'label_on' => esc_html__( 'Custom', 'element-ready' ),
                    'return_value' => 'yes',
                ]
            );
    
            $this->start_popover();
            $this->add_responsive_control(
                $widget.'_section__'.$element_name.'_position_type',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'fixed'    => esc_html__('Fixed','element-ready'),
                        'absolute' => esc_html__('Absolute','element-ready'),
                        'relative' => esc_html__('Relative','element-ready'),
                        'sticky'   => esc_html__('Sticky','element-ready'),
                        'static'   => esc_html__('Static','element-ready'),
                        'inherit'  => esc_html__('inherit','element-ready'),
                        ''         => esc_html__('none','element-ready'),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart' => 'position: {{VALUE}};',
                    ],
                  
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_position_left',
                [
                    'label' => esc_html__( 'Position Left', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart' => 'left: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_top',
                [
                    'label' => esc_html__( 'Position Top', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart' => 'top: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_bottom',
                [
                    'label' => esc_html__( 'Position Bottom', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart' => 'bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_right',
                [
                    'label' => esc_html__( 'Position Right', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart' => 'right: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_popover();
        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }
    public function interface_cart_count_css($title = 'Interface Cart count',$slug='shopping_interfacecart_count_style',$element_name='shopping_cart_count_ele') {
        
        
        $widget = $this->get_name().'_'.element_ready_camelize($slug);
        
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            [
                'label' => $title,
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );

                    // Typgraphy
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'      => $widget.'_typography',
                            'selector'  => '{{WRAPPER}} .element-ready-interface-cart-count',
                        ]
                    );

                    // Icon Color
                    $this->add_control(
                        $widget.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .element-ready-interface-cart-count' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .element-ready-interface-cart-count',
                        ]
                    );

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .element-ready-interface-cart-count',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        $widget.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-interface-cart-count' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    
                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => $widget.'_shadow',
                            'selector' => '{{WRAPPER}} .element-ready-interface-cart-count',
                        ]
                    );

                    // Margin
                    $this->add_responsive_control(
                        $widget.'_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-interface-cart-count' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Padding
                    $this->add_responsive_control(
                        $widget.'_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-interface-cart-count' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

                $this->start_controls_tab(
                    $widget.'_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );

                    //Hover Color
                    $this->add_control(
                        'hover_'.$element_name.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} :hover .element-ready-interface-cart-count, {{WRAPPER}} :focus .element-ready-interface-cart-count' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Hover Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} :hover .element-ready-interface-cart-count,{{WRAPPER}} :focus .element-ready-interface-cart-count',
                        ]
                    );	

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} :hover .element-ready-interface-cart-count,{{WRAPPER}} :hover .element-ready-interface-cart-count',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        'hover_'.$element_name.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} :hover .element-ready-interface-cart-count' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_shadow',
                            'selector' => '{{WRAPPER}} :hover .element-ready-interface-cart-count',
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();

            $this->add_responsive_control(
                $widget.'_section___section_show_hide_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Display', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex'         => esc_html__( 'Flex', 'element-ready' ),
                        'block'        => esc_html__( 'Block', 'element-ready' ),
                        'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                        'grid'         => esc_html__( 'Grid', 'element-ready' ),
                        'none'         => esc_html__( 'None', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-interface-cart-count' => 'display: {{VALUE}};',
                    ],
                ]
            );
            $this->add_control(
                $widget.'_section___section_popover_'.$element_name.'_position',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                    'label_off' => esc_html__( 'Default', 'element-ready' ),
                    'label_on' => esc_html__( 'Custom', 'element-ready' ),
                    'return_value' => 'yes',
                ]
            );
    
            $this->start_popover();
            $this->add_responsive_control(
                $widget.'_section__'.$element_name.'_position_type',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'fixed'    => esc_html__('Fixed','element-ready'),
                        'absolute' => esc_html__('Absolute','element-ready'),
                        'relative' => esc_html__('Relative','element-ready'),
                        'sticky'   => esc_html__('Sticky','element-ready'),
                        'static'   => esc_html__('Static','element-ready'),
                        'inherit'  => esc_html__('inherit','element-ready'),
                        ''         => esc_html__('none','element-ready'),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-interface-cart-count' => 'position: {{VALUE}};',
                    ],
                  
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_position_left',
                [
                    'label' => esc_html__( 'Position Left', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -2100,
                            'max' => 2100,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-interface-cart-count' => 'left: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_top',
                [
                    'label' => esc_html__( 'Position Top', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-interface-cart-count' => 'top: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_bottom',
                [
                    'label' => esc_html__( 'Position Bottom', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-interface-cart-count' => 'bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_right',
                [
                    'label' => esc_html__( 'Position Right', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -2100,
                            'max' => 2100,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => -100,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-interface-cart-count' => 'right: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_popover();
        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }
    

    public function popup_css($title = 'PopUp',$slug='popup_box_style',$element_name='POPUp_ELEMENT_NAME') {
        
        
        $widget = $this->get_name().'_'.element_ready_camelize($slug);
        
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            [
                'label' => $title,
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            $widget.'_section___section_popover_'.$element_name.'close_position',
            [
                'label'        => esc_html__( 'Close Icon Position', 'element-ready' ),
                'type'         => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                'label_off'    => esc_html__( 'Default', 'element-ready' ),
                'label_on'     => esc_html__( 'Custom', 'element-ready' ),
                'return_value' => 'yes',
            ]
        );

        $this->start_popover();
            
            $this->add_responsive_control(
                $widget.'_section_cl__'.$element_name.'close_position_type',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'fixed'    => esc_html__('Fixed','element-ready'),
                        'absolute' => esc_html__('Absolute','element-ready'),
                        'relative' => esc_html__('Relative','element-ready'),
                        'sticky'   => esc_html__('Sticky','element-ready'),
                        'static'   => esc_html__('Static','element-ready'),
                        'inherit'  => esc_html__('Inherit','element-ready'),
                        ''         => esc_html__('none','element-ready'),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-close' => 'position: {{VALUE}};',
                    ],
                
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'close_position_left',
                [
                    'label' => esc_html__( 'Position Left', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-close' => 'left: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'close_r_position_top',
                [
                    'label' => esc_html__( 'Position Top', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-close' => 'top: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'close_r_position_bottom',
                [
                    'label' => esc_html__( 'Position Bottom', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-close' => 'bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'close_r_position_right',
                [
                    'label' => esc_html__( 'Position Right', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-close' => 'right: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_popover();

            $this->add_control(
                'popup_close_icon',
                [
                    'label' => esc_html__( 'Close Icon', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-times',
                        'library' => 'solid',
                    ],
                ]
            );

            $this->add_group_control(
                Group_Control_Typography:: get_type(),
                [
                    'name'      => $widget.'_close_typography',
                    'selector'  => '{{WRAPPER}} .element-ready-shopping-cart-close i',
                ]
            );

            // Icon Color
            $this->add_control(
                $widget.'close_icon_color',
                [
                    'label'     => esc_html__( 'Close Icon Color', 'element-ready' ),
                    'type'      => Controls_Manager::COLOR,
                    'default'   => '',
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-close i' => 'color: {{VALUE}};',
                    ],
                ]
            );

            $this->add_control(
                $widget.'close_icon_bg_color',
                [
                    'label'     => esc_html__( 'Close Icon Background', 'element-ready' ),
                    'type'      => Controls_Manager::COLOR,
                    'default'   => '',
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-close' => 'background: {{VALUE}};',
                    ],
                ]
            );

            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );


                    // Background
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .element-ready-shopping-cart-canvas,{{WRAPPER}} .element-ready-user-modal-content',
                        ]
                    );

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .element-ready-shopping-cart-canvas, {{WRAPPER}} .element-ready-user-modal-content',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        $widget.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .element-ready-user-modal-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    
                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => $widget.'_shadow',
                            'selector' => '{{WRAPPER}} .element-ready-shopping-cart-canvas,{{WRAPPER}} .element-ready-user-modal-content',
                        ]
                    );

                    // Margin
                    $this->add_responsive_control(
                        $widget.'_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .element-ready-user-modal-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Padding
                    $this->add_responsive_control(
                        $widget.'_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .element-ready-user-modal-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

       
            $this->end_controls_tabs();

            $this->add_responsive_control(
                $widget.'_section___section_show_hide_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Display', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex'         => esc_html__( 'Flex', 'element-ready' ),
                        'block'        => esc_html__( 'Block', 'element-ready' ),
                        'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                        'grid'         => esc_html__( 'Grid', 'element-ready' ),
                        'none'         => esc_html__( 'None', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'display: {{VALUE}};',
                        '{{WRAPPER}} .element-ready-user-modal-content' => 'display: {{VALUE}};',
                    ],
                ]
            );
            $this->add_control(
                $widget.'_section___section_popover_'.$element_name.'_position',
                [
                    'label'        => esc_html__( 'Position', 'element-ready' ),
                    'type'         => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                    'label_off'    => esc_html__( 'Default', 'element-ready' ),
                    'label_on'     => esc_html__( 'Custom', 'element-ready' ),
                    'return_value' => 'yes',
                ]
            );

            $this->add_responsive_control(
                $widget.'_section___section_show_hide_'.$element_name.'_direction',
                [
                    'label' => esc_html__( 'Direction', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'right:0!important',
                    'options' => [
                        'right:0!important' => esc_html__( 'Right', 'element-ready' ),
                        'left:0!important'  => esc_html__( 'Left', 'element-ready' ),
                        ''                  => esc_html__( 'None', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-canvas.open ' => '{{VALUE}};',
                        
                    ],
                ]
            );
    
            $this->start_popover();
            $this->add_responsive_control(
                $widget.'_section__'.$element_name.'_position_type',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'fixed'    => esc_html__('Fixed','element-ready'),
                        'absolute' => esc_html__('Absolute','element-ready'),
                        'relative' => esc_html__('Relative','element-ready'),
                        'sticky'   => esc_html__('Sticky','element-ready'),
                        'static'   => esc_html__('Static','element-ready'),
                        'inherit'  => esc_html__('inherit','element-ready'),
                        ''         => esc_html__('none','element-ready'),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'position: {{VALUE}};',
                        '{{WRAPPER}} .element-ready-user-modal-content' => 'position: {{VALUE}};',
                    ],
                    
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_position_left',
                [
                    'label' => esc_html__( 'Position Left', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'left: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .element-ready-user-modal-content' => 'left: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_top',
                [
                    'label' => esc_html__( 'Position Top', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'top: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .element-ready-user-modal-content' => 'top: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_bottom',
                [
                    'label' => esc_html__( 'Position Bottom', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'bottom: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .element-ready-user-modal-content' => 'bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_right',
                [
                    'label' => esc_html__( 'Position right', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'right: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .element-ready-user-modal-content' => 'right: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_popover();

            $this->add_control(
                $widget.'main_section_'.$element_name.'_rbox_popover_section_sizen',
            [
                'label' => esc_html__( 'Box Size', 'element-ready' ),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                'label_off' => esc_html__( 'Default', 'element-ready' ),
                'label_on' => esc_html__( 'Custom', 'element-ready' ),
                'return_value' => 'yes',
              
            ]
        );

        $this->start_popover();

        $this->add_responsive_control(
            $widget.'main_section_'.$element_name.'_r_section__width',
            [
                'label' => esc_html__( 'Width', 'element-ready' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1600,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
               
                'selectors' => [
                    '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .modal .modal-dialog' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            $widget.'main_section_'.$element_name.'_r_container_height',
            [
                'label' => esc_html__( 'Height', 'element-ready' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1600,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
               
                'selectors' => [
                    '{{WRAPPER}} .element-ready-shopping-cart-canvas' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .modal .modal-dialog' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

       
        $this->end_popover();


        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }

    public function popup_overlay_css($title = 'PopUp Overlay',$slug='popup_box_overlay_style',$element_name='POPUp_ovelay_ELEMENT_NAME') {
        
        
        $widget = $this->get_name().'_'.element_ready_camelize($slug);
        
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            [
                'label' => $title,
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

       
      
            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );


                    // Background
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .element-ready-shopping-cart-wrapper .overlay.open::before',
                        ]
                    );

                   
                $this->end_controls_tab();

       
            $this->end_controls_tabs();

        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }

    public function checkout_button_css($title = 'View Button',$slug='view_b_style',$element_name='view_button_ele_name') {
        
        
        $widget = $this->get_name().'_'.element_ready_camelize($slug);
        
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            [
                'label' => $title,
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );

                    // Typgraphy
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'      => $widget.'_typography',
                            'selector'  => '{{WRAPPER}} .cart-btn .element-ready-cart-btn',
                        ]
                    );

                    // Icon Color
                    $this->add_control(
                        $widget.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .cart-btn .element-ready-cart-btn' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .cart-btn .element-ready-cart-btn',
                        ]
                    );

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .cart-btn .element-ready-cart-btn',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        $widget.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .cart-btn .element-ready-cart-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    
                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => $widget.'_shadow',
                            'selector' => '{{WRAPPER}} .cart-btn .element-ready-cart-btn',
                        ]
                    );

                    // Margin
                    $this->add_responsive_control(
                        $widget.'_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .cart-btn .element-ready-cart-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Padding
                    $this->add_responsive_control(
                        $widget.'_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .cart-btn .element-ready-cart-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

                $this->start_controls_tab(
                    $widget.'_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );

                    //Hover Color
                    $this->add_control(
                        'hover_'.$element_name.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} :hover .cart-btn .element-ready-cart-btn, {{WRAPPER}} :focus .cart-btn .element-ready-cart-btn' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Hover Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} :hover .cart-btn .element-ready-cart-btn,{{WRAPPER}} :focus .cart-btn .element-ready-cart-btn',
                        ]
                    );	

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} :hover .cart-btn .element-ready-cart-btn,{{WRAPPER}} :hover .cart-btn .element-ready-cart-btn',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        'hover_'.$element_name.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} :hover .cart-btn .element-ready-cart-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_shadow',
                            'selector' => '{{WRAPPER}} :hover .cart-btn .element-ready-cart-btn',
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();

            $this->add_responsive_control(
                $widget.'_section___section_show_hide_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Display', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex'         => esc_html__( 'Flex', 'element-ready' ),
                        'block'        => esc_html__( 'Block', 'element-ready' ),
                        'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                        'grid'         => esc_html__( 'Grid', 'element-ready' ),
                        'none'         => esc_html__( 'None', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'display: {{VALUE}};',
                    ],
                ]
            );
            $this->add_control(
                $widget.'_section___section_popover_'.$element_name.'_position',
                [
                    'label'        => esc_html__( 'Position', 'element-ready' ),
                    'type'         => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                    'label_off'    => esc_html__( 'Default', 'element-ready' ),
                    'label_on'     => esc_html__( 'Custom', 'element-ready' ),
                    'return_value' => 'yes',
                ]
            );
    
            $this->start_popover();
            $this->add_responsive_control(
                $widget.'_section__'.$element_name.'_position_type',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'fixed'    => esc_html__('Fixed','element-ready'),
                        'absolute' => esc_html__('Absolute','element-ready'),
                        'relative' => esc_html__('Relative','element-ready'),
                        'sticky'   => esc_html__('Sticky','element-ready'),
                        'static'   => esc_html__('Static','element-ready'),
                        'inherit'  => esc_html__('inherit','element-ready'),
                        ''         => esc_html__('none','element-ready'),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'position: {{VALUE}};',
                    ],
                  
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_position_left',
                [
                    'label' => esc_html__( 'Position Left', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'left: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_top',
                [
                    'label' => esc_html__( 'Position Top', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'top: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_bottom',
                [
                    'label' => esc_html__( 'Position Bottom', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_right',
                [
                    'label' => esc_html__( 'Position right', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'right: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_popover();
        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }

    public function view_cart_button_css($title = 'Checkout Cart',$slug='view_cart_style',$element_name='view_cart_button_ele_name') {
        
        
        $widget = $this->get_name().'_'.element_ready_camelize($slug);
        
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            [
                'label' => $title,
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );

                    // Typgraphy
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'      => $widget.'_typography',
                            'selector'  => '{{WRAPPER}} .cart-btn .element-ready-checkout-btn',
                        ]
                    );

                    // Icon Color
                    $this->add_control(
                        $widget.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .cart-btn .element-ready-checkout-btn' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .cart-btn .element-ready-checkout-btn',
                        ]
                    );

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .cart-btn .element-ready-checkout-btn',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        $widget.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .cart-btn .element-ready-checkout-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    
                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => $widget.'_shadow',
                            'selector' => '{{WRAPPER}} .cart-btn .element-ready-checkout-btn',
                        ]
                    );

                    // Margin
                    $this->add_responsive_control(
                        $widget.'_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .cart-btn .element-ready-checkout-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Padding
                    $this->add_responsive_control(
                        $widget.'_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .cart-btn .element-ready-checkout-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

                $this->start_controls_tab(
                    $widget.'_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );

                    //Hover Color
                    $this->add_control(
                        'hover_'.$element_name.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} :hover .cart-btn .element-ready-checkout-btn, {{WRAPPER}} :focus .cart-btn .element-ready-checkout-btn' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Hover Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} :hover .cart-btn .element-ready-checkout-btn,{{WRAPPER}} :focus .cart-btn .element-ready-checkout-btn',
                        ]
                    );	

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} :hover .cart-btn .element-ready-checkout-btn,{{WRAPPER}} :hover .cart-btn .element-ready-checkout-btn',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        'hover_'.$element_name.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} :hover .cart-btn .element-ready-checkout-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_shadow',
                            'selector' => '{{WRAPPER}} :hover .cart-btn .element-ready-checkout-btn',
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();

            $this->add_responsive_control(
                $widget.'_section___section_show_hide_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Display', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex'         => esc_html__( 'Flex', 'element-ready' ),
                        'block'        => esc_html__( 'Block', 'element-ready' ),
                        'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                        'grid'         => esc_html__( 'Grid', 'element-ready' ),
                        'none'         => esc_html__( 'None', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn .element-ready-cart-btn' => 'display: {{VALUE}};',
                    ],
                ]
            );
            $this->add_control(
                $widget.'_section___section_popover_'.$element_name.'_position',
                [
                    'label'        => esc_html__( 'Position', 'element-ready' ),
                    'type'         => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                    'label_off'    => esc_html__( 'Default', 'element-ready' ),
                    'label_on'     => esc_html__( 'Custom', 'element-ready' ),
                    'return_value' => 'yes',
                ]
            );
    
            $this->start_popover();
            $this->add_responsive_control(
                $widget.'_section__'.$element_name.'_position_type',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'fixed'    => esc_html__('Fixed','element-ready'),
                        'absolute' => esc_html__('Absolute','element-ready'),
                        'relative' => esc_html__('Relative','element-ready'),
                        'sticky'   => esc_html__('Sticky','element-ready'),
                        'static'   => esc_html__('Static','element-ready'),
                        'inherit'  => esc_html__('inherit','element-ready'),
                        ''         => esc_html__('none','element-ready'),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'position: {{VALUE}};',
                    ],
                   
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_position_left',
                [
                    'label' => esc_html__( 'Position Left', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'left: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_top',
                [
                    'label' => esc_html__( 'Position Top', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'top: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_bottom',
                [
                    'label' => esc_html__( 'Position Bottom', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_right',
                [
                    'label' => esc_html__( 'Position right', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .cart-btn' => 'right: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_popover();
        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }

    public function sub_total_title_css($title = 'Sub Total heading',$slug='sub_total_style',$element_name='sub_total_') {
        
        
        $widget = $this->get_name().'_'.element_ready_camelize($slug);
        
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            [
                'label' => $title,
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

                $this->add_group_control(
                    Group_Control_Border:: get_type(),
                    [
                        'name'     => $widget.'_topbar_border',
                        'label'    => esc_html__( 'Border', 'element-ready' ),
                        'selector' => '{{WRAPPER}} .element-ready-shopping_cart-btn',
                    ]
                );


            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );

                    // Typgraphy
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'      => $widget.'_typography',
                            'selector'  => '{{WRAPPER}} .element-ready-shopping_cart-btn .element-ready-sub-total,{{WRAPPER}} .element_ready_modal_lost_password',
                        ]
                    );

                    // Icon Color
                    $this->add_control(
                        $widget.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .element-ready-shopping_cart-btn .element-ready-sub-total' => 'color: {{VALUE}} !important;',
                                '{{WRAPPER}} .element_ready_modal_lost_password' => 'color: {{VALUE}} !important;',
                            ],
                        ]
                    );

                    // Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .element-ready-shopping_cart-btn .element-ready-sub-total,{{WRAPPER}} .element_ready_modal_lost_password',
                        ]
                    );

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .element-ready-shopping_cart-btn .element-ready-sub-total,{{WRAPPER}} .element_ready_modal_lost_password',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        $widget.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping_cart-btn .element-ready-sub-total' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .element_ready_modal_lost_password' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    
                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => $widget.'_shadow',
                            'selector' => '{{WRAPPER}} .element_ready_lost_password,{{WRAPPER}} .element_ready_modal_lost_password',
                        ]
                    );

                    // Margin
                    $this->add_responsive_control(
                        $widget.'_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element_ready_lost_password' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .element_ready_modal_lost_password' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Padding
                    $this->add_responsive_control(
                        $widget.'_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping_cart-btn .element-ready-sub-total' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};display:block;',
                                '{{WRAPPER}} .element_ready_modal_lost_password' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};display:block;',
                            ],
                        ]
                    );

                $this->end_controls_tab();

                $this->start_controls_tab(
                    $widget.'_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );

                    //Hover Color
                    $this->add_control(
                        'hover_'.$element_name.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} :hover .element-ready-shopping_cart-btn .element-ready-sub-total, {{WRAPPER}} :focus .element-ready-shopping_cart-btn .element-ready-sub-total' => 'color: {{VALUE}};',
                                '{{WRAPPER}} :hover .element_ready_modal_lost_password, {{WRAPPER}} :focus .element_ready_modal_lost_password' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Hover Background
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping_cart-btn .element-ready-sub-total,{{WRAPPER}} :focus .element-ready-shopping_cart-btn .element-ready-sub-total,{{WRAPPER}} :hover .element_ready_modal_lost_password,{{WRAPPER}} :focus .element_ready_modal_lost_password',
                        ]
                    );	

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping_cart-btn .element-ready-sub-total,{{WRAPPER}} :hover .element-ready-shopping_cart-btn .element-ready-sub-total,{{WRAPPER}} :hover .element_ready_modal_lost_password,{{WRAPPER}} :hover .element_ready_modal_lost_password',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        'hover_'.$element_name.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} :hover .element-ready-shopping_cart-btn .element-ready-sub-total' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} :hover .element_ready_modal_lost_password' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_shadow',
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping_cart-btn .element-ready-sub-total,{{WRAPPER}} :hover .element_ready_modal_lost_password',
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();

            $this->add_responsive_control(
                $widget.'_section___section_show_hide_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Display', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex'         => esc_html__( 'Flex', 'element-ready' ),
                        'block'        => esc_html__( 'Block', 'element-ready' ),
                        'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                        'grid'         => esc_html__( 'Grid', 'element-ready' ),
                        'none'         => esc_html__( 'None', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-shopping_cart-btn .element-ready-sub-total' => 'display: {{VALUE}};',
                        '{{WRAPPER}} .element_ready_modal_lost_password' => 'display: {{VALUE}};',
                    ],
                ]
            );
            $this->add_control(
                $widget.'_section___section_popover_'.$element_name.'_position',
                [
                    'label'        => esc_html__( 'Position', 'element-ready' ),
                    'type'         => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                    'label_off'    => esc_html__( 'Default', 'element-ready' ),
                    'label_on'     => esc_html__( 'Custom', 'element-ready' ),
                    'return_value' => 'yes',
                ]
            );
    
            $this->start_popover();
            $this->add_responsive_control(
                $widget.'_section__'.$element_name.'_position_type',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'fixed'    => esc_html__('Fixed','element-ready'),
                        'absolute' => esc_html__('Absolute','element-ready'),
                        'relative' => esc_html__('Relative','element-ready'),
                        'sticky'   => esc_html__('Sticky','element-ready'),
                        'static'   => esc_html__('Static','element-ready'),
                        'inherit'  => esc_html__('inherit','element-ready'),
                        ''         => esc_html__('none','element-ready'),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element_ready_lost_password' => 'position: {{VALUE}};',
                        '{{WRAPPER}} .element_ready_modal_lost_password' => 'position: {{VALUE}};',
                    ],
                   
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_position_left',
                [
                    'label' => esc_html__( 'Position Left', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element_ready_lost_password' => 'left: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .element_ready_modal_lost_password' => 'left: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_top',
                [
                    'label' => esc_html__( 'Position Top', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element_ready_lost_password' => 'top: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .element_ready_modal_lost_password' => 'top: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_bottom',
                [
                    'label' => esc_html__( 'Position Bottom', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element_ready_lost_password' => 'bottom: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .element_ready_modal_lost_password' => 'bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_right',
                [
                    'label' => esc_html__( 'Position right', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element_ready_lost_password' => 'right: {{SIZE}}{{UNIT}};',
                        '{{WRAPPER}} .element_ready_modal_lost_password' => 'right: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_popover();
        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }

    public function modal_heading_css($title = 'Modal heading',$slug='modal_ehading_style',$element_name='MODAL_HEADING_ELEMENT_NAME') {
        
        
        $widget = $this->get_name().'_'.element_ready_camelize($slug);
        
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            [
                'label' => $title,
                'tab'   => Controls_Manager::TAB_STYLE,
               
            ]
        );


            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Heading', 'element-ready' ),
                    ]
                );

                    // Typgraphy
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'      => $widget.'_typography',
                            'selector'  => '{{WRAPPER}} .element-ready-shopping_cart-top-bar h6',
                        ]
                    );

                    // Icon Color
                    $this->add_control(
                        $widget.'_color',
                        [
                            'label'     => esc_html__( ' Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .element-ready-shopping_cart-top-bar h6' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .element-ready-shopping_cart-top-bar h6',
                        ]
                    );

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_text_border',
                            'label'    => esc_html__( 'Text Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .element-ready-shopping_cart-top-bar h6',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .element-ready-user-modal-content .modal-header',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        $widget.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping_cart-top-bar h6' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    
                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => $widget.'_shadow',
                            'selector' => '{{WRAPPER}} .element-ready-shopping_cart-top-bar h6',
                        ]
                    );

                    // Margin
                    $this->add_responsive_control(
                        $widget.'_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping_cart-top-bar h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Padding
                    $this->add_responsive_control(
                        $widget.'_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-shopping_cart-top-bar h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

                $this->start_controls_tab(
                    $widget.'_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );

                    //Hover Color
                    $this->add_control(
                        'hover_'.$element_name.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} :hover .element-ready-shopping_cart-top-bar h6, {{WRAPPER}} :focus .element-ready-shopping_cart-top-bar h6' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Hover Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping_cart-top-bar h6,{{WRAPPER}} :focus .element-ready-shopping_cart-top-bar h6',
                        ]
                    );	

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping_cart-top-bar h6,{{WRAPPER}} :hover .element-ready-shopping_cart-top-bar h6',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        'hover_'.$element_name.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} :hover .element-ready-shopping_cart-top-bar h6' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_shadow',
                            'selector' => '{{WRAPPER}} :hover .element-ready-shopping_cart-top-bar h6',
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();

         
        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }

    public function sub_total_css($title = 'Sub Total',$slug='sub_total_style',$element_name='sub_total_ELEMENT_NAME') {
        
        
        $widget = $this->get_name().'_'.element_ready_camelize($slug);
        
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            [
                'label' => $title,
                'tab'   => Controls_Manager::TAB_STYLE,
                
            ]
        );

            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );

                    // Typgraphy
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'      => $widget.'_typography',
                            'selector'  => '{{WRAPPER}} .element-ready-sub-total-amount',
                        ]
                    );

                    // Icon Color
                    $this->add_control(
                        $widget.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .element-ready-sub-total-amount' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .element-ready-sub-total-amount',
                        ]
                    );

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .element-ready-sub-total-amount',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        $widget.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-sub-total-amount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    
                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => $widget.'_shadow',
                            'selector' => '{{WRAPPER}} .element-ready-sub-total-amount',
                        ]
                    );

                    // Margin
                    $this->add_responsive_control(
                        $widget.'_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-sub-total-amount' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Padding
                    $this->add_responsive_control(
                        $widget.'_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .element-ready-sub-total-amount' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

                $this->start_controls_tab(
                    $widget.'_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );

                    //Hover Color
                    $this->add_control(
                        'hover_'.$element_name.'_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} :hover .element-ready-sub-total-amount, {{WRAPPER}} :focus .element-ready-sub-total-amount' => 'color: {{VALUE}};',
                            ],
                        ]
                    );

                    // Hover Background
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} :hover .element-ready-sub-total-amount,{{WRAPPER}} :focus .element-ready-sub-total-amount',
                        ]
                    );	

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} :hover .element-ready-sub-total-amount,{{WRAPPER}} :hover .element-ready-sub-total-amount',
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        'hover_'.$element_name.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} :hover .element-ready-sub-total-amount' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => 'hover_'.$element_name.'_shadow',
                            'selector' => '{{WRAPPER}} :hover .element-ready-sub-total-amount',
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();

            $this->add_responsive_control(
                $widget.'_section___section_show_hide_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Display', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex'         => esc_html__( 'Flex', 'element-ready' ),
                        'block'        => esc_html__( 'Block', 'element-ready' ),
                        'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                        'grid'         => esc_html__( 'Grid', 'element-ready' ),
                        'none'         => esc_html__( 'None', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-block-header' => 'display: {{VALUE}};',
                    ],
                ]
            );
            $this->add_control(
                $widget.'_section___section_popover_'.$element_name.'_position',
                [
                    'label'        => esc_html__( 'Position', 'element-ready' ),
                    'type'         => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                    'label_off'    => esc_html__( 'Default', 'element-ready' ),
                    'label_on'     => esc_html__( 'Custom', 'element-ready' ),
                    'return_value' => 'yes',
                ]
            );
    
            $this->start_popover();
            $this->add_responsive_control(
                $widget.'_section__'.$element_name.'_position_type',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'fixed'    => esc_html__('Fixed','element-ready'),
                        'absolute' => esc_html__('Absolute','element-ready'),
                        'relative' => esc_html__('Relative','element-ready'),
                        'sticky'   => esc_html__('Sticky','element-ready'),
                        'static'   => esc_html__('Static','element-ready'),
                        'inherit'  => esc_html__('inherit','element-ready'),
                        ''         => esc_html__('none','element-ready'),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-block-header' => 'position: {{VALUE}};',
                    ],
                  
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_position_left',
                [
                    'label' => esc_html__( 'Position Left', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-block-header' => 'left: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_top',
                [
                    'label' => esc_html__( 'Position Top', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-block-header' => 'top: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_bottom',
                [
                    'label' => esc_html__( 'Position Bottom', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-block-header' => 'bottom: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_right',
                [
                    'label' => esc_html__( 'Position Right', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 1600,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .element-ready-block-header' => 'right: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_popover();
        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }

  }