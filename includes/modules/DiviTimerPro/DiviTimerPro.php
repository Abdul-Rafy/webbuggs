<?php


class DITP_CountdownTimer extends ET_Builder_Module {

	/**
 * @var string  $count_to_date  A date string of the event start date in ISO 8601 date format.
 * @var string  $count_to_stamp Timestamp of the event start date.
 */
	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Pee-Aye Creative',
		'author_uri' => 'www.peeayecreative.com',
	);

	
		// 'ditp_countdown_timer' => array(
			// 	'title' => $modules_defaults['title'],
			// ),
	function init() {
		$this->name       = esc_html__( 'Countdown Timer Maker', 'et_builder' );
		$this->plural     = esc_html__( 'Countdown Timer Maker', 'et_builder' );
		$this->slug       = 'ditp_countdown_timer';
		$this->vb_support = 'on';
		// $this->fields_defaults  = array(

		// 	'title'=>array('post_number','add_default_setting'),
	
		// );
		
		$this->main_css_element = '%%order_class%%.ditp_countdown_timer';
	// 'ditp_countdown_timer' => array(
			// 	'title' => $modules_defaults['title'],
			// ),
		$this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(	
					'display_type' => esc_html__( 'Display Type', 'et_builder' ),
					'main_content' => esc_html__( ' Configuration Settings', 'et_builder' ),
					//'expiry_action' => esc_html__( 'Expiry Actions', 'et_builder' ),
					'visibility' => esc_html__( 'Content Visibility Conditions', 'et_builder' ),
					'elements' => esc_html__( 'Elements', 'et_builder' ),
					'timer_setting' => esc_html__( 'Text','et_builder' ),
					'message_button' => esc_html__( 'More Info Button', 'et_builder' ),
				),
			),
			'advanced' => array(
				'toggles' => array(
				//	'text' => esc_html__( 'Text', 'et_builder' ),
					'title' => esc_html__( 'Title Text', 'et_builder' ),
					'bar_countdown' => esc_html__( 'Bar', 'et_builder' ),
					'circle_timer_type' => esc_html__( ' Circle Timer Type', 'et_builder' ),
					'time_remaining_label' => esc_html__( 'Time Remaining Label', 'et_builder' ),
					'time_remaining_text' => esc_html__( 'Time Remaining Text', 'et_builder' ),
					'counters_container' => esc_html__( 'Counters Container', 'et_builder' ),
					'section' => esc_html__( 'Sections', 'et_builder' ),
					'number' => esc_html__( 'Numbers', 'et_builder' ),
					'separator' => esc_html__( 'Separators', 'et_builder' ),
					'label' => esc_html__( 'Labels', 'et_builder' ),
					//'message_button' => esc_html__( 'More Info', 'et_builder' ),
				),
			),
		);

		$this->advanced_fields = array(
			'borders'               => array(
				'default' => array(
					'css'   => array(
					  'main' => array (
							  'border_radii' =>" {$this->main_css_element}",
							  'border_styles' =>" {$this->main_css_element}",
						  
						 ),
					   ),
				  ),
				 
				'label_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  =>'%%order_class%% .label',
							'border_styles' =>'%%order_class%% .label',
						),
						'important' => 'all',
					),
					
								
					'label_prefix' => esc_html__( 'Labels', 'et_builder' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'label',
				),
				'section_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  =>'%%order_class%% .section.values',
							'border_styles' =>'%%order_class%% .section.values',
						),
						'important' => 'all',
					),
					
								
					'label_prefix' => esc_html__( 'Section', 'et_builder' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'section',
				),
				'number_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  =>'%%order_class%% .value, %%order_class%%  .card__top  .card__bottom .card__back, %%order_class%% .flipper-digit',
							'border_styles' =>'%%order_class%% .value, %%order_class%%  .card__top  .card__bottom .card__back,  %%order_class%% .flipper-digit',
						),
						'important' => 'all',
					),
											
					'label_prefix' => esc_html__( 'Number', 'et_builder' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'number',
				),
						
				'counters_container_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  =>'%%order_class%% .ditp_countdown_counter_container',
							'border_styles' =>'%%order_class%% .ditp_countdown_counter_container',
						),
						'important' => 'all',
					),
									
					'label_prefix' => esc_html__( 'Number', 'et_builder' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'counters_container',
				),

				'bar_container_border'   => array(
					'css'          => array(
						'main' => array(
							'border_radii'  =>'%%order_class%% .barCountdowncontainer',
							'border_styles' =>'%%order_class%% .barCountdowncontainer',
						),
						'important' => 'all',
					),
									
					'label_prefix' => esc_html__( 'Bar', 'et_builder' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'bar_countdown',
				),
			),
			'fonts'                 => array(
				'header' => array(
					'label'        => esc_html__( 'Title','et_builder' ),
					'css'      => array(
						'main'      => "{$this->main_css_element} h4.title, {$this->main_css_element} h1.title, {$this->main_css_element} h2.title, {$this->main_css_element} h3.title, {$this->main_css_element} h5.title, {$this->main_css_element} h6.title",
						'important' => array( 'size', 'plugin_all' ),
						// 'important' => 'all',
					),
					'toggle_slug'  => 'title',
					'disable_toggle' => false,
					'header_level' => array(
						'default' => 'h4',
					),
				),

				'bar_time_remaining_text' => array(
					'label'        => esc_html__( 'Text','et_builder' ),
					'css'      => array(
						'main'      => '%%order_class%% .bar_time_remaining_text',
						'important' => array( 'size', 'plugin_all' ),
						 'important' => 'all',
					),
					'toggle_slug'  => 'time_remaining_text',
					'disable_toggle' => false,
					'header_level' => array(
						'default' => 'h4',
					),
				),

				'bar_time_remaining_label' => array(
					'label'        => esc_html__( 'Text','et_builder' ),
					'css'      => array(
						'main'      => '%%order_class%% .bar_time_remaining_label',
						'important' => array( 'size', 'plugin_all' ),
						 'important' => 'all',
					),
					'toggle_slug'  => 'time_remaining_label',
					'disable_toggle' => false,
					'header_level' => array(
						'default' => 'h4',
					),
				),

				'numbers' => array(
					'label'    => esc_html__( 'Numbers', 'et_builder' ),
					'css'      => array(
						'main'        => ".et_pb_column {$this->main_css_element} .section p.value,
						.et_pb_column {$this->main_css_element} .section.sep p, 
						.et_pb_column {$this->main_css_element} .flipper-digit, 
						.et_pb_column {$this->main_css_element} .flip-countdown .flip-countdown-piece .flip-countdown-card .flip-countdown-card-sec .card__top, 
						.et_pb_column {$this->main_css_element} .flip-countdown .flip-countdown-piece .flip-countdown-card .flip-countdown-card-sec .card__bottom,
						.et_pb_column {$this->main_css_element} .flip-countdown .flip-countdown-piece .flip-countdown-card .flip-countdown-card-sec .card__back,
						.et_pb_column {$this->main_css_element} .card__back::before",
						'important'   => 'all',
					),
					'toggle_slug'  => 'number',
					'disable_toggle' => false,
					'line_height' => array(
						'range_settings' => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),
				),
				'separator' => array(
					'label'           => esc_html__( 'Separator', 'et_builder' ),
					'css'             => array(
						'main'      => ".et_pb_column {$this->main_css_element} span.section",
						'important' => 'all',
					),
					'line_height' => array(
						'range_settings' => array(
							'default' => '1em',
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),
					'hide_text_color' => true,
					'hide_text_align' => true,
				),

				'label' => array(
					'label'    => esc_html__( 'Label', 'et_builder' ),
					'css'      => array(
						'main'      => ".et_pb_column {$this->main_css_element} .section p.label",
						'important' => array(
							'size',
							'line-height',
						),
					),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'label',
					'line_height' => array(
						//'default_unit'    => 'px',
						'range_settings' => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),
				),
				'message_text' => array(
					'label'           => esc_html__( 'Expiry Message', 'et_builder' ),
					'css'             => array(
						'main'      => ".et_pb_column {$this->main_css_element} p.message_show",
						'important' => 'all',
					),
					'line_height' => array(
						'range_settings' => array(
							'default' => '1em',
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),
					'hide_text_align' => true,
				),
			),
			'background'            => array(
				'has_background_color_toggle' => true,
				'use_background_color' => true,
				'options' => array(
					'background_color' => array(
						'depends_show_if'  => 'on',
						'default'          => '#7EBEC5',
					),
					'use_background_color' => array(
						'default'          => 'on',
					),
				),
			),
			'margin_padding' => array(
				'css' => array(
					'important' => 'all',
				),
			),
			'text'                  => array(
				'use_background_layout' => true,
				
				'options' => array(
					'text_orientation'  => array(
						'default' => 'center',
					),
					'background_layout' => array(
						'default' => 'dark',
						'hover' => 'tabs',
					),
				),
				'css' => array(
					'main' => '%%order_class%% .et_pb_countdown_timer_container, %%order_class%% .title',
					'text_orientation' => '%%order_class%% .et_pb_countdown_timer_container, %%order_class%% .title',
				),
			),
			'box_shadow'            => array(
				'default' => array(
					'css' => array(
						'main'    => '%%order_class%%',
						'important' => 'all',
					),
				),
				'label'   => array(
					'label'           => esc_html__( 'Labels Box Shadow', 'et_builder' ),
					//'option_category' => 'layout',
					'tab_slug'        => 'advanced',
					'toggle_slug'     => 'label',
					'css'             => array(
						'main' => "%%order_class%% p.label",
						'important' => 'all',
					),
				),
				'section'   => array(
					'label'           => esc_html__( 'Sections Box Shadow', 'et_builder' ),
					//'option_category' => 'layout',
					'tab_slug'        => 'advanced',
					'toggle_slug'     => 'section',
					'css'             => array(
						'main' => "%%order_class%% .section.values",
						'important' => 'all',
					),
				),
				'number'   => array(
					'label'           => esc_html__( 'Number Box Shadow', 'et_builder' ),
					//'option_category' => 'layout',
					'tab_slug'        => 'advanced',
					'toggle_slug'     => 'number',
					'css'             => array(
						'main' => "%%order_class%% .value, %%order_class%% .flipper-digit, %%order_class%% .digit-bottom, %%order_class%% .flip-countdown-card-sec ",
						'important' => 'all',
					),
				),
				'bar_countdown'   => array(
					'label'           => esc_html__( 'Bar Box Shadow', 'et_builder' ),
					//'option_category' => 'layout',
					'tab_slug'        => 'advanced',
					'toggle_slug'     => 'bar_countdown',
					'css'             => array(
						'main' => "%%order_class%% .barCountdowncontainer",
						'important' => 'all',
					),
				),
				'counters_box_shadow'   => array(
					'label'           => esc_html__( 'Container Box Shadow', 'et_builder' ),
					//'option_category' => 'layout',
					'tab_slug'        => 'advanced',
					'toggle_slug'     => 'counters_container',
					'css'             => array(
						'main' => "%%order_class%% .ditp_countdown_counter_container",
						'important' => 'all',
					),
				),
			),
			//'button'                => false,
			'button'         => array(
                'message_button' => array(
					'label'         => esc_html__( 'Expiry Button', 'decm-divi-event-calendar-module' ),
					'description'		=> esc_html__( 'Enable this feature to customize the appearance of the button', 'decm-divi-event-calendar-module' ),
                    'css'           => array(
						'main' => " %%order_class%%.et_pb_button_wrapper,%%order_class%% .dtp_custom_message_button",
						'plugin_main' =>" %%order_class%%.et_pb_button_wrapper,%%order_class%% .dtp_custom_message_button",
						'alignment'   => "%%order_class%% p.dtp_message_button",
						'important' => 'all',	
					),
					
					
					
					'use_alignment' => array(
						'label'         => esc_html__( 'alignment of era', 'decm-divi-event-calendar-module' ),
						'description'		=> esc_html__( 'Enable this feature to customize the appearance of the button', 'decm-divi-event-calendar-module' ),
					),
					'box_shadow'    => false,
					
					
					'margin_padding' => array(
						'css' => array(
							'margin' => "%%order_class%% p.dtp_message_button",
					         'padding' => "%%order_class%% .dtp_custom_message_button",
							'important' => 'all',
						),
						'custom_margin' => array(
					'default' => '15px|auto|auto|auto|false|false',
				),
					),
					
				),
			),

		);

		$this->custom_css_fields = array(
			'container' => array(
				'label'    => esc_html__( 'Container', 'et_builder' ),
				'selector' => '.et_pb_countdown_timer_container',
			),
			'title' => array(
				'label'    => esc_html__( 'Title','et_builder' ),
				'selector' => '.title',
			),
			'timer_section' => array(
				'label'    => esc_html__( 'Timer Section', 'et_builder' ),
				'selector' => '.section',
			),
		);

		$this->help_videos = array(
			array(
				'id'   => esc_html( 'AaHL836RMHw' ),
				'name' => esc_html__( 'An introduction to the Countdown Timer Maker module', 'et_builder' ),
			),
		);
	}


	function get_fields() {
		$fields = array(
			'title' => array(
				'label'           => esc_html( 'Title','et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'This is the title displayed for the countdown timer', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
				'dynamic_content' => 'text',
				'mobile_options'  => true,
				'hover'           => 'tabs',
			),
		
			'singular_custom_days_label_text' => array(
				'label'           => esc_html__( 'Days Custom Label Text - Singular', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter custom text for the days section label.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
				'default'           => 'Day',
			
			),

			'custom_days_label_text' => array(
				'label'           => esc_html__( 'Days Custom Label Text - Plural', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter custom text for the days section label.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
				'default'           => 'Day(s)',
			
			),

			'singular_custom_hours_label_text' => array(
				'label'           => esc_html__( 'Hours Custom Label Text - Singular', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter custom text for the hours section label.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
				'default'           => 'Hour',
			
			),

			'custom_hours_label_text' => array(
				'label'           => esc_html__( 'Hours Custom Label Text - Plural', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter custom text for the hours section label.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
				'default'           => 'Hour(s)',
			
			),

			'singular_custom_minutes_label_text' => array(
				'label'           => esc_html__( 'Minutes Custom Label Text - Singular', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter custom text for the minutess section label.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
				'default'           => 'Minute',
			
			),

			'custom_minutes_label_text' => array(
				'label'           => esc_html__( 'Minutes Custom Label Text - Plural', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter custom text for the minutess section label.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
				'default'           => 'Minute(s)',
			
			),

			'singular_custom_seconds_label_text' => array(
				'label'           => esc_html__( 'Seconds Custom  Label Text - Singular', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter custom text for the seconds section label.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
				'default'           => 'Second',
			),

			'custom_seconds_label_text' => array(
				'label'           => esc_html__( 'Seconds Custom  Label Text - Plural', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter custom text for the seconds section label.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
				'default'           => 'Second(s)',
			),
			
			'current_id' => array(
				'label'           => esc_html__( 'Current Id', 'et_builder' ),
				'type'            => 'hidden',
				'default'		  => $this->get_the_ID(),
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'This is the title displayed for the Divi Countdown Timer Maker Timer.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
			),
			'WPtimeZone' => array(
				'label'           => esc_html__( 'Time Zone', 'et_builder' ),
				'type'            => 'hidden',
				'default'		  => $this->getTimeZone(),
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'This is the title displayed for the Divi Countdown Timer Maker Timer.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
			),
			'WPtimeZoneOffset' => array(
				'label'           => esc_html__( 'Time Zone', 'et_builder' ),
				'type'            => 'hidden',
				'default'		  => get_option( 'gmt_offset' ),
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'This is the title displayed for the Divi Countdown Timer Maker Timer.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
			),
			'WP_REMOTE_ADDR' => array(
				'label'           => esc_html__( 'Get Ip Address', 'et_builder' ),
				'type'            => 'hidden',
				'default'		  => !empty($_SERVER['REMOTE_ADDR']) ? sanitize_text_field( wp_unslash($_SERVER['REMOTE_ADDR']) ) : '',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'This is the title displayed for the Divi Countdown Timer Maker Timer.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
			),

			'WP_CURRENT_URL' => array(
				'label'           => esc_html__( 'Current Url', 'et_builder' ),
				'type'            => 'hidden',
				'default'		  => !empty($_SERVER['REDIRECT_URL']) ? sanitize_text_field( wp_unslash($_SERVER['REDIRECT_URL']) ) : '',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'This field redirect on current page.', 'et_builder' ),
				'toggle_slug'     => 'timer_setting',
				
			),

			'section_width' => array(
				'label'           => esc_html__( 'Section Width', 'et_builder' ),
				'description' => __('Set the width of the countdown timer sections.', 'et_builder'),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'section',
				'validate_unit'   => true,
				'depends_show_if' => 'off',
				'default_unit'    => '%',
				'default'         => '23',
				'allow_empty'     => true,
				'responsive'      => true,
				'mobile_options'  => true,	
			),

			'hide_timer_during'=> array(
				'label'				=> esc_html__( 'Hide Timer During Countdown', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to set an interval from when the countdown timer ends until it starts again.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'off',
				// 'show_if' => array(
				// 	'timer_type' => 2,
				// ),		
			),

			'show_content_before'=> array(
				'label'				=> esc_html__( 'Show Other Content Before Start Trigger', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show other sections, rows, columns, or modules containing the CSS class “divi-timer-pro-show-before” before the timer begins when the start trigger has not been activated yet.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'on',
				// 'show_if' => array(
				// 	'timer_type' => 2,
				// ),		
			),
			'hide_content_before'=> array(
				'label'				=> esc_html__( 'Hide Other Content Before Start Trigger', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to hide other sections, rows, columns, or modules containing the CSS class “divi-timer-pro-hide-before” before the timer begins when the start trigger has not been activated yet.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'on',
				// 'show_if' => array(
				// 	'timer_type' => 2,
				// ),		
			),

			'show_content_during'=> array(
				'label'				=> esc_html__( 'Show Other Content During Countdown', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show other sections, rows, columns, or modules containing the CSS class “divi-timer-pro-show-during” during the timer if the start trigger has already been activated but the end timer has not been reached yet.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'on',
				// 'show_if' => array(
				// 	'timer_type' => 2,
				// ),		
			),

			'hide_content_during'=> array(
				'label'				=> esc_html__( 'Hide Other Content During Countdown', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to hide other sections, rows, columns, or modules containing the CSS class “divi-timer-pro-hide-during” during the timer if the start trigger has already been activated but the end timer has not been reached yet.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'on',
				// 'show_if' => array(
				// 	'timer_type' => 2,
				// ),		
			),

			'show_content_after'=> array(
				'label'				=> esc_html__( 'Show Other Content After End Trigger', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show other sections, rows, columns, or modules containing the CSS class “divi-timer-pro-show-after” after the timer ends when the end trigger has already been reached.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'on',
				// 'show_if' => array(
				// 	'timer_type' => 2,
				// ),		
			),

			'hide_content_after'=> array(
				'label'				=> esc_html__( 'Hide Other Content After End Trigger', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to hide other sections, rows, columns, or modules containing the CSS class “divi-timer-pro-hide-after” after the timer ends when the end trigger has already been reached.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'on',
				// 'show_if' => array(
				// 	'timer_type' => 2,
				// ),		
			),

			'timer_type' => array(
				'label'           => esc_html__( 'Countdown Timer Type', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'basic_option',
				'options'		=>[
                    1   => __( 'Evergreen' , 'act-divi' ),
					2   => __( 'Recurring', 'act-divi' ),
					3   => __( 'Fixed','act-divi'),
				//	4   => __( 'Pattern','act-divi'),
                ],
				'description'     => esc_html__( 'Choose the type of countdown timer you want to use.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => '1',
			),
				
			'start_trigger_1' => array(
				'label'           => esc_html__( 'Start Trigger', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					"first_land"   => __( 'When Visitor First Lands On Page', 'et_builder' ),		
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '1',
				),
				'default'		  => 'first_land',
			),

			'pattern' => array(
				'label'           => esc_html__( 'Recurring Cycle', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
                    "daily"   => __( 'Daily' ,  'act-divi' ),
					"weekly"   => __( 'Weekly', 'act-divi' ),
				    'monthly'   => __('Monthly','act-divi'),
					"yearly"  => __('Yearly','act-divi'),
					"custom"   => __('Custom','act-divi'),	
                ],
				'description'     => esc_html__( 'Choose how often you want the recurring countdown timer to cycle.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => 'daily',
				'show_if' => array(
					'timer_type' => "2",
				),
			),

			'pattern_daily' => array(
				'label'           => esc_html__( 'Repeat Every', 'et_builder' ),
				'type'            => 'hidden',
				'option_category' => 'layout',
				'options'		=>[
                    "1"   => __( '1 Day' ,  'act-divi' ),
					// "2"   => __( '2 Days', 'act-divi' ),
				    // '3'   => __('3 Days','act-divi'),
					// "4"  => __('4 Days','act-divi'),
					// "5"   => __('5 Days','act-divi'),	
					// "6"   => __('6 Days','act-divi'),	
					// "7"   => __('7 Days','act-divi'),	
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => '1',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "daily",
				),
			),

			'pattern_weekly' => array(
				'label'           => esc_html__( 'Repeat Every', 'et_builder' ),
				'type'            => 'hidden',
				'option_category' => 'layout',
				'options'		=>[
                    "1"   => __( '1 Week' ,  'act-divi' ),
					// "2"   => __( '2 Weeks', 'act-divi' ),
				    // '3'   => __('3 Weeks','act-divi'),
					// "4"  =>  __('4 Weeks','act-divi'),
					// "5"   => __('5 Weeks','act-divi'),	
					// "6"   => __('6 Weeks','act-divi'),		
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => '1',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "weekly",
				),
			),

			'pattern_day' => array(
				'label'           => esc_html__( 'Start Day Of The Week', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					"sun"   => __('Sunday' ,  'act-divi' ),
				    'mon'   => __('Monday','act-divi'),
					"tue"  =>  __('Tuesday','act-divi'),
					"wed"   => __('Wednesday','act-divi'),
					"thu"   => __('Thursday','act-divi'),
					"fri"   => __('Friday' ,  'act-divi' ),
					"sat"   => __('Saturday' ,  'act-divi' ),	
                ],
				'description'     => esc_html__( 'Choose the day of the week when the recurring countdown timer will start.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => 'mon',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "weekly",
				),
			),

			'pattern_monthly' => array(
				'label'           => esc_html__( 'Repeat Every', 'et_builder' ),
				'type'            => 'hidden',
				'option_category' => 'layout',
				'options'		=> [
                    "1"   => __( '1 Month' ,  'act-divi' ),
					"2"   => __( '2 Months', 'act-divi' ),
				    '3'   => __('3 Months','act-divi'),
					"4"  => __('4 Months','act-divi'),
					"5"   => __('5 Months','act-divi'),	
					"6"   => __('6 Months','act-divi'),	
					"7"   => __('7 Months','act-divi'),	
					"8"   => __('8 Months','act-divi'),
					"9"   => __('9 Months','act-divi'),
					"10"   => __('10 Months','act-divi'),
					"11"   => __('11 Months','act-divi'),
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => '1',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "monthly",
				),
			),

			
			'pattern_yearly' => array(
				'label'           => esc_html__( 'Repeat Every', 'et_builder' ),
				'type'            => 'hidden',
				'option_category' => 'layout',
				'options'		=>[
                    "1"   => __( '1 Year' ,  'act-divi' ),
					"2"   => __( '2 Years', 'act-divi' ),
				    '3'   => __('3 Years','act-divi'),
					"4"  => __('4 Years','act-divi'),
					"5"   => __('5 Years','act-divi'),	
					"6"   => __('6 Years','act-divi'),	
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => '1',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "yearly",
				),
			),

			'pattern_start_month_yearly' => array(
				'label'           => esc_html__( 'Start Month', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
                    "1"   => __('January' ,  'act-divi' ),
					"2"   => __('February', 'act-divi' ),
				    '3'   => __('March','act-divi'),
					"4"  =>  __('April','act-divi'),
					"5"   => __('May','act-divi'),	
					"6"   => __('June','act-divi'),	
					"7"   => __('July','act-divi'),	
					"8"   => __('August','act-divi'),	
					"9"   => __('September','act-divi'),	
					"10"   => __('October','act-divi'),	
					"11"   => __('November','act-divi'),	
					"12"   => __('December','act-divi'),	
                ],
				'description'     => esc_html__( 'Select the month of the year when the recurring countdown timer will start each year.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => '1',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "yearly",
				),
			),


			'start_trigger_2' => array(
				'label'           => esc_html__( 'Start Trigger', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
                    // "immediately"   => __( 'Immediately' ,  'act-divi' ),
					// "first_land"   => __( 'When Visitor First Lands On Page', 'act-divi' ),
				    'date_time'   => __('Date/Time','act-divi'),
					"day_of_week"  => __('Day Of The Week','act-divi'),
					"first_day_month"   => __('First Day of  the Month','act-divi'),
					"custom_duration_start"   => __('Start Of Custom Duration Before End Trigger','act-divi'),		
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => 'date_time',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "custom",
				),
			),
			'start_trigger_3' => array(
				'label'           => esc_html__( 'Start Trigger', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
                    "immediately"   => __( 'Immediately' ,  'act-divi' ),
				    'date_time'   => __('Date/Time','act-divi'),
					"day_of_week"  => __('Day Of The Week','act-divi'),
					"first_day_month"   => __('First Day of  the Month','act-divi'),
					"custom_duration_start"   => __('Start Of Custom Duration Before End Trigger','act-divi'),
					//"current_event_start_date"   => __('Current Event Start Date','act-divi'),
					//"next_upcoming_event_start_date"   => __('Next Upcoming Event Start Date','act-divi'),
				//	"woo_product_start_date"   => __('Woo Product Sale Start Date','act-divi'),
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				// 'show_if_not' => array(
				// 	'end_trigger_3' => "custom_duration_end",
				// ),
				'show_if' => array(
					'timer_type' => "3",
				),
				'default'		  => 'date_time',
			),
			

			'start_expirey_days_3' => array(
				'label'           => esc_html__( 'Countdown Duration Days', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of days for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
				'show_if' => array(	
					'timer_type' =>  3,
					'start_trigger_3' => 'custom_duration_start',
				),
			),
			
			'start_expirey_hours_3' => array(
				'label'           => esc_html__( 'Countdown Duration Hours', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of hours for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
			
				'show_if' => array(
					'timer_type' => 3,
					'start_trigger_3' => 'custom_duration_start',
				),
			),
			
			'start_expirey_mins_3' => array(
				'label'           => esc_html__( 'Countdown Duration Minutes', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of minutes for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
			
				'show_if' => array(
					'timer_type' => 3,
					'start_trigger_3' => 'custom_duration_start',
				),
			),

			'start_expirey_sec_3' => array(
				'label'           => esc_html__( 'Countdown Duration Seconds', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of seconds for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,	
				'show_if' => array(
					'timer_type' => 3,
					'start_trigger_3' => 'custom_duration_start',
				),
			),

			'start_expirey_days_2' => array(
				'label'           => esc_html__( 'Countdown Duration Days', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of days for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
				'show_if' => array(	
					'timer_type' =>  2,
					'start_trigger_2' => 'custom_duration_start',
					'pattern' => 'custom',
				),
			),
			
			'start_expirey_hours_2' => array(
				'label'           => esc_html__( 'Countdown Duration Hours', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of hours for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
				'show_if' => array(
					'timer_type' => 2,
					'start_trigger_2' => 'custom_duration_start',
					'pattern' => 'custom',
				),
			),
			
			'start_expirey_mins_2' => array(
				'label'           => esc_html__( 'Countdown Duration Minutes', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of minutes for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
				'show_if' => array(
					'timer_type' => 2,
					'start_trigger_2' => 'custom_duration_start',
					'pattern' => 'custom',
				),
			),

			'start_expirey_sec_2' => array(
				'label'           => esc_html__( 'Countdown Duration seconds', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of seconds for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,	
				'show_if' => array(
					'timer_type' => 2,
					'start_trigger_2' => 'custom_duration_start',
					'pattern' => 'custom',
				),
			),


			// 'start_trigger_4' => array(
			// 	'label'           => esc_html__( 'Start Trigger', 'et_builder' ),
			// 	'type'            => 'select',
			// 	'option_category' => 'layout',
			// 	'options'		=>[
			// 	    'date_time'   => __('Date/Time','act-divi'),
			// 		"day_of_week"  => __('Day Of The Week','act-divi'),
			// 		"first_day_month"   => __('First Day of  the Month','act-divi'),
			// 		"custom_duration_start"   => __('Start Of Custom Duration Before End Trigger','act-divi'),
					
            //     ],
			// 	'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
			// 	'toggle_slug'     => 'main_content',
			// 	'show_if' => array(
			// 		'timer_type' => "4",
			// 	),
			// ),

			'day_of_week_start_3' => array(
				'label'           => esc_html__( 'Choose Day Of The Week', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
                    "Sun"   => __( 'Sunday' ,  'act-divi' ),
				    'Mon'   => __('Monday','act-divi'),
					"Tue"  =>  __('Tuesday','act-divi'),
					"Wed"   => __('Wednesday','act-divi'),
					"Thu"   => __('Thursday','act-divi'),
					"Fri"   => __( 'Friday' ,  'act-divi' ),
					"Sat"   => __( 'Saturday' ,  'act-divi' ),
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  =>  "Sun",
				'show_if' => array(
					'timer_type' => '3',
					'start_trigger_3' =>  'day_of_week',
					
				),	
			),
			
			'day_of_week_start_2' => array(
				'label'           => esc_html__( 'Choose Day Of The Week', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
                    "Sun"   => __( 'Sunday' ,  'act-divi' ),
				    'Mon'   => __('Monday','act-divi'),
					"Tue"  => __('Tuesday','act-divi'),
					"Wed"   => __('Wednesday','act-divi'),
					"Thu"   => __('Thursday','act-divi'),
					"Fri"   => __( 'Friday' ,  'act-divi' ),
					"Sat"   => __( 'Saturday' ,  'act-divi' ),
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  =>  "Sun",
				'show_if' => array(
					'timer_type' => '2',
					'start_trigger_2' => 'day_of_week',
					'pattern' => 'custom',
				),
				// 'show_if_not' => array(
				// 	'timer_type' => array(
				// 		'1',		
				// 		'3',
				// 		'4'	,					
				// 	),
		        // ),	
			),
			
			// 'day_of_week_start_4' => array(
			// 	'label'           => esc_html__( 'Choose Day Of The Week 4', 'et_builder' ),
			// 	'type'            => 'select',
			// 	'option_category' => 'layout',
			// 	'options'		=>[
            //         "Sun"   => __( 'Sunday' ,  'act-divi' ),
			// 	    'Mon'   => __('Monday','act-divi'),
			// 		"Tue"  => __('Tuesday','act-divi'),
			// 		"Wed"   => __('Wednesday','act-divi'),
			// 		"Thu"   => __('Thursday','act-divi'),
			// 		"Fri"   => __( 'Friday' ,  'act-divi' ),
			// 		"Sat"   => __( 'Saturday' ,  'act-divi' ),
            //     ],
			// 	'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
			// 	'toggle_slug'     => 'main_content',
			// 	'default'		  =>  "Sun",
			// 	'show_if' => array(
			// 		'timer_type' => '4',
			// 		'start_trigger_4' => 'day_of_week',
			// 	),	
			// ),


			'date_time_2' => array(
				'label'           => esc_html__( 'Date/Time', 'et_builder' ),
				'type'            => 'date_picker',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					'start_trigger_2' =>  'date_time',
					'pattern' => 'custom',
				),
			),

		
			'start_date_time_2' => array(
				'label'           => esc_html__( 'Start Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					'start_trigger_2' => "day_of_week",
					'pattern' => 'custom',
				),
			),

			'start_time_daily' => array(
				'label'           => esc_html__( 'Start Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the hour and minute when the recurring countdown timer will start each day.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					//'start_trigger_2' => "day_of_week",
					'pattern' => 'daily',
				),
			),


			'start_time_weekly' => array(
				'label'           => esc_html__( 'Start Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the hour and minute when the recurring countdown timer will start each week.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					//'start_trigger_2' => "day_of_week",
					'pattern' => 'weekly',
				),
			),

			'pattern_weekly_end_date' => array(
				'label'           => esc_html__( 'End Day Of The Week', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					"sun"   => __('Sunday' ,  'act-divi' ),
				    'mon'   => __('Monday','act-divi'),
					"tue"  =>  __('Tuesday','act-divi'),
					"wed"   => __('Wednesday','act-divi'),
					"thu"   => __('Thursday','act-divi'),
					"fri"   => __('Friday' ,  'act-divi' ),
					"sat"   => __('Saturday' ,  'act-divi' ),	
                ],
				'description'     => esc_html__( 'Choose the day of the week when the recurring countdown timer will end.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => 'mon',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "weekly",
				),
			),

			'end_time_weekly' => array(
				'label'           => esc_html__( 'Weekly End Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the hour and minute when the recurring countdown timer will end each week.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					//'start_trigger_2' => "day_of_week",
					'pattern' => 'weekly',
				),
			),

	
			'start_day_of_yearly' => array(
				'label'           => esc_html__( 'Start Day Of The Month', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					'first'   => __('First' ,  'act-divi' ),
				    'custom'   => __('Custom','act-divi'),
                ],
				'description'     => esc_html__( 'Select the day of the month when the recurring countdown timer will start.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => 'first',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "yearly",
				),
			),


			'custom_start_day_yearly' => array(
				'label'           => esc_html__( 'Custom Start Day Of The Month', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter a number for the day of the month when the recurring countdown timer will start.', 'et_builder' ),
				'toggle_slug'		=> 'main_content',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "yearly",
					'start_day_of_yearly'  => "custom",
				),		
			
			),	

			'start_time_yearly' => array(
				'label'           => esc_html__( 'Start Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the hour and minute when the recurring countdown timer will start each year on the selected month and day.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					//'start_trigger_2' => "day_of_week",
					'pattern' => 'yearly',
				),
			),

			'start_day_of_month' => array(
				'label'           => esc_html__( 'Start Day Of The Month', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					"first"   => __('First' ,  'act-divi' ),
				    'custom'   => __('Custom','act-divi'),
                ],
				'description'     => esc_html__( 'Select the day of the month when the recurring countdown timer will start.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => 'first',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "monthly",
				),
			),


			'custom_start_day_month' => array(
				'label'           => esc_html__( 'Custom Start Day Of The Month', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter a number for the day of the month when the recurring countdown timer will start.', 'et_builder' ),
				'toggle_slug'		=> 'main_content',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "monthly",
					'start_day_of_month'  => "custom",
				),		
			
			),	


			'start_time_monthly' => array(
				'label'           => esc_html__( 'Start Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the hour and minute when the recurring countdown timer will start each month on the selected day.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					//'start_trigger_2' => "day_of_week",
					'pattern' => 'monthly',
				),
			),


			'end_day_of_month' => array(
				'label'           => esc_html__( 'End Day Of The Month', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					"last"   => __('Last' ,  'act-divi' ),
				    'custom'   => __('Custom','act-divi'),
                ],
				'description'     => esc_html__( 'Select the day of the month when the countdown will end.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => 'last',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "monthly",
				),
			),


			'custom_end_day_month' => array(
				'label'           => esc_html__( 'Custom End Day Of The Month', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter a number for the day of the month when the recurring countdown timer will end.', 'et_builder' ),
				'toggle_slug'		=> 'main_content',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "monthly",
					'end_day_of_month'  => "custom",
				),		
			
			),	

			'end_time_monthly' => array(
				'label'           => esc_html__( 'End Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the hour and minute when the recurring countdown timer will end each month on the selected day.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					//'start_trigger_2' => "day_of_week",
					'pattern' => 'monthly',
				),
			),

			'pattern_end_month_yearly' => array(
				'label'           => esc_html__( 'End Month', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
                    "1"   => __('January' ,  'act-divi' ),
					"2"   => __('February', 'act-divi' ),
				    '3'   => __('March','act-divi'),
					"4"  =>  __('April','act-divi'),
					"5"   => __('May','act-divi'),	
					"6"   => __('June','act-divi'),	
					"7"   => __('July','act-divi'),	
					"8"   => __('August','act-divi'),	
					"9"   => __('September','act-divi'),	
					"10"   => __('October','act-divi'),	
					"11"   => __('November','act-divi'),	
					"12"   => __('December','act-divi'),	
                ],
				'description'     => esc_html__( 'Select the month of the year when the recurring countdown time will end each year.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => '1',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "yearly",
				),
			),


			
			'end_day_of_month_year' => array(
				'label'           => esc_html__( 'End Day Of The Month', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					"last"   => __('Last' ,  'act-divi' ),
				    'custom'   => __('Custom','act-divi'),
                ],
				'description'     => esc_html__( 'Select the day of the month when the countdown will end.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => 'last',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "yearly",
				),
			),

			'custom_end_day_month_year' => array(
				'label'           => esc_html__( 'Custom End Day Of The Month', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter a number for the day of the month when the recurring countdown timer will end.', 'et_builder' ),
				'toggle_slug'		=> 'main_content',
				'show_if' => array(
					'timer_type' => "2",
					'pattern' => "yearly",
					'end_day_of_month_year'  => "custom",
				),		
			
			),	

			'end_time_yearly' => array(
				'label'           => esc_html__( 'End Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the hour and minute when the recurring countdown timer will end each year on the selected month and day.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					//'start_trigger_2' => "day_of_week",
					'pattern' => 'yearly',
				),
			),
			// 'start_date_hour' => array(
			// 	//'label'           => esc_html__( 'Start Time', 'et_builder' ),
			// 	'type'            => 'custom_hour_input',
			// 	'option_category' => 'basic_option',
			// 	//'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
			// 	'toggle_slug'     => 'main_content',
			// 	'show_if' => array(
			// 		'timer_type' => '2',
			// 		'start_trigger_2' => "day_of_week",
			// 	),
			// ),

			// 'start_date_mintue' => array(
			// 	//'label'           => esc_html__( 'Start Time', 'et_builder' ),
			// 	'type'            => 'custom_mintune_input',
			// 	'option_category' => 'basic_option',
			// 	//'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
			// 	'toggle_slug'     => 'main_content',
			// 	'show_if' => array(
			// 		'timer_type' => '2',
			// 		'start_trigger_2' => "day_of_week",
			// 	),
			// ),

			'start_date_time_3' => array(
				'label'           => esc_html__( 'Date/Time', 'et_builder' ),
				'type'            => 'date_picker',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '3',
					'start_trigger_3' => "date_time",
				),
			),

			'date_time_3' => array(
				'label'           => esc_html__( 'Start Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '3',
					'start_trigger_3' => "day_of_week",
				),
			),

			// 'date_time_3' => array(
			// 	'label'           => esc_html__( 'Start Time', 'et_builder' ),
			// 	'type'            => 'time_picker_type',
			// 	'option_category' => 'basic_option',
			// 	'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
			// 	'toggle_slug'     => 'main_content',
			// 	'show_if' => array(
			// 		'timer_type' => '3',
			// 		'start_trigger_3' => "day_of_week",
			// 	),
			// ),
			// 'field'       => array(
            //     'label'           => esc_html__( 'Custom Field', 'et_builder' ),
            //     'type'            => 'simp_simple_input',
            //     'option_category' => 'basic_option',
            //     'description'     => esc_html__( 'Text entered here will appear inside the module.', 'simp-simple-extension' ),
            //     //'toggle_slug'     => 'main_content',
			// 	'toggle_slug'     => 'main_content',
			// 		'show_if' => array(
			// 			'timer_type' => '3',
			// 			'start_trigger_3' => "day_of_week",
			// 		),
            // ),

			// 'date_time_4' => array(
			// 	'label'           => esc_html__( 'Start Time 4', 'et_builder' ),
			// 	'type'            => 'ditp_time_picker_type',
			// 	'option_category' => 'basic_option',
			// 	'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
			// 	'toggle_slug'     => 'main_content',
			// 	'show_if' => array(
			// 		'timer_type' => '4',
			// 		'start_trigger_4' => "day_of_week",
			// 	),
			// ),

			'date_time_first_month_2' => array(
				'label'           => esc_html__( 'Start Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					'start_trigger_2' => "first_day_month",
					'pattern' => 'custom',
				),
			),

			'date_time_first_month_3' => array(
				'label'           => esc_html__( 'Start Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '3',
					'start_trigger_3' => "first_day_month",
				),
			),

			// 'date_time_first_month_4' => array(
			// 	'label'           => esc_html__( 'Start Time month', 'et_builder' ),
			// 	'type'            => 'ditp_time_picker_type',
			// 	'option_category' => 'basic_option',
			// 	'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
			// 	'toggle_slug'     => 'main_content',
			// 	'show_if' => array(
			// 		'timer_type' => '4',
			// 		'start_trigger_4' => "first_day_month",
			// 	),
			// ),

			'hide_timer'=> array(
				'label'				=> esc_html__( 'Hide Timer After End Trigger', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to set an interval from when the countdown timer ends until it starts again.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'on',
				// 'show_if' => array(
				// 	'timer_type' => 2,
				// ),		
			),
			'show_redirection_url'=> array(
				'label'				=> esc_html__( 'Redirect To Another URL After End Trigger', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to set an interval from when the countdown timer ends until it starts again.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'off',
				// 'show_if' => array(
				// 	'auto_restart_interval' => 'off',
				// ),		
			),
			'website_redirect' => array(
				'label'           => esc_html__( 'Redirect URL', 'et_builder' ),
				'type'            => 'text',
				'option_category'  => 'basic_option',
				'dynamic_content' => 'url',
				'description'     => esc_html__( 'Enter the website url the page will redirect to when the timer ends.', 'et_builder' ),
				'toggle_slug'     => 'visibility',
				'show_if' => array(
					'show_redirection_url' => 'on',
				),
			),

			'redirect_reference' => array(
				'label'           => esc_html__( 'Redirect Preference', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					"redirect_always"   => __( 'Always Redirect During Cookie Duration', 'et_builder' ),	
					"redirect_once"   => __( 'Redirect Only Once', 'et_builder' ),		
                ],
				'description'     => esc_html__( 'Choose whether the visitor should be redirected once and allowed to return to the original page, or continually be redirected during the cookie duration.', 'et_builder' ),
				'toggle_slug'     => 'visibility',
				'show_if' => array(
					'show_redirection_url' => 'on',
					'timer_type' => 1,
				),
				'default'  => 'redirect_always',
			),

			'display_message_show_hide'=> array(
				'label'				=> esc_html__( 'Show Message After End Trigger', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to set an interval from when the countdown timer ends until it starts again.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'off',
				// 'show_if' => array(
				// 	'timer_type' => 2,
				// ),		
			),
			'show_message' => array(
				'label'           => esc_html__( 'Expiry Message Text', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter a custom message you want to display when the countdown timer ends.', 'et_builder' ),
				'toggle_slug'     => 'visibility',
				'show_if' => array(
					'display_message_show_hide' => "on",

				),
			),
			'show_more_info_button'=> array(
				'label'				=> esc_html__( 'Show Button After End Trigger', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide a button below the message text.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'off',
			),
			
			'timer_message_button_url'       => array(
				'label'           => esc_html__( 'Button Link URL', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input the destination URL for the button.', 'et_builder' ),
				'toggle_slug'     => 'visibility',
				'dynamic_content' => 'url',
				'show_if' => array(
					'show_more_info_button' => 'on',
				),
			),
			'timer_message_url_new_window'   => array(
				'label'            => esc_html__( 'Button Link Target', 'et_builder' ),
				'type'             => 'select',
				'option_category'  => 'configuration',
				'options'          => array(
					'off' => esc_html__( 'In The Same Window', 'et_builder' ),
					'on'  => esc_html__( 'In The New Tab', 'et_builder' ),
				),
				'toggle_slug'      => 'visibility',
				'description'      => esc_html__( 'Choose whether or not the button link opens in a new window.', 'et_builder' ),
				'default_on_front' => 'off',
				'show_if' => array(
					'show_more_info_button' => 'on',
				),
			),
			'timer_message_button_text'      => array(
				'label'           => esc_html( 'Button Text','et_builder'),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the custom text for the button.', 'et_builder' ),
				'toggle_slug'     => 'visibility',
				'dynamic_content' => 'text',
				'default' => 'More Info',
				'show_if' => array(
					'show_more_info_button' => 'on',
				),
				// 'mobile_options'  => true,
				// 'hover'           => 'tabs',
			),
			'timer_message_button_icons_list' => array(
                'label'           => esc_html__( 'Timer Button icon', 'decm-divi-event-calendar-module' ),
                'type'            => 'hidden',
                'option_category' => 'basic_option',
                'description'     => esc_html__( 'Post button.', 'decm-divi-event-calendar-module' ),
                'toggle_slug'     => 'visibility',
                'default'         => $this->get_icon_list(et_pb_get_font_icon_symbols()),
			),

			'woocommerce_plugin_active' => array(
                'label'           => esc_html__( 'WooCommerce Plugin Active', 'decm-divi-event-calendar-module' ),
                'type'            => 'hidden',
                'option_category' => 'basic_option',
                'description'     => esc_html__( 'Post button.', 'decm-divi-event-calendar-module' ),
                'toggle_slug'     => 'visibility',
                'default'         => class_exists( 'WooCommerce' ),
			),
			'show_other_content'=> array(
				'label'				=> esc_html__( 'Show Other Content', 'decm-divi-event-calendar-module' ),
				'type'				=> 'hidden',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show other sections, rows, columns, or modules containing the custom CSS class “divi-timer-pro-show” when the countdown timer ends.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'off',
			),
			'class_show_hidden_section' => array(
				'label'           => esc_html__( 'Custom Class For Show Content', 'et_builder' ),
				'type'            => 'hidden',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Add your own custom CSS class here if you do not want to use the default “divi-timer-pro-hide” class.', 'et_builder' ),
				'toggle_slug'     => 'visibility',
				'default'           =>"divi-timer-pro-show",
				'show_if' => array(
					'show_other_content'=>"on",
				),
			),
			'hide_other_content'=> array(
				'label'				=> esc_html__( 'Hide Other Content', 'decm-divi-event-calendar-module' ),
				'type'				=> 'hidden',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to hide other sections, rows, columns, or modules containing the custom CSS class “divi-timer-pro-hide” when the countdown timer ends.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'visibility',
				'default'			=> 'off',
			),
			'use_custom_class_show_hide' => array(
				'label'           => esc_html__( 'Custom Class For Hidden Content', 'et_builder' ),
				'type'            => 'hidden',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Add your own custom CSS class here if you do not want to use the default “divi-timer-pro-hide” class.', 'et_builder' ),
				'toggle_slug'     => 'visibility',
				'default'           =>"divi-timer-pro-hide",
				'show_if' => array(
					'hide_other_content'=>"on",
				),
			),
							
			'auto_restart_interval'=> array(
				'label'				=> esc_html__( 'Pause Interval', 'decm-divi-event-calendar-module' ),
				'type'				=> 'hidden',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to set an interval from when the countdown timer ends until it starts again.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'main_content',
				'default'			=> 'on',
				'show_if' => array(
					'timer_type' => 2,
				),		
			),
			
			'pause_interval_days' => array(
				'label'           => esc_html__( 'Pause Interval Duration Days', 'et_builder' ),
				'type'            => 'hidden',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Set the number of days from when the countdown timer ends until it starts again.', 'et_builder' ),
				'toggle_slug'		=> 'main_content',
				'default'    => 0,
				'show_if' => array(
					'timer_type' => 2,
					'auto_restart_interval'=>'on',
				),		
			
			),
			'pause_interval_hours' => array(
				'label'           => esc_html__( 'Pause Interval Duration Hours', 'et_builder' ),
				'type'            => 'hidden',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Set the number of hours from when the countdown timer ends until it starts again.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'    => 0,
				'show_if' => array(
					'timer_type' => 2,
					'auto_restart_interval'=>'on',
				),
			
			),
			'pause_interval_minutes' => array(
				'label'           => esc_html__( 'Pause Interval Duration Minutes', 'et_builder' ),
				'type'            => 'hidden',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Set the number of minutes from when the countdown timer ends until it starts again.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'    =>   0,
				'show_if' => array(
					'timer_type' => 2,
					'auto_restart_interval'=>'on',
				),
			
			),
			
			'end_trigger_1' => array(
				'label'           => esc_html__( 'End Trigger', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					"custom_duration_end"   => __('End Of Custom Duration After Start Trigger','act-divi'),
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => "1" 
				),
				'default'           => "custom_duration_end",
			),

			'end_trigger_2' => array(
				'label'           => esc_html__( 'End Trigger', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					'date_time'   => __('Date/Time','act-divi'),
					"day_of_week"  => __('Day Of The Week','act-divi'),
					"last_day_month"   => __('Last Day of  the Month','act-divi'),
					"custom_duration_end"   => __('End Of Custom Duration After Start Trigger','act-divi'),
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
						'show_if' => array(
					   'timer_type' =>'2',
					   'pattern' => 'custom',
				),
				'default'         => 'date_time',
			),

			'end_trigger_3' => array(
				'label'           => esc_html__( 'End Trigger', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
					'date_time'   => __('Date/Time','act-divi'),
					"day_of_week"  => __('Day Of The Week','act-divi'),
					"last_day_month"   => __('Last Day of  the Month','act-divi'),
					"custom_duration_end"   => __('End Of Custom Duration After Start Trigger','act-divi'),
					//"current_event_end_date"   => __('Current Event Start Date','act-divi'),
					//"next_upcoming_event_end_date"   => __('Next Upcoming Event Start Date','act-divi'),
					//"woo_product_end_date"   => __('Woo Product Sale End Date','act-divi'),
                ],
				'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'=>"date_time",
				// 'show_if_not' => array(
				// 	'woocommerce_plugin_active' => 1,
				// ),
				'show_if' => array(
					"timer_type"=>"3",
				//	'woocommerce_plugin_active' => 1,
				),
			),

			'expirey_days' => array(
				'label'           => esc_html__( 'Countdown Duration Days', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of days for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
				'show_if' => array(	
					'timer_type' =>  1,
				),
			),
			
			'expirey_hours' => array(
				'label'           => esc_html__( 'Countdown Duration Hours', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of hours for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
			
				'show_if' => array(
					'timer_type' => 1,
				),
			),
			
			'expirey_mins' => array(
				'label'           => esc_html__( 'Countdown Duration Minutes', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of minutes for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
			
				'show_if' => array(
					'timer_type' => 1,
				),
			),

			'expirey_sec' => array(
				'label'           => esc_html__( 'Countdown Duration seconds', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of minutes for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
			
				'show_if' => array(
					'timer_type' => 1,
				),
			),

		
			// 'end_trigger_without_custom_3' => array(
			// 	'label'           => esc_html__( 'End Trigger 3', 'et_builder' ),
			// 	'type'            => 'select',
			// 	'option_category' => 'layout',
			// 	'options'		=>[
			// 		'date_time'   => __('Date/Time','act-divi'),
			// 		"day_of_week"  => __('Day Of The Week','act-divi'),
			// 		"last_day_month"   => __('Last Day of  the Month','act-divi'),
			// 	//	"custom_duration_end"   => __('End Of Custom Duration After Start Trigger','act-divi'),
            //     ],
			// 	'description'     => esc_html__( 'Choose the type of timer you want.', 'et_builder' ),
			// 	'toggle_slug'     => 'main_content',
			// 	'default'=>"date_time",
			// 	'show_if' => array(
			// 		"timer_type"=>"3",
			// 		'start_trigger_3' => "custom_duration_start",
			// 	),
			// ),


			'expirey_days_3' => array(
				'label'           => esc_html__( 'Countdown Duration Days', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of days for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
				'show_if_not' => array(
					'start_trigger_3' => "next_upcoming_event_start_date",
				),
				'show_if' => array(	
					'timer_type' =>  3,
					'end_trigger_3' => 'custom_duration_end',
				),
			),
			
			'expirey_hours_3' => array(
				'label'           => esc_html__( 'Countdown Duration Hours', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of hours for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
				'show_if_not' => array(
					'start_trigger_3' => "next_upcoming_event_start_date",
				),
				'show_if' => array(
					'timer_type' => 3,
					'end_trigger_3' => 'custom_duration_end',
				),
			),
			
			'expirey_mins_3' => array(
				'label'           => esc_html__( 'Countdown Duration Minutes', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of minutes for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
				'show_if_not' => array(
					'start_trigger_3' => "next_upcoming_event_start_date",
				),
				'show_if' => array(
					'timer_type' => 3,
					'end_trigger_3' => 'custom_duration_end',
				),
			),

			'expirey_sec_3' => array(
				'label'           => esc_html__( 'Countdown Duration seconds', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of seconds for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,	
				'show_if_not' => array(
					'start_trigger_3' => "next_upcoming_event_start_date",
				),
				'show_if' => array(
					'timer_type' => 3,
					'end_trigger_3' => 'custom_duration_end',
				),
			),

			'expirey_days_2' => array(
				'label'           => esc_html__( 'Countdown Duration Days', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of days for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
				'show_if' => array(	
					'timer_type' =>  2,
					'end_trigger_2' => 'custom_duration_end',
					'pattern' => 'custom',
				),
			),
			
			'expirey_hours_2' => array(
				'label'           => esc_html__( 'Countdown Duration Hours', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of hours for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
			
				'show_if' => array(
					'timer_type' => 2,
					'end_trigger_2' => 'custom_duration_end',
					'pattern' => 'custom',
				),
			),
			
			'expirey_mins_2' => array(
				'label'           => esc_html__( 'Countdown Duration Minutes', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of minutes for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
			
				'show_if' => array(
					'timer_type' => 2,
					'end_trigger_2' => 'custom_duration_end',
					'pattern' => 'custom',
				),
			),

			'expirey_sec_2' => array(
				'label'           => esc_html__( 'Countdown Duration seconds', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of seconds for the countdown timer.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,	
				'show_if' => array(
					'timer_type' => 2,
					'end_trigger_2' => 'custom_duration_end',
					'pattern' => 'custom',
				),
			),

			'date_time' => array(
				'label'           => esc_html__( 'End Time', 'et_builder' ),
				'type'            => 'date_picker',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => 2,
					'end_trigger_2' => 'date_time',
					'pattern' => 'custom',
				),
			),

			'user_defined_end_time' => array(
				'label'           => esc_html__( 'End Time', 'et_builder' ),
				'type'            => 'date_picker',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
			//	'default'         =>gmdate('M d, Y H:i:s', strtotime("+30 days")),
				'show_if_not' => array(
					'start_trigger_3' => "next_upcoming_event_start_date",
				),
				'show_if' => array(
						'timer_type' => 3,
						'end_trigger_3' => 'date_time',
				),
			),
			'display_type' => array(
				'label'           => esc_html__( 'Display Type', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
                    "countdown_timer"   => __( 'Standard' ,  'act-divi' ),
				    'flip_timer'   => __('Flip','act-divi'),
					"circle_timer"   => __('Circle','act-divi'),
					"bar_timer"   => __('Bar','act-divi'),
					"text_timer"   => __('Text','act-divi'),
					// "countdown_bar_timer"   => __('Countdown + Bar Timers' ,  'act-divi' ),
					// "flip_bar_timer"   => __('Flip + Bar Timers' ,  'act-divi' ),
					// "circle_bar_timer"   => __('Circle + Bar Timers' ,  'act-divi' ),
                ],
				'description'     => esc_html__( 'Choose the type of timer(s) you want to display.', 'et_builder' ),
				'toggle_slug'     => 'display_type',
				'default'		  =>  'countdown_timer',
				// 'show_if' => array(
				// ),	
			),
			'day_of_week_end_2' => array(
				'label'           => esc_html__( 'Choose Day Of The Week', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
                    "sun"   => __( 'Sunday' ,  'act-divi' ),
				    'mon'   => __('Monday','act-divi'),
					"tue"   => __('Tuesday','act-divi'),
					"wed"   => __('Wednesday','act-divi'),
					"thu"   => __('Thursday','act-divi'),
					"fri"   => __('Friday' ,  'act-divi' ),
					"sat"   => __('Saturday' ,  'act-divi' ),
                ],
				'description'     => esc_html__( 'This option means the timer will count down and end based on a selected day of the week. Once this End Trigger option is selected, two new dropdown select settings will appear below. The user needs to choose a day of the week and time of day for this option to take effect.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  =>  'sun',
				'show_if' => array(
					'timer_type' => '2',
					'end_trigger_2' => "day_of_week" ,
					'pattern' => 'custom',
				),	
			),

			// 'day_of_week_end_3' => array(
			// 	'label'           => esc_html__( 'Choose Day Of The Week', 'et_builder' ),
			// 	'type'            => 'select',
			// 	'option_category' => 'layout',
			// 	'options'		=>[
            //         "sun"   => __( 'Sunday' ,  'act-divi' ),
			// 	    'mon'   => __('Monday','act-divi'),
			// 		"tue"  => __('Tuesday','act-divi'),
			// 		"wed"   => __('Wednesday','act-divi'),
			// 		"thu"   => __('Thursday','act-divi'),
			// 		"fri"   => __('Friday' ,  'act-divi' ),
			// 		"sat"   => __('Saturday' ,  'act-divi' ),
            //     ],
			// 	'description'     => esc_html__( 'This option means the timer will count down and end based on a selected day of the week. Once this End Trigger option is selected, two new dropdown select settings will appear below. The user needs to choose a day of the week and time of day for this option to take effect. ', 'et_builder' ),
			// 	'toggle_slug'     => 'main_content',
			// 	//'default'		  =>  'date_time',
			// 	'show_if' => array(
			// 		'timer_type' => '3',
			// 		'end_trigger_3' => "day_of_week" ,
			// 	),	
			// ),

			'day_of_week_end_3' => array(
				'label'           => esc_html__( 'Choose Day Of The Week', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'		=>[
                    "sun"   => __( 'Sunday' ,  'act-divi' ),
				    'mon'   => __('Monday','act-divi'),
					"tue"  => __('Tuesday','act-divi'),
					"wed"   => __('Wednesday','act-divi'),
					"thu"   => __('Thursday','act-divi'),
					"fri"   => __('Friday' ,  'act-divi' ),
					"sat"   => __('Saturday' ,  'act-divi' ),
                ],
				'description'     => esc_html__( 'This option means the timer will count down and end based on a selected day of the week. Once this End Trigger option is selected, two new dropdown select settings will appear below. The user needs to choose a day of the week and time of day for this option to take effect.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  =>  'sun',
				'show_if_not' => array(
					'start_trigger_3' => "next_upcoming_event_start_date",
				),
				'show_if' => array(
					'timer_type' => '3',
					'end_trigger_3' => "day_of_week" ,
				),	
			),

			'end_time_2' => array(
				'label'           => esc_html__( 'End Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				//'default'         =>$this->get_month_ahed_time(),
				'show_if' => array(
					    'timer_type' => '2',
						"end_trigger_2" => "day_of_week",
						'pattern' => 'custom',
				),
			),

			'end_time_daily' => array(
				'label'           => esc_html__( 'End Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Enter the hour and minute when the recurring countdown timer will end each day.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				//'default'         =>$this->get_month_ahed_time(),
				'show_if' => array(
					    'timer_type' => '2',
						//"end_trigger_2" => "day_of_week",
						'pattern' => 'daily',
				),
			),

			'end_time_weekly' => array(
				'label'           => esc_html__( 'End Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				//'default'         =>$this->get_month_ahed_time(),
				'show_if' => array(
					    'timer_type' => '2',
						//"end_trigger_2" => "day_of_week",
						'pattern' => 'weekly',
				),
			),
			'end_time_3' => array(
				'label'           => esc_html__( 'End Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				'show_if_not' => array(
					'start_trigger_3' => "next_upcoming_event_start_date",
				),
				'show_if' => array(
					'timer_type' => '3',
					'end_trigger_3' => "day_of_week",	
				),
			),

			'end_time_month_3' => array(
				'label'           => esc_html__( 'End Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				'show_if_not' => array(
					'start_trigger_3' => "next_upcoming_event_start_date",
				),
				'show_if' => array(
					'timer_type' => '3',
					'end_trigger_3' => "last_day_month",
					
				),
			),


			'end_time_month_2' => array(
				'label'           => esc_html__( 'End Time', 'et_builder' ),
				'type'            => 'time_picker_type',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				'show_if' => array(
					'timer_type' => '2',
					'end_trigger_2' => "last_day_month",
					'pattern' => 'custom',
					
				),
			),

			'autorestart_recurrence' => array(
				'label'           => esc_html__( 'Number Of Recurring Cycles', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'basic_option',
				'timer_type' => array(
					'1',
					'3',
				),
			
				'options'		=>[
                    1   => __( 'Cycle Forever',  'act-divi' ),
					2   => __( 'Custom Number Of Cycles', 'act-divi' ),
                ],
				'description'     => esc_html__( 'Choose whether the recurring countdown timer should cycle forever or only a specific number of times.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => '1',
				'show_if' => array(
					'timer_type' => 2,
				//	'pattern' => 'custom',
					
				),				
			),
			'auto_restart_recurrences_number' => array(
				'label'           => esc_html__( 'Custom Number Of Recurring Cycles', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Enter the number of times the recurring countdown timer will cycle.', 'et_builder' ),
				'toggle_slug'		=> 'main_content',
				'show_if' => array(
					'autorestart_recurrence' => 2,
					'timer_type' => 2,
					
				),		
			
			),	


			'autorestart_recurrence_pattern' => array(
				'label'           => esc_html__( 'Recurrences Repeat Until', 'et_builder' ),
				'type'            => 'hidden',
				'option_category' => 'basic_option',
				'timer_type' => array(
					'1',
					'3',
				),
			
				'options'		=>[
                    1   => __( 'Custom Date',  'act-divi' ),
					2   => __( 'Custom Number Of Recurrences', 'act-divi' ),
                ],
				'description'     => esc_html__( 'Enter a custom message you want to display when the countdown timer ends.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => '1',
				'show_if_not' => array(
					'pattern' => 'custom',
				),
				'show_if' => array(
					'timer_type' => 2,		
				),
				
			),

			'auto_restart_recurrences_number_pattern' => array(
				'label'           => esc_html__( 'Number Of Recurrences', 'et_builder' ),
				'type'            => 'text',
				'option_category'   => 'configuration',
				'description'     => esc_html__( 'Set the number of days from when the countdown timer ends until it starts again.', 'et_builder' ),
				'toggle_slug'		=> 'main_content',
				'show_if_not' => array(
					'pattern' => 'custom',
				),
				'show_if' => array(
					'autorestart_recurrence_pattern' => 2,
					'timer_type' => 2,
					
				),		
			
			),	

			'date_time_recurrences' => array(
				'label'           => esc_html__( 'Recurrences End Date', 'et_builder' ),
				'type'            => 'hidden',
				'option_category' => 'basic_option',
				'description'     => et_get_safe_localization( sprintf( __( 'Select the date and time when your countdown timer should start. This is based on your timezone settings in <a href="%1$s" target="_blank" title="WordPress General Settings">WordPress General Settings</a>', 'et_builder' ), esc_url( admin_url( 'options-general.php' ) ) ) ),
				'toggle_slug'     => 'main_content',
				'show_if_not' => array(
					'pattern' => 'custom',
				),
				'show_if' => array(
					'timer_type' => 2,
					'autorestart_recurrence_pattern' => 1,
				),
			),

			'cookie_duration' => array(
				'label'           => esc_html__( 'Reset Campaign', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'basic_option',
				'timer_type' => array(
					'1',
					'3',
				),
			
				'options'		=>[
                    1   => __( 'Never',  'act-divi' ),
					2   => __( 'After Custom Duration', 'act-divi' ),
                ],
				'description'     => esc_html__( 'Enter a custom message you want to display when the countdown timer ends.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'		  => '1',
				'show_if' => array(
					'timer_type' => 1,
				),
				
			),
			'cookie_duration_days' => array(
				'label'           => esc_html__( 'Cookie Duration Days', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of days until the site visitor session ends.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
				'show_if' => array(
					'cookie_duration' => 2,
					'timer_type' => 1,
				),
			),
			
			'cookie_duration_hours' => array(
				'label'           => esc_html__( 'Cookie Duration Hours', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of hours until the site visitor session ends.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,	
				'show_if' => array(
					'cookie_duration' => 2,
					'timer_type' => 1,
				),
			),
			
			'cookie_duration_mins' => array(
				'label'           => esc_html__( 'Cookie Duration Minutes', 'et_builder' ),
				'type'            => 'number',
				'option_category' => 'configuration',
				'description'     => esc_html__( 'Set the number of minutes until the site visitor session ends.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
				'default'           => 0,
			
				'show_if' => array(
					'cookie_duration' => 2,
					'timer_type' => 1,
				),
			),

			// 	'cookie_name' => array(
			// 	'label'           => esc_html__( 'Cookie Name', 'ditp_countdown_timer' ),
			// 	'type'            => 'text',
			// 	'description'     => esc_html__( 'Set the cookie name.', 'ditp_countdown_timer' ),		
			// 	'toggle_slug'     => 'main_content',
			// 	'default'         =>  'Cookie Name',
			// 	'show_if' => array(
			// 		//'cookie_duration' => 2,
			// 		'timer_type' => 1,
			// 	),
			// ),


			// 'cookie_value' => array(
			// 	'label'           => esc_html__( 'Cookie Value', 'et_builder' ),
			// 	'type'            => 'text',
			// 	'option_category' => 'configuration',
			// 	'description'     => esc_html__( 'Set the  cookie Value.', 'et_builder' ),
			// 	'toggle_slug'     => 'main_content',
			// 	'default'           => 'Cookie Value',
			// 	'show_if' => array(
			// 		//'cookie_duration' => 2,
			// 		'timer_type' => 1,
			// 	),
			// ),


			'bar_background_color' => array(
				'label'             => esc_html__( 'Bar Background Color', 'decm-divi-event-calendar-module' ),
				'description'       => esc_html__( 'Set the color for the bar.', 'decm-divi-event-calendar-module' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'bar_countdown',
			),

			'bar_remaining_background_color' => array(
				'label'             => esc_html__( 'Bar Remaining Time Color', 'decm-divi-event-calendar-module' ),
				'description'       => esc_html__( 'Set the color for the remaining timer progress bar.', 'decm-divi-event-calendar-module' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'bar_countdown',
			),

			'bar_height'       => array(
				'label'           => esc_html__( 'Bar Height', 'et_builder' ),
				'description'     => esc_html__( 'Set the height of the timer bar.', 'et_builder' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'bar_countdown',
				'allowed_values'  => et_builder_get_acceptable_css_string_values( 'height' ),
				'default'         => '20',
				'default_unit'    => 'px',
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '100',
					'step' => '1',
				),
				//'responsive'      => true,
				'sticky'          => true,
			),

			'number_background_color' => array(
				'label'             => esc_html__( 'Numbers Background Color', 'decm-divi-event-calendar-module' ),
				'description'       => esc_html__( 'Add a background color to the countdown timer numbers area.', 'decm-divi-event-calendar-module' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'number',
			),
			'container_background_color' => array(
				'label'             => esc_html__( 'Container Background Color', 'decm-divi-event-calendar-module' ),
				'description'       => esc_html__( 'Add a background color to the countdown timer numbers area.', 'decm-divi-event-calendar-module' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'counters_container',
			),
			'label_background_color' => array(
				'label'             => esc_html__( 'Labels Background Color', 'decm-divi-event-calendar-module' ),
				'description'       => esc_html__( 'Add a background color to the countdown timer labels.', 'decm-divi-event-calendar-module' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'label',
			),
			'separator_text_color' => array(
				'label'             => esc_html__( 'Separators Color', 'decm-divi-event-calendar-module' ),
				'description'       => esc_html__( 'You can pick unique background colors for Events.', 'decm-divi-event-calendar-module' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'separator',
			),
			'section_background_color' => array(
				'label'             => esc_html__( 'Sections Background Color', 'decm-divi-event-calendar-module' ),
				'description'       => esc_html__( 'Set a color for the background of the countdown timer sections.', 'decm-divi-event-calendar-module' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'section',
			),
			

			
			'circle_color' => array(
				'label'             => esc_html__( 'Circle  Color', 'decm-divi-event-calendar-module' ),
				'description'       => esc_html__( 'Set a color for the background of the circle timer sections.', 'decm-divi-event-calendar-module' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'default'           => 'rgb(0 158 229)',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'circle_timer_type',
			),

			'circle_width'       => array(
				'label'           => esc_html__( 'Circle Thickness', 'decm-divi-event-calendar-module' ),
				'description'     => esc_html__( 'Set the  circle thickness of the circle timer.', 'decm-divi-event-calendar-module' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'circle_timer_type',
				'allowed_values'  => et_builder_get_acceptable_css_string_values( 'height' ),
				'default'         => '12',
				//'default_unit'    => 'px',
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '20',
					'step' => '1',
				),
				//'responsive'      => true,
				'sticky'          => true,
			),


			'circle_progress_color' => array(
				'label'             => esc_html__( 'Circle Progress  Color', 'decm-divi-event-calendar-module' ),
				'description'       => esc_html__( 'Set a color for the background of the circle timer sections.', 'decm-divi-event-calendar-module' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'default'           => 'rgb(211 211 211)',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'circle_timer_type',
			),


			'circle_thickness_progress'       => array(
				'label'           => esc_html__( 'Circle Progress Thickness', 'decm-divi-event-calendar-module' ),
				'description'     => esc_html__( 'Set the  circle progress thickness of the circle timer .', 'decm-divi-event-calendar-module' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'circle_timer_type',
				'allowed_values'  => et_builder_get_acceptable_css_string_values( 'height' ),
				'default'         => '6',
				//'default_unit'    => 'px',
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '20',
					'step' => '1',
				),
				//'responsive'      => true,
				'sticky'          => true,
			),


			'circle_radius'       => array(
				'label'           => esc_html__( 'Circle Radius', 'decm-divi-event-calendar-module' ),
				'description'     => esc_html__( 'Set the  circle radius of the circle timer.', 'decm-divi-event-calendar-module' ),
				'type'            => 'hidden',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'circle_timer_type',
				'allowed_values'  => et_builder_get_acceptable_css_string_values( 'height' ),
				'default'         => '12',
				//'default_unit'    => 'px',
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '50',
					'step' => '1',
				),
				//'responsive'      => true,
				'sticky'          => true,
			),


			'show_time_remaining_label'=> array(
				'label'				=> esc_html__( 'Show Time Remaining Label', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide the time remaining label.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'on',	
			),
			'show_time_remaining_text'=> array(
				'label'				=> esc_html__( 'Show Time Remaining Text', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide the time remaining text inside the bar.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'on',
				
			),
			'hide_day_leading_zero'=> array(
				'label'				=> esc_html__( 'Hide Days Leading Zero', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide the days section of the countdown timer.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'on',
				
			),
			'hide_all_leading_zero'=> array(
				'label'				=> esc_html__( 'Hide All Leading Zero', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide the days section of the countdown timer.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'off',
				
			),
			'show_separator_first'=> array(
				'label'				=> esc_html__( ' Show Separators Between Sections', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide the separators between the Days Hours Minutes and Seconds sections of the countdown timer.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'on',
				
			),
			'show_days'=> array(
				'label'				=> esc_html__( 'Show Days', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide the days section of the countdown timer.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'on',
				
			),
			
			'show_hours'=> array(
				'label'				=> esc_html__( 'Show Hours', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide the hours section of the countdown timer.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'on',
				
			),
			'show_separator_second'=> array(
				'label'				=> esc_html__( 'Show Separator 2', 'decm-divi-event-calendar-module' ),
				'type'				=> 'hidden',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide the separator 2 between the Hours and Minutes sections of the countdown timer.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'on',
				
			),
			'show_minutes'=> array(
				'label'				=> esc_html__( 'Show Minutes', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide the minutes section of the countdown timer.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'on',
				
			),
			'show_separator_third'=> array(
				'label'				=> esc_html__( 'Show Separator 3', 'decm-divi-event-calendar-module' ),
				'type'				=> 'hidden',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide separator 3 between the Minutes and Seconds sections of the countdown timer.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'on',
				
			),
			'show_seconds'=> array(
				'label'				=> esc_html__( 'Show Seconds', 'decm-divi-event-calendar-module' ),
				'type'				=> 'yes_no_button',
				'option_category'	=> 'configuration',
				'options'			 => array(
					'off' => esc_html__( 'No', 'decm-divi-event-calendar-module' ),
					'on'  => esc_html__( 'Yes', 'decm-divi-event-calendar-module' ),
				),
				'description'		=> esc_html__( 'Choose to show or hide the seconds section of the countdown timer.', 'decm-divi-event-calendar-module' ),
				'toggle_slug'		=> 'elements',
				'default'			=> 'on',
				
			),

			'section_margin' => array(
				'label' => __('Margin of Sections', 'decm-divi-event-calendar-module'),
				'type' => 'custom_margin',
				'description' => __('Adjust the spacing around the outside of the countdown timer Sections.', 'decm-divi-event-calendar-module'),
				'tab_slug'        => 'advanced',
				'toggle_slug' => 'section',
				'mobile_options'  => true,
			),
			'section_padding' => array(
				'label' => __('Padding of Sections', 'decm-divi-event-calendar-module'),
				'type' => 'custom_margin',
				'description' => __('Adjust the spacing around the inside of the countdown timer Sections.', 'decm-divi-event-calendar-module'),
				'tab_slug'        => 'advanced',
				'toggle_slug' => 'section',
				'mobile_options'  => true,
			),
			'container_margin' => array(
				'label' => __('Margin of Container', 'decm-divi-event-calendar-module'),
				'type' => 'custom_margin',
				'description' => __('Adjust the spacing around the outside of the countdown timer Sections.', 'decm-divi-event-calendar-module'),
				'tab_slug'        => 'advanced',
				'toggle_slug' => 'counters_container',
				'mobile_options'  => true,
			),
			'container_padding' => array(
				'label' => __('Padding of Container', 'decm-divi-event-calendar-module'),
				'type' => 'custom_margin',
				'description' => __('Adjust the spacing around the inside of the countdown timer Sections.', 'decm-divi-event-calendar-module'),
				'tab_slug'        => 'advanced',
				'toggle_slug' => 'counters_container',
				'mobile_options'  => true,
			),
			'number_margin' => array(
				'label' => __('Margin of Number', 'decm-divi-event-calendar-module'),
				'type' => 'custom_margin',
				'description' => __('Adjust the spacing around the outside of the countdown timer numbers area.', 'decm-divi-event-calendar-module'),
				'tab_slug'        => 'advanced',
				'toggle_slug' => 'number',
				'mobile_options'  => true,
			),
			'number_padding' => array(
				'label' => __('Padding of Number', 'decm-divi-event-calendar-module'),
				'type' => 'custom_margin',
				'description' => __('Adjust the spacing around the inside of the countdown timer numbers area.', 'decm-divi-event-calendar-module'),
				'tab_slug'        => 'advanced',
				'toggle_slug' => 'number',
				'mobile_options'  => true,
			),
			'label_margin' => array(
				'label' => __('Margin of Labels', 'decm-divi-event-calendar-module'),
				'type' => 'custom_margin',
				'description' => __('Adjust the spacing around the outside of the countdown timer labels.', 'decm-divi-event-calendar-module'),
				'tab_slug'        => 'advanced',
				'toggle_slug' => 'label',
				'mobile_options'  => true,
			),
			'label_padding' => array(
				'label' => __('Padding of Labels', 'decm-divi-event-calendar-module'),
				'type' => 'custom_margin',
				'description' => __('Adjust the spacing around the inside of the countdown timer labels.', 'decm-divi-event-calendar-module'),
				'tab_slug'        => 'advanced',
				'toggle_slug' => 'label',
				'mobile_options'  => true,
			),

			'woo_pro_start_date_get_data'          => array(
				'type'              => 'computed',
				'computed_callback' => array( 'DITP_CountdownTimer', 'woo_pro_start_date' ),
				'computed_depends_on'  => array(
					'current_id',
					'timer_type',
					'start_trigger_3',
				),
			),

			'woo_pro_end_date_get_data'          => array(
				'type'              => 'computed',
				'computed_callback' => array( 'DITP_CountdownTimer', 'woo_pro_end_date' ),
				'computed_depends_on'  => array(
					'current_id',
					'timer_type',
					'end_trigger_3',
				),
			),

			'next_upcoming_event_get_date'          => array(
				'type'              => 'computed',
				'computed_callback' => array( 'DITP_CountdownTimer', 'next_upcoming_event' ),
				'computed_depends_on'  => array(
					'start_trigger_3',
					'timer_type',
				),
			),

			'day_of_week_timer_fixed'          => array(
				'type'              => 'computed',
				'computed_callback' => array( 'DITP_CountdownTimer', 'timer_start_day_of_week' ),
				'computed_depends_on'  => array(
					'end_trigger_3',
					'end_trigger_2',
					'day_of_week_end_3',
					'day_of_week_end_2',
					'timer_type',
					'end_time_3',
					'end_time_2',
					'end_time_weekly',
					'pattern_day',
					'pattern_weekly_end_date',
					'pattern',
				),
			),

			'day_of_week_timer_get_data'          => array(
				'type'              => 'computed',
				'computed_callback' => array( 'DITP_CountdownTimer', 'timer_start_day_of_week_end' ),
				'computed_depends_on'  => array(
					'start_trigger_3',
					'start_trigger_2',
					'day_of_week_start_3',
					'day_of_week_start_2',
					'timer_type',
					'date_time_3',
					'start_date_time_2',
					'start_time_weekly',
					'pattern_day',
					'pattern',
				),
			),


			// 'circle_thickness' => array(
			// 	'label'           => esc_html__( 'Circle Thickness', 'decm-divi-event-calendar-module' ),
			// 	'description' => __('Manually set a fixed width for Circle.', 'decm-divi-event-calendar-module'),
			// 	'type'            => 'hidden',
			// 	'option_category' => 'layout',
			// 	'tab_slug'        => 'advanced',
			// 	'toggle_slug'     => 'circle_timer_type',
			// 	'validate_unit'   => true,
			// 	'depends_show_if' => 'off',
			// 	'default_unit'    => '',
			// 	'default'         => '20',
			// 	'allow_empty'     => true,
			// 	'responsive'      => true,
			// 	'mobile_options'  => true,
			// ),
			// 'day_of_week_timer_get_data'          => array(
			// 	'type'              => 'computed',
			// 	'computed_callback' => array( 'DITP_CountdownTimer', 'timer_start_day_of_week_end' ),
			// 	'computed_depends_on'  => array(
			// 		'start_trigger_3',
			// 		'start_trigger_2',
			// 		'day_of_week_start_3',
			// 		'day_of_week_start_2',
			// 		'timer_type',
			// 		'date_time_3',
			// 		'start_date_time_2',
			// 		'pattern',
			// 	),
			// ),
		
		);

		return $fields;
	}

	function get_the_ID() { 
		$post = get_post();
		return ! empty( $post ) ? $post->ID : false;
	}

	public function get_icon_list($icon_list = array())
	{
		$escapedHtmlAttr = array();
		foreach((array) $icon_list as $icon_html)
		{
			$escapedHtmlAttr[] = esc_attr( $icon_html );
		}
		return wp_json_encode($escapedHtmlAttr);
	}
	function getTimeZone()
	{
		$gmt_offset                      = get_option( 'gmt_offset' );
		$gmt_divider                     = '-' === substr( $gmt_offset, 0, 1 ) ? '-' : '+';
		$gmt_offset_hour                 = str_pad( abs( intval( $gmt_offset ) ), 2, "0", STR_PAD_LEFT );
		$gmt_offset_minute               = str_pad( ( ( abs( $gmt_offset ) * 100 ) % 100 ) * ( 60 / 100 ), 2, "0", STR_PAD_LEFT );
		$gmt                             = "GMT{$gmt_divider}{$gmt_offset_hour}{$gmt_offset_minute}";
		return $gmt;
	}
	function restartTimer($UserDateTime , $CurrentDateTime , $DateDurationStr,$start_index,$end_index,$recurence_type,$AutoRestartInterval,$PauseTotalTime)
	{ 

		$start_index=1;
		$your_date = $UserDateTime;
		$checkPauseIntervalEnabled = 0;

		if($recurence_type=="2"){
			
		        while($UserDateTime >= $CurrentDateTime && $start_index <= $end_index )
						{ 
						
							if($AutoRestartInterval=="on" && $PauseTotalTime !='' && ($start_index%2 != 0 || $start_index==1) ){
							//if pause interval is on pause minutes are not empty and start_index != 0
								$your_date = strtotime($PauseTotalTime,$your_date);  //$now - $your_date;
								$UserDateTime = $your_date;
								$checkPauseIntervalEnabled = 1;
								}
							//if pause interval is off or start_index == 0
								else{
								$your_date = strtotime($DateDurationStr,$your_date);  //$now - $your_date;
								$UserDateTime = $your_date;
								$checkPauseIntervalEnabled = 0;			
								}

						//echo $end_index;
						$start_index++;
						
						}

				}else{

				while( $UserDateTime < $CurrentDateTime  ||  $start_index <= $end_index)
				{
				if($AutoRestartInterval=="on" && $PauseTotalTime !='' && ($start_index %2 != 0 || $start_index==1) ){
			            //if pause interval is on pause minutes are not empty and start_index != 0
					$your_date	= strtotime($PauseTotalTime,$your_date);  //$now - $your_date;
					$UserDateTime = $your_date;
					$checkPauseIntervalEnabled = 1;
					}
					   //if pause interval is off or start_index == 0
					else{
					$your_date = strtotime($DateDurationStr,$your_date);  //$now - $your_date;
					$UserDateTime = $your_date;
					$checkPauseIntervalEnabled = 0;	
					}
				
				$start_index++;
				
				}
			}
			
			//$UserDateTime = strtotime($PauseTotalTime,$your_date); 
		return array(
			'UserDateTime' => $UserDateTime,
			'checkPauseIntervalEnabled' => $checkPauseIntervalEnabled
		);
	}


	public function getrenderClassNameSelector($Classes,$render_slug){
		foreach((array) explode(' ',$Classes)  as $ClassName){
			if(strpos($ClassName,$render_slug.'_') !== false){
				return '.'.$ClassName;		
			}
		}
	}
	public function apply_custom_margin_padding($function_name, $slug, $type, $class, $important = true)
	{
		$slug_value = $this->props[$slug];
		$slug_value_tablet = $this->props[$slug . '_tablet'];
		$slug_value_phone = $this->props[$slug . '_phone'];
		$slug_value_last_edited = $this->props[$slug . '_last_edited'];
		$slug_value_responsive_active = et_pb_get_responsive_status($slug_value_last_edited);

		if (isset($slug_value) && !empty($slug_value)) {
			ET_Builder_Element::set_style($function_name, array(
				'selector' => $class,
				'declaration' => et_builder_get_element_style_css($slug_value, $type, $important),
			));
		}

		if (isset($slug_value_tablet) && !empty($slug_value_tablet) && $slug_value_responsive_active) {
			ET_Builder_Element::set_style($function_name, array(
				'selector' => $class,
				'declaration' => et_builder_get_element_style_css($slug_value_tablet, $type, $important),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}

		if (isset($slug_value_phone) && !empty($slug_value_phone) && $slug_value_responsive_active) {
			ET_Builder_Element::set_style($function_name, array(
				'selector' => $class,
				'declaration' => et_builder_get_element_style_css($slug_value_phone, $type, $important),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}
	}




	function render( $attrs, $content = null, $render_slug ) {

		// 		$monday = strtotime("last monday");

		// $monday = date('w', $monday)==date('w') ? $monday+7*86400 : $monday;

		// $sunday = strtotime(date("Y-m-d",$monday)." +6 days");

		// $this_week_sd = date("Y-m-d",$monday);

		// $this_week_ed = date("Y-m-d",$sunday);


		//echo "Current week range from $this_week_sd to $this_week_ed ";

		// echo "<pre>";
		// print_r($this->props);
		// echo "</pre>";

		// $startdate           = tribe_get_start_date( $event, false, Tribe__Date_Utils::DBDATETIMEFORMAT );
		// $enddate             = tribe_get_end_date( $event, false, Tribe__Date_Utils::DBDATETIMEFORMAT );


		if ( is_plugin_active( 'the-events-calendar/the-events-calendar.php' ) ) {
			$feventsList      = tribe_get_events(
				array(
					'posts_per_page' => -1,
					'post_type'      => 'tribe_events',
					'post_status'    => 'publish',
					'meta_query'     => array(
						array(
							'key'     => '_EventStartDate',
							'value'   => current_time( 'Y-m-d H:i:s' ),
							'compare' => '>',
							'type'    => 'DATETIME',
						),
					),
				)
			);
	
			$evIDarry         = array();
			$ev_st_date       = array();
	
			if ( is_array( $feventsList ) && array_filter( $feventsList ) != null ) {
				foreach ( $feventsList as $event ) {
					$evIDarry[] = $event->ID;
				}
			}
		}

		
        $your_date =0;
		$multi_view                      = et_pb_multi_view_options( $this );
		$title                           = $multi_view->render_element( array(
			'tag'     => et_pb_process_header_level( $this->props['header_level'], 'h4' ),
			'content' => '{{title}}',
			'attrs'   => array(
				'class' => 'title',
			),
		) );
		$checkPauseIntervalEnabled = "";
		$getUtilizedTime_COOKIE ="";
		$get_standard_finish_time = "";
		$finish_date = "";
		$standard_time  = "";  
		$date_time_stamp = "";    
		$Defined_time_Stamp  = "";      
		$custom_days_label_text         = $this->props['custom_days_label_text'];
		$custom_hours_label_text        = $this->props['custom_hours_label_text'];
		$custom_minutes_label_text      = $this->props['custom_minutes_label_text'];
		$custom_seconds_label_text      = $this->props['custom_seconds_label_text'];
		$singular_custom_days_label_text         = $this->props['singular_custom_days_label_text'];
		$singular_custom_hours_label_text        = $this->props['singular_custom_hours_label_text'];
		$singular_custom_minutes_label_text      = $this->props['singular_custom_minutes_label_text'];
		$singular_custom_seconds_label_text      = $this->props['singular_custom_seconds_label_text'];	
		$show_days                      = $this->props['show_days'];
		$show_hours                     = $this->props['show_hours'];
		$show_minutes                   = $this->props['show_minutes'];
		$show_seconds                   = $this->props['show_seconds'];
		$separator_text_color           = $this->props['separator_text_color'];
		$section_background_color       = $this->props['section_background_color'];
		$container_background_color     = $this->props['container_background_color'];
		$number_background_color        = $this->props['number_background_color'];
		$bar_remaining_background_color = $this->props['bar_remaining_background_color'];
		$bar_height = $this->props['bar_height'];
		$bar_background_color           = $this->props['bar_background_color'];
		$label_background_color         = $this->props['label_background_color'];
		$label_background_color         = $this->props['label_background_color'];
		$message_button_url             = $this->props['timer_message_button_url'];
		//$message_button_rel     = $this->props['timer_message_url_new_window'];
		$message_button_text            = $this->props['timer_message_button_text'];
		$messsage_url_new_window        = $this->props['timer_message_url_new_window']=="on"?"blank":"";
		$custom_message_button          = $this->props['custom_message_button'];
		$show_more_info_button          = $this->props['show_more_info_button'];
		$section_width          = $this->props['section_width'];
        $section_width_responsive_active = isset($this->props["section_width"]) && et_pb_get_responsive_status($this->props["section_width_last_edited"]);
        $section_width_tablet = $section_width_responsive_active && $this->props["section_width_tablet"] ? $this->props["section_width_tablet"] : $section_width;
        $section_width_phone = $section_width_responsive_active && $this->props["section_width_phone"] ? $this->props["section_width_phone"] : $section_width_tablet;	
		$message_custom_icon_values     = et_pb_responsive_options()->get_property_values( $this->props, 'message_button_icon' );
		$message_custom_icon            = isset( $message_custom_icon_values['desktop'] ) ? $this->props['message_button_icon'] == '' ? '' : esc_attr( et_pb_process_font_icon( $message_custom_icon_values['desktop'] ) ) : '';
		$message_custom_icon_tablet     = isset( $message_custom_icon_values['tablet'] ) ? esc_attr( et_pb_process_font_icon( $message_custom_icon_values['tablet'] ) ) : '';
		$message_custom_icon_phone      = isset( $message_custom_icon_values['phone'] ) ? esc_attr( et_pb_process_font_icon( $message_custom_icon_values['phone'] ) ) : '';
		$message_custom_icon_values     = et_pb_responsive_options()->get_property_values( $this->props, 'message_button_icon' );
		$date_time = '';


		$get_date = gmdate("D H:i:s");
		//echo $get_date;
		$unixTimestamp = strtotime($get_date);



		if($this->props['end_trigger_3']=='current_event_end_date' && $this->props['timer_type'] == '3'){
			if(get_post_meta( get_the_ID(), '_EventAllDay', true ) == 'yes'){
			$standard_time                  =  tribe_get_start_date(get_the_ID(),null,'Y-m-d 00:00:00');
			}else{
			$standard_time                  =  tribe_get_start_time(get_the_ID(),'Y-m-d H:i:s');
			}
			//print_r($this->props['end_time_1']);
		}

	
		if($this->props['end_trigger_3']=='date_time' && $this->props['timer_type'] == '3'){
			$standard_time                  = $this->props['user_defined_end_time'];
			//print_r($this->props['end_time_1']);
		}



			//'end_time_2'
			if($this->props['end_trigger_3']=='day_of_week' && $this->props['timer_type'] == '3'){
			//echo strtotime($get_date.$this->props['day_of_week_end_3']);
			    $date = gmdate("Y-m-d", strtotime($get_date.$this->props['day_of_week_end_3']));
				$date = date_create($date);
				if(!empty($this->props['end_time_3'])){
					$timeArr = explode(':',$this->props['end_time_3']);
				    date_time_set($date, $timeArr[0], $timeArr[1]);	
					$timeArr= date_format($date, 'Y-m-d H:i:s');
					$standard_time                  = $timeArr;
				}else{
					$timeArr= date_format($date, 'Y-m-d H:i:s');
					$standard_time                  = $timeArr;
				}	

			}

			if($this->props['end_trigger_3']=="last_day_month" && $this->props['timer_type'] == '3'){
				$date = gmdate('y-m-t');
				$date = date_create($date);
				if(!empty($this->props['end_time_month_3'])){
				$timeArr = explode(':',$this->props['end_time_month_3']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
				$timeArra = date_format($date, 'Y-m-d H:i:s');
				$standard_time                  = $timeArra;
				}else{
				$timeArra= date_format($date, 'Y-m-d H:i:s');
				$standard_time                  = $timeArra;
				}
				
			}

			if($this->props['end_trigger_3']=='woo_product_end_date' && $this->props['timer_type'] == '3'){
				$woo_pro_sales_end   = get_post_meta(get_the_ID(), '_sale_price_dates_to', true );
				$date_time = date('Y-m-d 00:00:00', $woo_pro_sales_end);
				$standard_time = $date_time;		
			
			}
			
			if($this->props['end_trigger_3']=="custom_duration_end" && $this->props['timer_type'] == '3'){
				$DateDurationStr_3 = '';
				if($this->props['expirey_days_3'] > 0)
				$DateDurationStr_3 .= sprintf('+%1$s days',$this->props['expirey_days_3']);
				if($this->props['expirey_hours_3'] > 0)
				$DateDurationStr_3 .= sprintf(' +%1$s hour',$this->props['expirey_hours_3']);
				if($this->props['expirey_mins_3'] > 0)
				$DateDurationStr_3 .= sprintf(' +%1$s minutes',$this->props['expirey_mins_3']);
				if($this->props['expirey_sec_3'] > 0)
				$DateDurationStr_3 .= sprintf(' +%1$s seconds',$this->props['expirey_sec_3']);
			 
			
				if($this->props['start_trigger_3']=="date_time" && $this->props['timer_type'] == '3'){
					$date_time_start_3 = $this->props['start_date_time_3']; 
					$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($date_time_start_3.$DateDurationStr_3));
				    $standard_time =  $start_custom_trigger;
				}


				if($this->props["start_trigger_3"]=="day_of_week" && $this->props['timer_type'] == '3'){
					$date = gmdate("Y-m-d", strtotime($DateDurationStr_3.$this->props['day_of_week_start_3']));
					$date = date_create($date);
					if(!empty($this->props['date_time_3'])){
						$timeArr = explode(':',$this->props['date_time_3']);
						date_time_set($date, $timeArr[0], $timeArr[1]);
						$timeArr= date_format($date, 'Y-m-d H:i:s');	
						$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($timeArr.$DateDurationStr_3));
						$standard_time =  $start_custom_trigger;	

					}else{
						$timeArr= date_format($date, 'Y-m-d H:i:s');
						$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($timeArr.$DateDurationStr_3));
						$standard_time =  $start_custom_trigger;	
					}
					
				}
				

				if($this->props['start_trigger_3']=="first_day_month" && $this->props['timer_type'] == '3'){
				$date = gmdate('Y-m-01');
				$date = date_create($date);
				if(!empty($this->props['date_time_first_month_3'])){
				$timeArr = explode(':',$this->props['date_time_first_month_3']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
				$timeArr= date_format($date, 'Y-m-d H:i:s');
				$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($timeArr.$DateDurationStr_3));
				$standard_time =  $start_custom_trigger;
				}else{
				$timeArr= date_format($date, 'Y-m-d H:i:s');
				$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($timeArr.$DateDurationStr_3));
				$standard_time =  $start_custom_trigger;
				}
				

				}
				
			}

				$finish_date   = gmdate( 'M d, Y H:i:s', strtotime( $standard_time ) );
		
		// $standard_time                  = $this->props['user_defined_end_time'];
		// $finish_date                    = gmdate( 'M d, Y H:i:s', strtotime( $standard_time ) );
	
		$use_background_color           = $this->props['use_background_color'];
		$end_date                       = gmdate( 'M d, Y H:i:s', strtotime( $date_time ) );
		$gmt_offset                     = get_option( 'gmt_offset' );
		$gmt_divider                    = '-' === substr( $gmt_offset, 0, 1 ) ? '-' : '+';
		$utc_divider                    = '-' === substr( $gmt_offset, 0, 1 ) ? '' : '+';
		$gmt_offset_hour                = str_pad( abs( intval( $gmt_offset ) ), 2, "0", STR_PAD_LEFT );
		$gmt_offset_minute              = str_pad( ( ( abs( $gmt_offset ) * 100 ) % 100 ) * ( 60 / 100 ), 2, "0", STR_PAD_LEFT );
		$gmt                            = "GMT{$gmt_divider}{$gmt_offset_hour}{$gmt_offset_minute}";
//print_r($gmt);		
		if ( '' !== $separator_text_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% span.section, %%order_class%% .split-flip',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $separator_text_color )
				),
			) );
		}
	
		if ( '' !== $section_background_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .section.values, %%order_class%% .dp_countdown_text_timer .count',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $section_background_color )
				),
			) );
		}
		
		if ( '' !== $container_background_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .ditp_countdown_counter_container',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $container_background_color )
				),
			) );
		}
		if ( '' !== $number_background_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% p.value, %%order_class%% .digit-top, %%order_class%% .digit-top2.r, %%order_class%%  .digit-bottom, %%order_class%%  .digit-next, %%order_class%% .digit-bottom.r',
				'declaration' => sprintf(
					'background-color: %1$s !important;',
					esc_html( $number_background_color )
				),
			) );
		}

		// if ( '' !== $number_background_color ) {
		// 	ET_Builder_Element::set_style( $render_slug, array(
		// 		'selector'    => '%%order_class%% .digit-top, %%order_class%% .digit-top2.r, %%order_class%%  .digit-bottom, %%order_class%%  .digit-next, %%order_class%% .digit-bottom.r',
		// 		'declaration' => sprintf(
		// 			'background: %1$s !important;',
		// 			esc_html( $number_background_color )
		// 		),
		// 	) );
		// }
		if ( '' !== $bar_background_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .barCountdownCompleted',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $bar_background_color )
				),
			) );
		}

		if ( '' !== $bar_remaining_background_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .barCountdowncontainer',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $bar_remaining_background_color )
				),
			) );
		}


		if ( '' !== $bar_height ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .barCountdownCompleted, %%order_class%% .barCountdowncontainer',
				'declaration' => sprintf(
					'height: %1$s;',
					esc_html( $bar_height )
				),
			) );
		}
		

		if ( '' !== $section_width ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .et_pb_countdown_timer .section.values',
				'declaration' => sprintf(
					'width: %1$s !important;',
					esc_html( $section_width )
				),

			) );

			\ET_Builder_Element::set_style($render_slug, [
				'selector'    => '%%order_class%% .et_pb_countdown_timer .section.values',
				'declaration' => "width: {$section_width_tablet} !important;",
				'media_query' => \ET_Builder_Element::get_media_query('max_width_980'),
			]);
	
			\ET_Builder_Element::set_style($render_slug, [
				'selector'    => '%%order_class%% .et_pb_countdown_timer .section.values',
				'declaration' => "width: {$section_width_phone} !important;",
				'media_query' => \ET_Builder_Element::get_media_query('max_width_767'),
			]);
		}

		

		if ( '' !== $label_background_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% p.label',
				'declaration' => sprintf(
					'background-color: %1$s;',
					esc_html( $label_background_color )
				),
			) );
		}

		//   $this->woo_pro_start_date($args,get_the_ID());

		// if($this->props['start_trigger_2']=='woo_product_start_date' && $this->props['timer_type'] == '2'){
		
		// 	$woo_pro_sales_start = get_post_meta(get_the_ID(), '_sale_price_dates_from', true );	   
		// 	$date_time_stamp = date('Y-m-d H:i:s', $woo_pro_sales_start);
		// 	//$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
		
		// 	}
	
		// 	if($this->props['end_trigger_2']=='woo_product_end_date' && $this->props['timer_type'] == '2'){
	
		// 		$woo_pro_sales_end   = get_post_meta(get_the_ID(), '_sale_price_dates_to', true );
		// 		$date_time_stamp = date('Y-m-d H:i:s', $woo_pro_sales_end);
			
		// 	}


		$this->apply_custom_margin_padding($render_slug, 'container_margin', 'margin', 
		'%%order_class%% .ditp_countdown_counter_container');
		$this->apply_custom_margin_padding($render_slug, 'container_padding', 'padding', 
		'%%order_class%% .ditp_countdown_counter_container');
		$this->apply_custom_margin_padding($render_slug, 'label_margin', 'margin', 
		'%%order_class%% p.label');
		$this->apply_custom_margin_padding($render_slug, 'label_padding', 'padding', 
		'%%order_class%% p.label');
		$this->apply_custom_margin_padding($render_slug, 'number_margin', 'margin', 
		'%%order_class%% p.value');
		$this->apply_custom_margin_padding($render_slug, 'number_padding', 'padding', 
		'%%order_class%% p.value');
		$this->apply_custom_margin_padding($render_slug, 'section_margin', 'margin', 
		'%%order_class%% .values');
		$this->apply_custom_margin_padding($render_slug, 'section_padding', 'padding', 
		'%%order_class%% .values');
		$cookieName = 'getUtilizedTime_'.substr($this->getrenderClassNameSelector($this->module_classname( $render_slug ),$render_slug),1);
		$cookieStartDuration='cookieStartDuration_'.substr($this->getrenderClassNameSelector($this->module_classname( $render_slug ),$render_slug),1);
		$cookieEndDuration='cookieEndDuration_'.substr($this->getrenderClassNameSelector($this->module_classname( $render_slug ),$render_slug),1);
		$cookieExpiryTime='cookieExpiryTime_'.substr($this->getrenderClassNameSelector($this->module_classname( $render_slug ),$render_slug),1);
		// $Currentdate_time_Stamp = strtotime( date('Y-m-d H:i:s')) .' '. $gmt;//+ get_option( 'gmt_offset' ) * 3600 ;
		$ipAdress='cookieIpAdress_'.substr($this->getrenderClassNameSelector($this->module_classname( $render_slug ),$render_slug),1);
		$ipAdressa='I_'.substr($this->getrenderClassNameSelector($this->module_classname( $render_slug ),$render_slug),1);
		// $Currentdate_time_Stamp = strtotime( date('Y-m-d H:i:s')) .' '. $gmt;//+ get_option( 'gmt_offset' ) * 3600 ;
		//$WP_REMOTE_ADDR=$this->props['WP_REMOTE_ADDR'];
	//	$Currentdate_time_Stamp =  strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
		// $utctestCurrentdate_time_Stamp = strtotime( date('Y-m-d H:i:s')) .' UTC'.$utc_divider.$gmt_offset ;
		// $get_date =gmdate("D H:i:s");
		// $unixTimestamp = strtotime($get_date);


		$Currentdate_time_Stamp = "";


		if($this->props["start_trigger_3"]=='immediately' && $this->props['timer_type'] == '3'){	    
	     $Currentdate_time_Stamp =  strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;	
		}

		if($this->props['start_trigger_3']=='current_event_start_date' && $this->props['timer_type'] == '3'){
		
			// echo  strtotime( tribe_get_start_date(get_the_ID(),'Y-m-d H:i:s'));
			if(get_post_meta( get_the_ID(), '_EventAllDay', true ) == 'yes'){
				$Defined_time_Stamp = strtotime( tribe_get_start_date(get_the_ID(),null,'Y-m-d H:i:s')) + 0 * 3600 ;
				$Currentdate_time_Stamp = strtotime( tribe_get_start_date(get_the_ID(),'Y-m-d H:i:s')) + 0 * 3600 ;
			}else{
				$Defined_time_Stamp = strtotime( tribe_get_start_time(get_the_ID(),'Y-m-d H:i:s')) + 0 * 3600 ;
				$Currentdate_time_Stamp = strtotime( tribe_get_start_time(get_the_ID(),'Y-m-d H:i:s')) + 0 * 3600 ;
			}
				
			//print_r($this->props['end_time_1']);
		}

		if($this->props['start_trigger_3']=='woo_product_start_date' && $this->props['timer_type'] == '3'){
		
			$woo_pro_sales_start = get_post_meta(get_the_ID(), '_sale_price_dates_from', true );
			$date_time = date('Y-m-d 00:00:00', $woo_pro_sales_start);	   
			$Defined_time_Stamp = strtotime($date_time);   
			$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
			//$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;	
		//	echo $woo_pro_sales_start."start date";
			//exit;
		}

		if($this->props['start_trigger_3']=="date_time" && $this->props['timer_type'] == '3'){	
	        $Defined_time_Stamp = strtotime( $this->props["start_date_time_3"]) + 0 * 3600 ;
			$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;			
		}

		if($this->props["start_trigger_3"]=="day_of_week" && $this->props['timer_type'] == '3'){
			$date = gmdate("Y-m-d H:i:s", strtotime($get_date.$this->props['day_of_week_start_3']));
			$date = date_create($date);
			if(!empty($this->props['date_time_3'])){
			$timeArr = explode(':',$this->props['date_time_3']);
			date_time_set($date, $timeArr[0], $timeArr[1]);
			$timeArr= date_format($date, 'Y-m-d H:i:s');	
		    $Defined_time_Stamp=strtotime( $timeArr) + 0 * 3600 ; 
			}else{	
			$timeArr= date_format($date, 'Y-m-d H:i:s');
		    $Defined_time_Stamp= strtotime( $timeArr) + 0 * 3600 ;
			}
			
		    $Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
		}
			
		if($this->props["start_trigger_3"]=="first_day_month" && $this->props['timer_type'] == '3'){

				$date = gmdate('Y-m-01');
				$date = date_create($date);
				if(!empty($this->props['date_time_first_month_3'])){
				$timeArr = explode(':',$this->props['date_time_first_month_3']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
				$timeArra = date_format($date, 'Y-m-d H:i:s');
			    $Defined_time_Stamp = strtotime( $timeArra) + 0 * 3600 ;
				}else{
				$timeArra = date_format($date, 'Y-m-d H:i:s');
			    $Defined_time_Stamp = strtotime( $timeArra) + 0 * 3600 ;
				}
				$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
		}


	if($this->props['start_trigger_3']=="custom_duration_start" && $this->props['timer_type'] == '3'){	
		
		$start_DateDurationStr_3 = '';
			if($this->props['start_expirey_days_3'] > 0)
			$start_DateDurationStr_3 .= sprintf('-%1$s days',$this->props['start_expirey_days_3']);
			if($this->props['start_expirey_hours_3'] > 0)
			$start_DateDurationStr_3 .= sprintf(' -%1$s hour',$this->props['start_expirey_hours_3']);
			if($this->props['start_expirey_mins_3'] > 0)
			$start_DateDurationStr_3 .= sprintf(' -%1$s minutes',$this->props['start_expirey_mins_3']);
			if($this->props['start_expirey_sec_3'] > 0)
			$start_DateDurationStr_3 .= sprintf(' -%1$s seconds',$this->props['start_expirey_sec_3']);		


			if($this->props['end_trigger_3']=='date_time'){
			   $date_time_start_3 = $this->props['user_defined_end_time']; 
               $start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($date_time_start_3.$start_DateDurationStr_3)); 
		       $Defined_time_Stamp =  strtotime($start_custom_trigger);
			}

			if($this->props['end_trigger_3']=='day_of_week'){

				$date = gmdate("Y-m-d", strtotime($get_date.$this->props['day_of_week_end_3']));
				$date = date_create($date);
				if(!empty($this->props['end_time_3'])){
				$timeArr = explode(':',$this->props['end_time_3']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
				$timeArr = date_format($date, 'Y-m-d H:i:s');
				}else{
				$timeArr = date_format($date, 'Y-m-d H:i:s');	
				}
				$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($timeArr.$start_DateDurationStr_3));
			    $Defined_time_Stamp =  strtotime($start_custom_trigger);
			}

			if($this->props['end_trigger_3']=='last_day_month'){
				$date = gmdate('y-m-t');
				$date = date_create($date);
				if(!empty($this->props['end_time_month_3'])){
				$timeArr = explode(':',$this->props['end_time_month_3']);
				date_time_set($date, $timeArr[0], $timeArr[1],$timeArr[2]);
				$timeArra = date_format($date, 'Y-m-d H:i:s');
				}else{
				$timeArra = date_format($date, 'Y-m-d H:i:s');
				}
				$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($timeArra.$start_DateDurationStr_3)); 
			    $Defined_time_Stamp =  strtotime($start_custom_trigger);
			}
   	
			$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;	
		
		}

	//	echo $Currentdate_time_Stamp;

		$message_button_url = trim( $message_button_url );


		// if($this->props['start_trigger_2']=='woo_product_start_date' && $this->props['timer_type'] == '2'){
		
		// 	$woo_pro_sales_start = get_post_meta(get_the_ID(), '_sale_price_dates_from', true );
		// 	$date_time = date('Y-m-d', $woo_pro_sales_start);	   
		// 	$date_time_stamp = strtotime($date_time);   
		// 	$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
		// 	//$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;	

		// //	echo $woo_pro_sales_start."start date";
		// 	//exit;
		// }


		if($this->props['timer_type'] == '2' && $this->props['start_trigger_2']=='date_time'){
			$date_time = $this->props['date_time_2'];	
			$date_time_stamp = strtotime($date_time);  
			$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
		}

//		echo $this->props['start_time_daily']."daily start date";

		if($this->props['timer_type'] == '2' && $this->props['pattern'] == 'daily'){
			    $date = gmdate("Y-m-d");
				$date = date_create($date);
			if(!empty($this->props['start_time_daily'])){
				$timeArr = explode(':',$this->props['start_time_daily']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
				$timeArr = date_format($date, 'Y-m-d H:i:s');
				}else{
				$timeArr = date_format($date, 'Y-m-d H:i:s');
				}
				$date_time = gmdate('Y-m-d H:i:s', strtotime($timeArr));
			//	echo $date_time."date time";
			    $date_time_stamp =  strtotime($date_time);
				$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
	   }


				if($this->props['timer_type'] == '2' && $this->props['pattern'] == 'weekly'){
					$date = gmdate("Y-m-d", strtotime($get_date.$this->props['pattern_day']));
					$date = date_create($date);
				if(!empty($this->props['start_time_weekly'])){
					$timeArr = explode(':',$this->props['start_time_weekly']);
					date_time_set($date, $timeArr[0], $timeArr[1]);
					$timeArr = date_format($date, 'Y-m-d H:i:s');
					}else{
					$timeArr = date_format($date, 'Y-m-d H:i:s');
					}
					$date_time = gmdate('Y-m-d H:i:s', strtotime($timeArr));
				//	echo $date_time."date time";
					$date_time_stamp =  strtotime($date_time);
					$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
			}


			if($this->props['timer_type'] == '2' && $this->props['pattern'] == 'monthly'){	

				if($this->props['start_day_of_month'] == 'first' ){
					$date = gmdate('Y-m-01');
				}else{
					if(!empty($this->props['custom_start_day_month'])){
						$date_first = gmdate('Y-m-01');
						$date = date('Y-m-d', strtotime($date_first. ' + '.($this->props['custom_start_day_month'] - 1).' days')); 
					}else{
						$date = gmdate('Y-m-01');
					}
					
				}
			
				$date = date_create($date);
				if(!empty($this->props['start_time_monthly'])){
				$timeArr = explode(':',$this->props['start_time_monthly']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
				$timeArra = date_format($date, 'Y-m-d H:i:s');
				}else{
				$timeArra = date_format($date, 'Y-m-d H:i:s');	
				}
				$date_time = $timeArra;
				$date_time_stamp =  strtotime($date_time);
				$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
		    }


		if($this->props['timer_type'] == '2' && $this->props['pattern'] == 'yearly'){

			if($this->props['start_day_of_yearly'] == 'first' ){
				$date = gmdate('Y-'.$this->props['pattern_start_month_yearly'].'-01');
			}else{

				if(!empty($this->props['custom_start_day_yearly'])){
					$date_first =  gmdate('Y-'.$this->props['pattern_start_month_yearly'].'-01');
					$date = date('Y-m-d', strtotime($date_first. ' + '.($this->props['custom_start_day_yearly'] - 1).' days')); 
				}else{
					$date = gmdate('Y-'.$this->props['pattern_start_month_yearly'].'-01');
				}
			
			}

			$date = date_create($date);
			if(!empty($this->props['start_time_yearly'])){
			$timeArr = explode(':',$this->props['start_time_yearly']);
			date_time_set($date, $timeArr[0], $timeArr[1]);
			$timeArra = date_format($date, 'Y-m-d H:i:s');
			}else{
			$timeArra = date_format($date, 'Y-m-d H:i:s');	
			}
			$date_time = $timeArra;
		//	echo $date_time."date time";
			$date_time_stamp =  strtotime($date_time);
			$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
		}

		if($this->props['timer_type'] == '2' && $this->props['start_trigger_2']=='day_of_week'){

			    $date = gmdate("Y-m-d", strtotime($get_date.$this->props['day_of_week_start_2']));
			    $date = date_create($date);
				if(!empty($this->props['start_date_time_2'])){
				$timeArr = explode(':',$this->props['start_date_time_2']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
				$timeArr = date_format($date, 'Y-m-d H:i:s');
				}else{
				$timeArr = date_format($date, 'Y-m-d H:i:s');
				}
				$date_time = gmdate('Y-m-d H:i:s', strtotime($timeArr));
			    $date_time_stamp =  strtotime($date_time);
				$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
		}


		if($this->props['timer_type'] == '2' && $this->props['start_trigger_2']=='first_day_month'){
			    $date = gmdate('Y-m-01');
				$date = date_create($date);
				if(!empty($this->props['date_time_first_month_2'])){
				$timeArr = explode(':',$this->props['date_time_first_month_2']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
				$timeArra = date_format($date, 'Y-m-d H:i:s');
				}else{
				$timeArra = date_format($date, 'Y-m-d H:i:s');	
				}
				$date_time = $timeArra;
				$date_time_stamp =  strtotime($date_time);
				$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
	    }

		if($this->props['start_trigger_2']=="custom_duration_start" && $this->props['timer_type'] == '2'){	
		
			$start_DateDurationStr_2 = '';
				if($this->props['start_expirey_days_2'] > 0)
				$start_DateDurationStr_2 .= sprintf(' -%1$s days ',$this->props['start_expirey_days_2']);
				if($this->props['start_expirey_hours_2'] > 0)
				$start_DateDurationStr_2 .= sprintf(' -%1$s hour ',$this->props['start_expirey_hours_2']);
				if($this->props['start_expirey_mins_2'] > 0)
				$start_DateDurationStr_2 .= sprintf(' -%1$s minutes ',$this->props['start_expirey_mins_2']);
				if($this->props['start_expirey_sec_2'] > 0)
				$start_DateDurationStr_2 .= sprintf(' -%1$s seconds ',$this->props['start_expirey_sec_2']);
					
	
				if($this->props['end_trigger_2']=='date_time'){
				   $date_time_start_3 = $this->props['date_time']; 
				   $date_time = gmdate('Y-m-d H:i:s', strtotime($date_time_start_3.$start_DateDurationStr_2)); 
				   $date_time_stamp =  strtotime($date_time);
				  
				}else if($this->props['end_trigger_2']=='day_of_week'){
			    	$date = gmdate("Y-m-d", strtotime($get_date.$this->props['day_of_week_end_2']));
					$date = date_create($date);
					if(!empty($this->props['end_time_2'])){
					$timeArr = explode(':',$this->props['end_time_2']);
					date_time_set($date, $timeArr[0], $timeArr[1]);
					$timeArr = date_format($date, 'Y-m-d H:i:s');
					}else{
						$timeArr = date_format($date, 'Y-m-d H:i:s');	
					}
					$date_time = gmdate('Y-m-d H:i:s', strtotime($timeArr.$start_DateDurationStr_2));
					$date_time_stamp =  strtotime($date_time);
				}else if($this->props['end_trigger_2']=='last_day_month'){
					$date = gmdate('y-m-t');
					$date = date_create($date);
					if(!empty($this->props['end_time_month_2'])){
					$timeArr = explode(':',$this->props['end_time_month_2']);
					date_time_set($date, $timeArr[0], $timeArr[1]);
					$timeArra = date_format($date, 'Y-m-d H:i:s');
					}else{
					$timeArra = date_format($date, 'Y-m-d H:i:s');
					}
					$date_time = gmdate('Y-m-d H:i:s', strtotime($timeArra.$start_DateDurationStr_2)); 
					$date_time_stamp =  strtotime($date_time);
				}


				$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;

			//	echo $date_time."day of week....  ";
			}

		if($this->props['start_trigger_1'] == "first_land" && ( $this->props['timer_type'] == '1' || $this->props['timer_type'] == ''))
		 {
		//	echo 'first land inner';
		    $Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
			$date_time = gmdate('Y-m-d H:i:s',$Currentdate_time_Stamp);
		    $date_time_stamp = $Currentdate_time_Stamp;

		//	echo $date_time_stamp."date time stamp ...";
		}
		
		// if($this->props['timer_type'] == 1 || $this->props['timer_type'] == '')
		// {
		// 	$date_time = gmdate('Y-m-d H:i:s',$Currentdate_time_Stamp);
		// 	$date_time_stamp = $Currentdate_time_Stamp;
		// }
		
		if(isset($_COOKIE[$cookieName])){
			$getUtilizedTime_COOKIE =  isset($_COOKIE[$cookieName]) ? sanitize_text_field( wp_unslash( $_COOKIE[$cookieName] ) ) : sanitize_text_field( wp_unslash( $_COOKIE[$cookieName] ) ) ;
		}
		
		//print_r($Currentdate_time_Stamp);
			if(
		  $Currentdate_time_Stamp >= $date_time_stamp &&
		  ($this->props['expirey_days'] > 0 ||
		  $this->props['expirey_hours'] > 0 ||
		  $this->props['expirey_mins'] > 0)
		  && ($getUtilizedTime_COOKIE != -1 || $this->props['timer_type'] == 2)  || $this->props['timer_type'] == 2) {

			$content = get_post_field('post_content', get_the_ID());
			$PostArr = explode('date_time="'.$this->props['date_time'].'"',$content);
			$now = $Currentdate_time_Stamp; // or your date as well
			
			$PauseTotalTime='';
			if($this->props['pause_interval_days'] > 0)
			$PauseTotalTime .= sprintf('+%1$s days',$this->props['pause_interval_days']);
			if($this->props['pause_interval_hours'] > 0)
			$PauseTotalTime .= sprintf(' +%1$s hour',$this->props['pause_interval_hours']);
			if($this->props['pause_interval_minutes'] > 0)
            $PauseTotalTime .= sprintf(' +%1$s minutes',$this->props['pause_interval_minutes']);

			if($this->props['end_trigger_2']=='custom_duration_end' && $this->props['timer_type'] == '2' ){
				$DateDurationStr = '';
				if($this->props['expirey_days_2'] > 0)
				$DateDurationStr .= sprintf('+%1$s days',$this->props['expirey_days_2']);
				if($this->props['expirey_hours_2'] > 0)
				$DateDurationStr .= sprintf(' +%1$s hour',$this->props['expirey_hours_2']);
				if($this->props['expirey_mins_2'] > 0)
				$DateDurationStr .= sprintf(' +%1$s minutes',$this->props['expirey_mins_2']);
				if($this->props['expirey_sec_2'] > 0)
				$DateDurationStr .= sprintf(' +%1$s seconds',$this->props['expirey_sec_2']);
				if($DateDurationStr != '')
			    $your_date = strtotime($DateDurationStr,strtotime($date_time));  //$now - $your_date;
			
			
			if($this->props['start_trigger_2']=='date_time'){
				
				$futureDate = gmdate('Y-m-d H:i:s',strtotime('+1 year',strtotime($date_time)));
			
			}else if($this->props['start_trigger_2']=='day_of_week'){ 
				
				$futureDate = gmdate('Y-m-d H:i:s',strtotime('+1 week',strtotime($date_time)));
		    
			}else if($this->props['start_trigger_2']=='first_day_month'){
			   
				$futureDate = gmdate('Y-m-d H:i:s',strtotime('+1 month',strtotime($date_time)));
		    
			}		
			    $time = gmdate("Y-m-d H:i:s",$your_date);
			    $futureDate_start = date_create($time);
				$futureDate_end = date_create($futureDate);
				$diff  = date_diff($futureDate_start,$futureDate_end);
				$PauseTotalTime = "+".$diff->format('%y')." years "."+".$diff->format('%m')." months "."+".$diff->format('%d')." days "." +".$diff->format('%h')." hour "."+".$diff->format('%i')." minutes";
			    $PauseIntervalSecond=strtotime($PauseTotalTime,$your_date);
				//echo $PauseTotalTime."pause total time ....";
				// echo $PauseTotalTime."<br>";
			    // echo $PauseIntervalSecond;	
			}


		if($this->props['end_trigger_2']=='date_time' && $this->props['timer_type'] == '2'){
			$datetime1 = new DateTime($date_time);
			$datetime2 = new DateTime($this->props['date_time']);
			$interval = $datetime1->diff($datetime2);
			$DateDurationStr = "+".$interval->format('%y')." years "."+".$interval->format('%m')." months "."+".$interval->format('%d')." days "." +".$interval->format('%h')." hour "."+".$interval->format('%i')." minutes";
			$your_date_start = strtotime($date_time);
			$your_date = strtotime($DateDurationStr,$your_date_start); 		
			$futureDate = gmdate('Y-m-d H:i:s',strtotime('+1 year',strtotime($date_time)));		
			$futureDate_start = date_create($this->props['date_time']);
            $futureDate_end = date_create($futureDate);
            $diff  = date_diff($futureDate_start,$futureDate_end);
			$PauseTotalTime = "+".$diff->format('%y')." years "."+".$diff->format('%m')." months "."+".$diff->format('%d')." days "." +".$diff->format('%h')." hour "."+".$diff->format('%i')." minutes";
			$PauseIntervalSecond=strtotime($PauseTotalTime,strtotime($this->props['date_time']));				
		}


		if($this->props['end_trigger_2']=='day_of_week' && $this->props['timer_type'] == '2'){
			$date = gmdate('Y-m-d', strtotime($get_date.$this->props['day_of_week_end_2']));
	//	echo $date."date ..";
			$date = date_create($date);
			
			if(!empty($this->props['end_time_2'])){
				$timeArr = explode(':',$this->props['end_time_2']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
			    $timeArr = date_format($date, 'Y-m-d H:i:s');

			}else{
				$timeArr = date_format($date, 'Y-m-d H:i:s');
			}		
		//	echo $timeArr;		
			$datetime1 = new DateTime($date_time);
			$datetime2 = new DateTime($timeArr);
			$interval = $datetime1->diff($datetime2);
			$DateDurationStr = " + ".$interval->format('%y')." years "." + ".$interval->format('%m')." months "." + ".$interval->format('%d')." days "." + ".$interval->format('%h')." hour "." + ".$interval->format('%i')." minutes";
			$your_date_start = strtotime($date_time);
			$your_date = strtotime($DateDurationStr,$your_date_start); 

			// echo $timeArr."your date ..";
			// exit;
			if($this->props['start_trigger_2']=='date_time'){
				$futureDate = gmdate('Y-m-d H:i:s',strtotime('+1 year',strtotime($date_time)));		
				
			}else if($this->props['start_trigger_2']=='first_day_month'){
				$futureDate = gmdate('Y-m-d H:i:s',strtotime('+1 month',strtotime($date_time)));		
			
			}else if($this->props['start_trigger_2']=='day_of_week'){ 
				$futureDate = gmdate('Y-m-d H:i:s',strtotime('+1 week',strtotime($date_time)));			
			}else if($this->props['start_trigger_2']=="custom_duration_start" ){			
				$futureDate = gmdate('Y-m-d H:i:s',strtotime('+1 week',strtotime($date_time)));	
			}

			    $futureDate_start = date_create($timeArr);
				$futureDate_end = date_create($futureDate);
				$diff  = date_diff($futureDate_start,$futureDate_end);
				$PauseTotalTime = "+".$diff->format('%y')." years "."+".$diff->format('%m')." months "."+".$diff->format('%d')." days "." +".$diff->format('%h')." hour "."+".$diff->format('%i')." minutes";
				$PauseIntervalSecond=strtotime($PauseTotalTime,$your_date);		
		
		}

		if($this->props['timer_type'] == '2' && $this->props['pattern'] == 'daily'){
			$date = gmdate("Y-m-d");
			$date = date_create($date);
			if(!empty($this->props['end_time_daily'])){
			$timeArr = explode(':',$this->props['end_time_daily']);
			date_time_set($date, $timeArr[0], $timeArr[1]);
			$timeArra = date_format($date, 'Y-m-d H:i:s');
			}else{
			$timeArra = date_format($date, 'Y-m-d H:i:s');	
			}
			$datetime1 = new DateTime($date_time);
			$datetime2 = new DateTime($timeArra);
			$interval = $datetime1->diff($datetime2);
			$DateDurationStr = "+".$interval->format('%d')." days "." +".$interval->format('%h')." hour "."+".$interval->format('%i')." minutes";
			$your_date_start = strtotime($date_time);
			$your_date = strtotime($DateDurationStr,$your_date_start);

			$futureDate = gmdate('Y-m-d H:i:s',strtotime('+'.$this->props['pattern_daily'].' days',strtotime($date_time)));		
			$futureDate_start = date_create($timeArra);
			$futureDate_end = date_create($futureDate);
			$diff  = date_diff($futureDate_start,$futureDate_end);
			$PauseTotalTime = "+".$diff->format('%y')." years "."+".$diff->format('%m')." months "."+".$diff->format('%d')." days "." +".$diff->format('%h')." hour "."+".$diff->format('%i')." minutes";
			$PauseIntervalSecond=strtotime($PauseTotalTime,$your_date);
		//	echo 'daily pattern run'.$PauseTotalTime;
	}


	if($this->props['timer_type'] == '2' && $this->props['pattern'] == 'weekly'){
		$date = gmdate("Y-m-d", strtotime($get_date.$this->props['pattern_weekly_end_date']));
		$date = date_create($date);
		if(!empty($this->props['end_time_weekly'])){
		$timeArr = explode(':',$this->props['end_time_weekly']);
		date_time_set($date, $timeArr[0], $timeArr[1]);
		$timeArra = date_format($date, 'Y-m-d H:i:s');
		}else{
		$timeArra = date_format($date, 'Y-m-d H:i:s');	
		}
		$datetime1 = new DateTime($date_time);
		$datetime2 = new DateTime($timeArra);
		$interval = $datetime1->diff($datetime2);
		$DateDurationStr = "+".$interval->format('%d')." days "." +".$interval->format('%h')." hour "."+".$interval->format('%i')." minutes";
		$your_date_start = strtotime($date_time);
		$your_date = strtotime($DateDurationStr,$your_date_start);

		$futureDate = gmdate('Y-m-d H:i:s',strtotime('+'.$this->props['pattern_weekly'].' week',strtotime($date_time)));		
		$futureDate_start = date_create($timeArra);
		$futureDate_end = date_create($futureDate);
		$diff  = date_diff($futureDate_start,$futureDate_end);
		$PauseTotalTime = "+".$diff->format('%y')." years "."+".$diff->format('%m')." months "."+".$diff->format('%d')." days "." +".$diff->format('%h')." hour "."+".$diff->format('%i')." minutes";
		$PauseIntervalSecond=strtotime($PauseTotalTime,$your_date);
	//	echo 'daily pattern run'.$PauseTotalTime;
}


		if($this->props['timer_type'] == '2' && $this->props['pattern'] == 'monthly'){

			if($this->props['end_day_of_month'] == 'last' ){
				$date = gmdate('Y-m-t 23:59:59');
			}else{
				
				if(!empty($this->props['custom_end_day_month'])){
				$date_first = gmdate('Y-m-01');
				$date = date('Y-m-d', strtotime($date_first. ' + '.($this->props['custom_end_day_month'] - 1).' days')); 	
				}else{
					$date = gmdate('Y-m-t 23:59:59');
				}
			}

			//$date = gmdate('y-m-t');
			$date = date_create($date);
			if(!empty($this->props['end_time_monthly'])){
			$timeArr = explode(':',$this->props['end_time_monthly']);
			date_time_set($date, $timeArr[0], $timeArr[1]);
			$timeArra = date_format($date, 'Y-m-d H:i:s');
			}else{
			$timeArra = date_format($date, 'Y-m-d H:i:s');	
			}
			$datetime1 = new DateTime($date_time);
			$datetime2 = new DateTime($timeArra);
			$interval = $datetime1->diff($datetime2);
			$DateDurationStr = "+".$interval->format('%y')." years "."+".$interval->format('%m')." months "."+".$interval->format('%d')." days "." +".$interval->format('%h')." hour "."+".$interval->format('%i')." minutes";
			$your_date_start = strtotime($date_time);
			$your_date = strtotime($DateDurationStr,$your_date_start);

			$futureDate = gmdate('Y-m-d H:i:s',strtotime('+'.$this->props['pattern_monthly'].' month',strtotime($date_time)));		
			$futureDate_start = date_create($timeArra);
			$futureDate_end = date_create($futureDate);
			$diff  = date_diff($futureDate_start,$futureDate_end);
			$PauseTotalTime = "+".$diff->format('%y')." years "."+".$diff->format('%m')." months "."+".$diff->format('%d')." days "." +".$diff->format('%h')." hour "."+".$diff->format('%i')." minutes";
			$PauseIntervalSecond=strtotime($PauseTotalTime,$your_date);
		//	echo 'daily pattern run'.$PauseIntervalSecond;
		}


		if($this->props['timer_type'] == '2' && $this->props['pattern'] == 'yearly'){

			if($this->props['end_day_of_month_year'] == 'last' ){
				$date = gmdate('Y-'.$this->props['pattern_end_month_yearly'].'-t');
			}else{
				
				if(!empty($this->props['custom_end_day_month_year'])){
					$date_first =  gmdate('Y-'.$this->props['pattern_end_month_yearly'].'-01');
					$date = date('Y-m-d', strtotime($date_first. ' + '.($this->props['custom_end_day_month_year'] - 1).' days')); 
				//	echo $date."Date ,,,,,,,";
				}else{
					$date = gmdate('Y-'.$this->props['pattern_end_month_yearly'].'-t');
				}
				
			}
		    $date = date('Y-m-d 23:59:59',strtotime($date));
			$date = date_create($date);
		//	echo  	$date;
			if(!empty($this->props['end_time_yearly'])){
			$timeArr = explode(':',$this->props['end_time_yearly']);
			date_time_set($date, $timeArr[0], $timeArr[1]);
			$timeArra = date_format($date, 'Y-m-d H:i:s');
			}else{
			$timeArra = date_format($date, 'Y-m-d H:i:s');	
			}
			$datetime1 = new DateTime($date_time);
			$datetime2 = new DateTime($timeArra);
			$interval = $datetime1->diff($datetime2);
			$DateDurationStr = "+".$interval->format('%y')." years "."+".$interval->format('%m')." months "."+".$interval->format('%d')." days "." +".$interval->format('%h')." hour "."+".$interval->format('%i')." minutes";
			$your_date_start = strtotime($date_time);
			$your_date = strtotime($DateDurationStr,$your_date_start);
			$futureDate = gmdate('Y-m-d H:i:s',strtotime('+'.$this->props['pattern_yearly'].' year',strtotime($date_time)));		
			$futureDate_start = date_create($timeArra);
			$futureDate_end = date_create($futureDate);
			$diff  = date_diff($futureDate_start,$futureDate_end);
			$PauseTotalTime = "+".$diff->format('%y')." years "."+".$diff->format('%m')." months "."+".$diff->format('%d')." days "." +".$diff->format('%h')." hour "."+".$diff->format('%i')." minutes";
			$PauseIntervalSecond=strtotime($PauseTotalTime,$your_date);
			//echo 'daily pattern run'.$PauseIntervalSecond;
			
		}

		
	//	print_r($your_date)."your date 7777";
	
		if($this->props['end_trigger_2']=='last_day_month' && $this->props['timer_type'] == '2'){
			$date = gmdate('y-m-t');
			$date = date_create($date);
			if(!empty($this->props['end_time_month_2'])){
			$timeArr = explode(':',$this->props['end_time_month_2']);
			date_time_set($date, $timeArr[0], $timeArr[1]);
			$timeArra = date_format($date, 'Y-m-d H:i:s');
			}else{
			$timeArra = date_format($date, 'Y-m-d H:i:s');	
			}
			$datetime1 = new DateTime($date_time);
			$datetime2 = new DateTime($timeArra);
			$interval = $datetime1->diff($datetime2);
			$DateDurationStr = "+".$interval->format('%d')." days "." +".$interval->format('%h')." hour "."+".$interval->format('%i')." minutes";
			$your_date_start = strtotime($date_time);
			$your_date = strtotime($DateDurationStr,$your_date_start); 
			
			if($this->props['start_trigger_2']=='date_time'){
				$futureDate = gmdate('Y-m-d H:i:s',strtotime('+1 year',strtotime($date_time)));			
			}else {
				$futureDate = gmdate('Y-m-d H:i:s',strtotime('+1 months',strtotime($date_time)));	
			}
				
			// if($this->props['start_trigger_2']=='first_day_month'){
			// 	$futureDate = date('Y-m-d H:i:s',strtotime('+1 months',strtotime($date_time)));				
			// }else if($this->props['start_trigger_2']=='day_of_week'){ 
			// 	$futureDate = date('Y-m-d H:i:s',strtotime('+1 week',strtotime($date_time)));			
			// }

			    $futureDate_start = date_create($timeArra);
				$futureDate_end = date_create($futureDate);
				$diff  = date_diff($futureDate_start,$futureDate_end);
				$PauseTotalTime = "+".$diff->format('%y')." years "."+".$diff->format('%m')." months "."+".$diff->format('%d')." days "." +".$diff->format('%h')." hour "."+".$diff->format('%i')." minutes";
				$PauseIntervalSecond=strtotime($PauseTotalTime,$your_date);	
		}
	
		if($this->props['end_trigger_1']=='custom_duration_end' && $this->props['timer_type'] == 1 ){	
			$your_date_start = strtotime($date_time);
			$DateDurationStr = '';
			if($this->props['expirey_days'] > 0)
			$DateDurationStr .= sprintf('+%1$s days',$this->props['expirey_days']);
			if($this->props['expirey_hours'] > 0)
			$DateDurationStr .= sprintf(' +%1$s hour',$this->props['expirey_hours']);
			if($this->props['expirey_mins'] > 0)
			$DateDurationStr .= sprintf(' +%1$s minutes',$this->props['expirey_mins']);
			if($this->props['expirey_sec'] > 0)
			$DateDurationStr .= sprintf(' +%1$s seconds',$this->props['expirey_sec']);


			if($DateDurationStr != '')
			   $your_date = strtotime($DateDurationStr,$your_date_start);  //$now - $your_date;
		    //  $PauseIntervalSecond=strtotime($PauseTotalTime,$your_date);
		    }


			// if($this->props['end_trigger_2']=='woo_product_end_date' && $this->props['timer_type'] == '2'){
	
			// 	$woo_pro_sales_end   = get_post_meta(get_the_ID(), '_sale_price_dates_to', true );
			// 	$date_time_stamp = date('Y-m-d', $woo_pro_sales_end);
			// 	$datetime1 = new DateTime($date_time);
			// 	$datetime2 = new DateTime($date_time_stamp);
			// 	$interval = $datetime1->diff($datetime2);
			// 	$DateDurationStr = "+".$interval->format('%d')." days "." +".$interval->format('%h')." hour "."+".$interval->format('%i')." minutes";
			// 	$your_date_start = strtotime($date_time);
			// 	$your_date = strtotime($DateDurationStr,$your_date_start); 
			
			// }
		
			if(($this->props['timer_type'] == 1 || $this->props['timer_type'] == '') && ($getUtilizedTime_COOKIE > 0 || $getUtilizedTime_COOKIE == '' || !isset($getUtilizedTime_COOKIE)))
			{

				if($getUtilizedTime_COOKIE && $getUtilizedTime_COOKIE != -1)
				{
					// $your_date = strtotime(date('Y-m-d H:i:s',$now + $getUtilizedTime_COOKIE));
					$your_date = strtotime(gmdate('Y-m-d H:i:s',$getUtilizedTime_COOKIE));
				}
				else
				{
					$your_date = strtotime($DateDurationStr,$now);
					$_COOKIE[$cookieName] = $your_date;
				}
			}

		
			$end_index=$this->props['auto_restart_interval']=='on' && ($this->props['pause_interval_days'] > 0|| $this->props['pause_interval_hours'] > 0 ||$this->props['pause_interval_minutes'] > 0)? (int)$this->props['auto_restart_recurrences_number'] *2 : $this->props['auto_restart_recurrences_number'];
			// print_r($end_index);
			$pause_interval_days=$this->props['pause_interval_days'];
			$pause_interval_hours =$this->props['pause_interval_hours'];
			$pause_interval_minutes = $this->props['pause_interval_minutes'];
			$AutoRestartInterval = $this->props['auto_restart_interval'];
		
		$recurence_type = $this->props['autorestart_recurrence'];

			$start_index=0;

			if( $your_date <= $now  && $this->props['timer_type'] == 2){
				
				$response_timer_type = $this->restartTimer($your_date,$now,$DateDurationStr,$start_index,$end_index,$recurence_type,$AutoRestartInterval,$PauseTotalTime);
				$your_date = $response_timer_type['UserDateTime'];	
			
				$checkPauseIntervalEnabled=$response_timer_type['checkPauseIntervalEnabled'];
			//	echo $checkPauseIntervalEnabled;
		  }

			$date_time = gmdate('Y-m-d H:m:s',$your_date);	

		}

		
		$video_background = $this->video_background();
		$parallax_image_background = $this->get_parallax_image_background();

		// Background layout data attributes.
		$data_background_layout = et_pb_background_layout_options()->get_background_layout_attrs( $this->props );

		// Module classnames
		if ( 'on' !== $use_background_color ) {
			$this->add_classname( 'et_pb_no_bg' );
		}


		if($this->props['end_trigger_3']=='current_event_end_date' && $this->props['timer_type'] == '3'){
			if(get_post_meta( get_the_ID(), '_EventAllDay', true ) == 'yes'){
			//	echo strtotime(tribe_get_end_date(get_the_ID(),null,'Y-m-d 23:59:59'));
	    	    $get_standard_finish_time= strtotime(tribe_get_start_date(get_the_ID(),null,'Y-m-d 00:00:00')) + 0 * 3600 ;
				$Currentdate_time_start = strtotime(tribe_get_start_date(get_the_ID(),null,'Y-m-d 00:00:00')) + 0 * 3600 ;
			}else{
				$get_standard_finish_time= strtotime(tribe_get_start_time(get_the_ID(),'Y-m-d H:i:s')) + 0 * 3600 ;
				$Currentdate_time_start = strtotime(tribe_get_start_time(get_the_ID(),'Y-m-d H:i:s')) + 0 * 3600 ;
			}
		
			$Currentdate_time_check =  strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;	
		
		//	echo $Currentdate_time_check,"<br>".$get_standard_finish_time;
			
			if($Currentdate_time_check >= $get_standard_finish_time){
				if(get_post_meta( get_the_ID(), '_EventAllDay', true ) == 'yes'){
					//	echo strtotime(tribe_get_end_date(get_the_ID(),null,'Y-m-d 23:59:59'));
						$get_standard_finish_time= strtotime(tribe_get_start_date(get_the_ID(),null,'Y-m-d 00:00:00')) + 0 * 3600 ;
						$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;	
					}else{
						$get_standard_finish_time= strtotime(tribe_get_start_time(get_the_ID(),'Y-m-d H:i:s')) + 0 * 3600 ;
						$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;	
					}
			}
	//		 echo $get_standard_finish_time."new add";
			// echo get_the_ID()."get the id";
			//print_r($this->props['end_time_1']);
		}

		if($this->props['end_trigger_3']=='date_time' && $this->props['timer_type'] == '3'){
	      $get_standard_finish_time= strtotime( $this->props['user_defined_end_time']) + 0 * 3600 ;
	    // echo 'imme';
		}

		if($this->props['end_trigger_3']=='woo_product_end_date' && $this->props['timer_type'] == '3'){
			$woo_pro_sales_end   = get_post_meta(get_the_ID(), '_sale_price_dates_to', true );
			$date_time = date('Y-m-d 00:00:00', $woo_pro_sales_end);
			$get_standard_finish_time = strtotime($date_time) + 0 * 3600;				
		}


		if($this->props['end_trigger_3']=='day_of_week' && $this->props['timer_type'] == '3'){	
		//	echo 'day of week end';
			$date = gmdate('Y-m-d', strtotime($get_date.$this->props['day_of_week_end_3']));
			$date = date_create($date);
			if(!empty($this->props['end_time_3'])){
			$timeArr = explode(':',$this->props['end_time_3']);
	    	date_time_set($date, $timeArr[0], $timeArr[1]);
			$time = date_format($date, 'Y-m-d H:i:s');
			$get_standard_finish_time = strtotime($time) + 0 * 3600;
			}else{
			$time = date_format($date, 'Y-m-d H:i:s');
			$get_standard_finish_time = strtotime($time) + 0 * 3600;
			}
		}
	
		if($this->props['end_trigger_3']=="last_day_month" && $this->props['timer_type'] == '3'){	
			//$get_standard_finish_time = strtotime($this->props['end_time_month_3']) + 0 * 3600;
			    $date = gmdate('y-m-t');
				$date = date_create($date);
				if(!empty($this->props['end_time_month_3'])){
				$timeArr = explode(':',$this->props['end_time_month_3']);
				date_time_set($date, $timeArr[0], $timeArr[1],$timeArr[2]);
				$timeArra= date_format($date, 'Y-m-d H:i:s');
				$get_standard_finish_time = strtotime($timeArra) + 0 * 3600;
				}else{
				$timeArra= date_format($date, 'Y-m-d H:i:s');
				$get_standard_finish_time = strtotime($timeArra) + 0 * 3600;
				}
		}


		if($this->props['end_trigger_3']=='custom_duration_end' && $this->props['timer_type'] == '3'){	
	 		
			$DateDurationStr_3 = '';
			if($this->props['expirey_days_3'] > 0)
			$DateDurationStr_3 .= sprintf('+%1$s days',$this->props['expirey_days_3']);
			if($this->props['expirey_hours_3'] > 0)
			$DateDurationStr_3 .= sprintf('+%1$s hour',$this->props['expirey_hours_3']);
			if($this->props['expirey_mins_3'] > 0)
			$DateDurationStr_3 .= sprintf('+%1$s minutes',$this->props['expirey_mins_3']);
			if($this->props['expirey_sec_3'] > 0)
			$DateDurationStr_3 .= sprintf(' +%1$s seconds',$this->props['expirey_sec_3']);

		
			if($this->props['start_trigger_3']=="date_time"){
			$date_time_start_3 = $this->props['start_date_time_3']; 
            $start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($date_time_start_3.$DateDurationStr_3));
			$get_standard_finish_time =  strtotime($start_custom_trigger);
			}


			if($this->props["start_trigger_3"]=="day_of_week"){
				$date = gmdate("Y-m-d H:i:s", strtotime($DateDurationStr_3.$this->props['day_of_week_start_3']));
				$date = date_create($date);
				if(!empty($this->props['date_time_3'])){
					$timeArr = explode(':',$this->props['date_time_3']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
				$timeArr = date_format($date, 'Y-m-d H:i:s');
				$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($timeArr.$DateDurationStr_3));
				$get_standard_finish_time =  strtotime($start_custom_trigger);
				}else{
				$timeArr = date_format($date, 'Y-m-d H:i:s');
				$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($timeArr.$DateDurationStr_3));
				$get_standard_finish_time =  strtotime($start_custom_trigger);
				}
				
			  // echo $DateDurationStr_3."finished time".$get_standard_finish_time;
				
			}

			if($this->props['start_trigger_3']=="first_day_month"){
				$date = gmdate('Y-m-01 H:i:s');
				$date = date_create($date);
				if(!empty($this->props['date_time_first_month_3'])){
					$timeArr = explode(':',$this->props['date_time_first_month_3']);
				date_time_set($date, $timeArr[0], $timeArr[1]);
				$timeArra= date_format($date, 'Y-m-d H:i:s');
				$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($timeArra.$DateDurationStr_3));
				$get_standard_finish_time =  strtotime($start_custom_trigger);
				}else{
				$timeArra = date_format($date, 'Y-m-d H:i:s');
				$start_custom_trigger = gmdate('Y-m-d H:i:s', strtotime($timeArra.$DateDurationStr_3));
				$get_standard_finish_time =  strtotime($start_custom_trigger);
				}

			    // $get_standard_finish_time =  strtotime($timeArra);
			}

		}              
	
	$get_current_time = (strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600);

	    $get_timezone = get_option( 'gmt_offset');
	    $show_days_display = $this->props['show_days']=='off'?"timer_display_none":"";
	    $show_hours_display             = $this->props['show_hours']=='off'?"timer_display_none":"";
		$show_minutes_display           = $this->props['show_minutes']=='off'?"timer_display_none":"";
		$show_seconds_display           = $this->props['show_seconds']=='off'?"timer_display_none":"";
		$show_separators_display_first  = $this->props['show_separator_first']=='off'?"timer_display_none":"";
		$show_separators_display_second = $this->props['show_separator_second']=='off'?"timer_display_none":"";
		$show_separators_display_third  = $this->props['show_separator_third']=='off'?"timer_display_none":"";
	    $message_button_classes         = "dtp_custom_message_button et_pb_button";
	    $message_button_icon            = $this->props['message_button_on_hover']=="off" && $this->props['message_button_icon_placement'] =="left"?"et_pb_button_no_hover":"";
	    $message_button_classes         = ($custom_message_button == 'on') ? $message_button_classes." et_pb_custom_button_icon " : $message_button_classes;
		$show_more_info                 = $show_more_info_button== "on" ?'<p class ="dtp_message_button et_pb_button_wrapper"><a class="'.$message_button_classes.' '.$message_button_icon.'" href="'.$message_button_url.'" rel="bookmark" target="'.$messsage_url_new_window.'" data-icon="'.$message_custom_icon.'" data-icon-tablet="'.$message_custom_icon_tablet.'" data-icon-phone="'.$message_custom_icon_phone.'">'.$message_button_text.'</a></p>':"";
		$show_message_info              = $this->props['display_message_show_hide'] == "on"?'<p class ="message_show">'.$this->props['show_message'].'</p>':"";
		$page_show_other_content        = $this->props['show_other_content']==="on"?'<script> jQuery(window).on(\'load\', function() { jQuery(\'.'.$this->props['class_show_hidden_section'].'\').show();})</script>':"";
		if($this->props['timer_type']==2){
			$hide_content_before_timer_end  = $checkPauseIntervalEnabled==0 &&  $this->props['show_other_content']==="on"?'jQuery(window).on(\'load\', function() { jQuery(\'.'.$this->props['class_show_hidden_section'].'\').hide();})':"";
	    }else{
		    $hide_content_before_timer_end  =   $this->props['show_other_content']==="on"?'jQuery(window).on(\'load\', function() { jQuery(\'.'.$this->props['class_show_hidden_section'].'\').hide();})':"";
	    }
		$page_hide_other_content        =   $this->props['hide_other_content']==="on"?'<script> jQuery(window).on(\'load\', function() { jQuery(\'.'.$this->props['use_custom_class_show_hide'].'\').hide();})</script>':"";
		$show_main_classes_start_dtp    = $this->props['display_message_show_hide'] == "on" || $this->props['show_more_info_button']=="on"?'<div class="et_pb_module ditp_countdown_timer et_pb_countdown_timer et_pb_countdown_timer_0 et_pb_bg_layout_dark"  ><div class="et_pb_countdown_timer_container clearfix" >':"";
		$show_main_classes_end_dtp      = $this->props['display_message_show_hide'] == "on" || $this->props['show_more_info_button']=="on"?'</div></div>':"";
		$end_date                       = gmdate( 'M d, Y H:i:s', $your_date );

		$background_layout_class_names  = et_pb_background_layout_options()->get_background_layout_class( $this->props );
		$this->add_classname( $background_layout_class_names );
		if($this->props['timer_type']==2){
		$pauseTimerEnableOff            = $checkPauseIntervalEnabled==1 && $this->props['hide_timer']==="on" && $this->props['auto_restart_interval'] =="on" ?"ditp_hidetimer":"";
		}else{
			$pauseTimerEnableOff        =  $this->props['hide_timer']==="on" && $this->props['auto_restart_interval'] =="on" ?"ditp_hidetimer":"";
		}

		if($this->props['timer_type']==2){
		$showDataOnTimerPause           = $checkPauseIntervalEnabled==1  && $this->props['auto_restart_interval'] == "on" ?$show_main_classes_start_dtp.$show_message_info.$show_more_info.$show_main_classes_end_dtp.$page_hide_other_content:"";
		}else{
			$showDataOnTimerPause           =  $this->props['auto_restart_interval'] == "on" ? $show_main_classes_start_dtp.$show_message_info.$show_more_info.$show_main_classes_end_dtp.$page_hide_other_content:"";
		}

		$hide_timer_during				= $this->props['hide_timer_during'] == "on" && ($this->props['timer_type']=='1'|| ($this->props['timer_type']=='2' && $checkPauseIntervalEnabled==1) || $this->props['timer_type']=='3')?" ditp_hidetimer ":"";

		$getCookieTmerDuration          = strtotime(''.$this->props['cookie_duration_days'].' day '.$this->props['cookie_duration_hours'].' hour '.$this->props['cookie_duration_mins'].' minute', 0);	
	   //	echo $your_date."your date"; 
       $getCookieTmerDuration  = gmdate('Y-m-d H:i:s', (time() + $getCookieTmerDuration + get_option( 'gmt_offset' ) * 3600));
	   $customRenderSlug = substr($this->getrenderClassNameSelector($this->module_classname( $render_slug ),$render_slug),1);


	   $show_time_remaining_label =	$this->props['show_time_remaining_label'] == "on" ? "Time Remaining Label" : "";
	   $show_time_remaining_label_text =	$this->props['show_time_remaining_label'] == "on" ? "Time Remaining:": "";
	   $show_time_remaining_text  =	$this->props['show_time_remaining_text'] == "on" ? "Time Remaining Text: " : "";
	   $hide_day_leading_zero=$this->props['hide_day_leading_zero']=="on" && $this->props['hide_all_leading_zero'] == "off"?"ditp_hide_day_zero":"";
       $hide_leading_zero = $this->props['hide_all_leading_zero'] == 'on'?'<script>
		jQuery(function($){
			
			var oldvals = $(".et_pb_countdown_timer .value");
			
			// Clone the vals and hide the original. 
			// - Wraps new vals element in a span to prevent Divi from updating them
			oldvals.each(function(){
				$(this).after($(this).clone()).next().wrap("<span></span>");
			}).attr( "style", "display: none !important;" );
			
			// Update the clones each second, removing the trailing zeros
			setInterval(function () {
				oldvals.each(function(){
					var oldval = $(this);
					var val = oldval.html();
					val = trim_leading_zeros(val);
					oldval.next().find(".value").html(val);
				});
			}, 250);
			
			function trim_leading_zeros(str) {
				if ((str.length > 1) && (str.substr(0,1) === "0")) {
					return trim_leading_zeros(str.slice(1));
				}
				return str;
			}
		
		});
		</script>':"";


	echo "<style>
		.divi-timer-pro-hide-after{
			display: block;
		}

		.divi-timer-pro-show-during{
			display: none;
		}

		.divi-timer-pro-hide-during{
			display: block;
		}
		.divi-timer-pro-show-before{
			display: block;
		}

		.divi-timer-pro-hide-before{
			display: none;
		}

		.divi-timer-pro-show-after {
			display: none;
		}
		</style>";




	// $show_content_before_trigger=($this->props['expirey_days'] > 0 || $this->props['expirey_hours'] > 0 || $this->props['expirey_mins'] > 0) && (($this->props['timer_type']==3) || ($this->props['timer_type']== 2 && $your_date > 0 ) || ($this->props['timer_type']==1)) && $this->props['show_content_before']=="on"?'<script> jQuery(window).on(\'load\', function() { jQuery(\'.divi-timer-pro-show-before\').hide();})</script>':"";

		if($this->props['show_separator_first'] == 'off'){
			echo "<style>
			.flipper-delimiter{
				display: none;
			}
	        </style>";
		}
	   

	if( ($Currentdate_time_Stamp >= $date_time_stamp &&  ($this->props['timer_type'] == '2' || $this->props['timer_type'] == '1'))  ||  ($Defined_time_Stamp < $Currentdate_time_Stamp  &&  $this->props['timer_type'] == '3') && $this->props['show_content_before']=="on" ){
			
		echo "<style>
				.divi-timer-pro-show-before{
					display: none;
				}
			</style>";
		}

		// Show content Before Start Trigger


	// Hide content Before Start Trigger

	if( ($Currentdate_time_Stamp >= $date_time_stamp &&  ($this->props['timer_type'] == '2' || $this->props['timer_type'] == '1'))  ||  ($Defined_time_Stamp < $Currentdate_time_Stamp  &&  $this->props['timer_type'] == '3') && $this->props['hide_content_before']=="on" ){

		echo "<style>
				.divi-timer-pro-hide-before{
					display: block;
				}
			</style>";

		}

 // Hide content During Timer 


if( ($your_date >= $Currentdate_time_Stamp &&  $this->props['timer_type'] == '1') || (($get_standard_finish_time >= $Currentdate_time_Stamp  && $Currentdate_time_Stamp >= $Defined_time_Stamp)  &&  $this->props['timer_type'] == '3' ) && $this->props['hide_content_during']=="on"){
	
	echo "<style>
			.divi-timer-pro-hide-during{
				display: none;
			}
		</style>";
}

 // Show  content During Timer 

 // echo $your_date."<br>".$Currentdate_time_Stamp;

if(  ($your_date >= $Currentdate_time_Stamp &&  $this->props['timer_type'] == '1') || (($get_standard_finish_time >= $Currentdate_time_Stamp  && $Currentdate_time_Stamp >= $Defined_time_Stamp)  &&  $this->props['timer_type'] == '3' ) && $this->props['show_content_during']=="on"){

	echo "<style>
			.divi-timer-pro-show-during{
				display: block;
			}
		</style>";
}

 // Hide Content After Start trigger

 if( ($your_date < $Currentdate_time_Stamp  && ($checkPauseIntervalEnabled == 1 || $this->props['timer_type'] == '2' || $this->props['timer_type'] == '1'))  ||  ($get_standard_finish_time < $Currentdate_time_Stamp  &&  $this->props['timer_type'] == '3') && $this->props['show_content_after']=="on" ){

//	echo "date run";
	echo "<style>
			.divi-timer-pro-hide-after{
				display: none;
			}
		</style>";
}
	
 // Show Content After Start trigger

//if(   ($your_date <= $Currentdate_time_Stamp &&  $this->props['timer_type'] == '1' ||  $this->props['timer_type'] == '2')  && (strtotime($finish_date) < $get_current_time ) && $this->props['show_content_after']=="on"){

	if( ($your_date < $Currentdate_time_Stamp  && ($checkPauseIntervalEnabled == 1 || $this->props['timer_type'] == '2' || $this->props['timer_type'] == '1'))  ||  ($get_standard_finish_time < $Currentdate_time_Stamp  &&  $this->props['timer_type'] == '3') && $this->props['show_content_after']=="on" ){

	echo "<style>
			.divi-timer-pro-show-after {
				display: block;
			}
		  </style>";

}

if($this->props['timer_type']== 3 && ($this->props['start_trigger_3']  ==  "next_upcoming_event_start_date" || $this->props['end_trigger_3']  ==  "next_upcoming_event_end_date")){
	$Currentdate_time_Stamp = strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ;
	if(!empty(tribe_events()->where( 'start_date', tribe_context()->get( 'now', 'now' ) )->first())){
	   $future_event = tribe_events()->where( 'start_date', tribe_context()->get( 'now', 'now' ) )->first();
		   $count_to_date  = $future_event->dates->start_utc->format( 'c' );
		   $Currentdate_time_Stamp = strtotime($future_event->dates->start_utc->format( 'c' ));
		   $Defined_time_Stamp =  strtotime($count_to_date);
		   $finish_date = $count_to_date;
		   $get_standard_finish_time  =  strtotime($count_to_date); // strtotime( gmdate('Y-m-d H:i:s')) + get_option( 'gmt_offset' ) * 3600 ; 

	}	
   }

 if($this->props['display_type']== "text_timer" && ($this->props['timer_type'] == 2 || $this->props['timer_type'] == 1)){

	$output = sprintf('
	<div%1$s class="%2$s et_pb_countdown_timer et_pb_countdown_timer_text et_pb_countdown_timer_0 '.$hide_timer_during.' "%3$s data-end-timestamp="'.strtotime( "{$end_date} {$gmt}" ).'"%16$s >
			%15$s
			%14$s
				<div class="ditp_countdown_counter_container_text"><span class="dipt_timer_remaining_label bar_time_remaining_label">'.$show_time_remaining_label_text.'</span>
				<div class="'.$show_days_display.' et_pb_with_border days section values" data-short="%13$s" data-full="%6$s"><p class=" '.$hide_day_leading_zero .' value "></p>
			    </div><span class= "'.$show_separators_display_first.' sep section">:</span><div class="'.$show_hours_display.' et_pb_with_border hours section values" data-short="%8$s" data-full="%7$s">
					<p class="value"></p>
				</div><div class="'.$show_separators_display_first.' sep section"><span class= "sep section">:</span> 
				</div><div class="'.$show_minutes_display.' et_pb_with_border minutes section values" data-short="%10$s" data-full="%9$s">
					<p class="value"></p>
				</div><div class="sep section">
				<span class= "'.$show_separators_display_first.' sep section">:</span> 
				</div><div class="'.$show_seconds_display.' et_pb_with_border seconds section values" data-short="%12$s" data-full="%11$s">
					<p class="value"></p>
				</div>
			</div>		
		</div>',
		$this->module_id(),
		$this->module_classname( $render_slug ),
		'',
		esc_attr( strtotime( "{$finish_date} {$gmt}" ) ),
		et_core_esc_previously( $title ), // #5
		esc_attr( $custom_days_label_text),
		esc_attr( $custom_hours_label_text),
		esc_attr( $custom_hours_label_text),
		esc_attr( $custom_minutes_label_text),
		esc_attr( $custom_minutes_label_text), // #10
		esc_attr( $custom_seconds_label_text),
		esc_attr( $custom_seconds_label_text),
		esc_attr__($custom_days_label_text),
		$video_background,
		$parallax_image_background, // #15
		et_core_esc_previously( $data_background_layout )
		
	);
}elseif($this->props['display_type']== "text_timer" && $this->props['timer_type'] == 3){
	
	$output = sprintf('
		<div%1$s class="%2$s et_pb_countdown_timer et_pb_countdown_timer_text et_pb_countdown_timer_0 '.$hide_timer_during.' "%3$s data-end-timestamp="'.strtotime( "{$finish_date} {$gmt}" ).'"%16$s >
			%15$s
			%14$s
			<div class="ditp_countdown_counter_container_text"><span class="dipt_timer_remaining_label bar_time_remaining_label">'.$show_time_remaining_label_text.'</span>
			<div class="'.$show_days_display.' et_pb_with_border days section values" data-short="%13$s" data-full="%6$s"><p class="'.$hide_day_leading_zero .' value "></p>
		   </div><span class= "'.$show_separators_display_first.' sep section">:</span><div class="'.$show_hours_display.' et_pb_with_border hours section values" data-short="%8$s" data-full="%7$s">
				<p class="value"></p>
			</div><div class="'.$show_separators_display_first.' sep section"><span class= "sep section">:</span> 
			</div><div class="'.$show_minutes_display.' et_pb_with_border minutes section values" data-short="%10$s" data-full="%9$s">
				<p class="value"></p>
			</div><div class="sep section">
			<span class= "'.$show_separators_display_first.' sep section">:</span> 
			</div><div class="'.$show_seconds_display.' et_pb_with_border seconds section values" data-short="%12$s" data-full="%11$s">
				<p class="value"></p>
			</div>
		</div>		
	</div>',
		$this->module_id(),
		$this->module_classname( $render_slug ),
		'',
		esc_attr( strtotime( "{$finish_date} {$gmt}" ) ),
		et_core_esc_previously( $title ), // #5
		esc_attr( $custom_days_label_text),
		esc_attr( $custom_hours_label_text),
		esc_attr( $custom_hours_label_text),
		esc_attr( $custom_minutes_label_text),
		esc_attr( $custom_minutes_label_text), // #10
		esc_attr( $custom_seconds_label_text),
		esc_attr( $custom_seconds_label_text),
		esc_attr__($custom_days_label_text),
		$video_background,
		$parallax_image_background, // #15
		et_core_esc_previously( $data_background_layout )
		
	);
}else if($this->props['display_type'] == "bar_timer"){

	if($get_standard_finish_time > 0 && $this->props['timer_type'] == 3){

	$timespan = $get_standard_finish_time - $Defined_time_Stamp; // 57888000
	$current = $Currentdate_time_Stamp - $Defined_time_Stamp; // 42174783

	$progress = $current / $timespan; // 0.72855830223881

	$remaining_val = (1 - $progress) * 100;

	$remaining = round($remaining_val, 0);
	}else if($this->props['timer_type'] == 2 && strtotime($end_date) > 0){


		$timespan = $your_date - $date_time_stamp; // 57888000
		$current = $Currentdate_time_Stamp - $date_time_stamp; // 42174783

		$progress = $current / $timespan; // 0.72855830223881

		$remaining_val = (1 - $progress) * 100;

		$remaining = round($remaining_val, 0);
		
	}else if($your_date > 0 && $this->props['timer_type'] == 1){
	// 	echo "run ...1224442";
	// $timespan = $your_date - $Defined_time_Stamp; // 57888000
	// $current = $Currentdate_time_Stamp - $Defined_time_Stamp; // 42174783

	// $progress = $current / $timespan; // 0.72855830223881

	// $remaining_val = (1 - $progress) * 100;

	// $remaining = round($remaining_val, 0);
	$remaining = round(0,0);
	}else{
		$remaining = round(0,0);
	}
	

	$output = sprintf(
		'<ul class="et_pb_module et_pb_counters et_pb_countdown_timer_bar et-waypoint et_pb_bg_layout_light et-animated"><li class="et_pb_counter et_pb_countdown_bar">
			<span class="et_pb_counter_title  bar_time_remaining_label"%9$s>%1$s</span>
			<span class="et_pb_counter_container barCountdowncontainer"%4$s%10$s>
				%8$s
				%7$s
				<span class="et_pb_counter_amount barCountdownCompleted" style="%5$s" data-width="%3$s"><span class="et_pb_counter_amount_number"><span class="et_pb_counter_amount_number_inner bar_time_remaining_text"%11$s>'.$show_time_remaining_text.' %2$s</span></span></span>
				<span class="et_pb_counter_amount overlay" style="%5$s" data-width="%3$s"><span class="et_pb_counter_amount_number"><span class="et_pb_counter_amount_number_inner bar_time_remaining_text"%11$s>'.$show_time_remaining_text.' %2$s</span></span></span>
			</span>
		</li>
		</ul>',
		$show_time_remaining_label, // #1
		$remaining."%",
		$remaining."%",
		'',
		'', // #5
		$this->module_classname( $render_slug ),
		$video_background,
		$parallax_image_background,
		'',
		'', // #10
		''
	);

}elseif(
				$Currentdate_time_Stamp >= $date_time_stamp &&
				// ($this->props['expirey_days'] > 0 ||
				//   $this->props['expirey_hours'] > 0 ||
				//   $this->props['expirey_mins'] > 0) &&
				  ($your_date >= $Currentdate_time_Stamp || $this->props['timer_type'] == 2) && $your_date >= $Currentdate_time_Stamp && ($this->props['timer_type'] != 3 && ($this->props['display_type']== "countdown_timer" || $this->props['display_type']== "flip_timer" || $this->props['display_type']== "circle_timer"))
			  )
			{
				
	 if(($checkPauseIntervalEnabled == 0 || $checkPauseIntervalEnabled == "") && $this->props['timer_type'] == 2){
	 
	echo "<style>
			.divi-timer-pro-show-during{
				display: block;
			}
			.divi-timer-pro-hide-during{
				display: none;
			}
		</style>";
	
	 }


	 if($checkPauseIntervalEnabled == 1){
	 
		echo "<style>
			.divi-timer-pro-hide-during{
				display: block;
			}
			.divi-timer-pro-show-after {
				display: block;
			}
			
		</style>";
	 }
	

   if(($checkPauseIntervalEnabled == 1 || $checkPauseIntervalEnabled == 0 || $checkPauseIntervalEnabled == "") && $this->props['timer_type'] != 3 ){

	if($this->props['display_type']== "circle_timer"){

		$custom_seconds_label_text = $this->props['show_seconds']=='on'? $custom_seconds_label_text:"";
		$custom_minutes_label_text = $this->props['show_minutes']=='on'? $custom_minutes_label_text:"";
		$custom_days_label_text = $this->props['show_days']=='on'? $custom_days_label_text:"";
		$custom_hours_label_text = $this->props['show_hours']=='on'? $custom_hours_label_text:"";

		$output = sprintf('<div%1$s class="%2$s et_pb_countdown_timer  '.$hide_timer_during.'>	
		<div class="et_pb_countdown_timer_container clearfix" >
		<div class="ditp_countdown_title_text_container">
		%3$s
		</div>
		<div class="ditp_countdown_counter_container">
		<div class="DiviProDateCountdown"
		data-date="'.date('Y-m-d H:i:s', strtotime($end_date)).'" 
		day-label="'.$custom_days_label_text.'"
		hour-label="'.$custom_hours_label_text.'"
		minute-label="'.$custom_minutes_label_text.'"
		second-label="'.$custom_seconds_label_text.'"	
		data-width="'.$this->props['circle_width'].'"
		trail-width="'.$this->props['circle_thickness_progress'].'"
		circle-color="'.$this->props['circle_color'].'"
		circle-progress-color="'.$this->props['circle_progress_color'].'"
	    data-days="'.$singular_custom_days_label_text.'"
		data-hours="'.$singular_custom_hours_label_text.'"
		data-minutes="'.$singular_custom_minutes_label_text.'"
		data-seconds="'.$singular_custom_seconds_label_text.'"
		style="width: 100%; height: 125px;" ></div></div>
		</div>
		</div>',
		$this->module_id(),
		$this->module_classname( $render_slug ),
		et_core_esc_previously( $title )
	);

	//wp_enqueue_script( 'slim-min', 'https://code.jquery.com/jquery-3.4.1.slim.min.js');
	wp_enqueue_script( 'Circle-js', plugins_url().'/divi-timer-pro/includes/modules/DiviTimerPro/CircleCountdown/TimeCircles.js');

	}else if($this->props['display_type']== "flip_timer"){

	$show_seconds = $this->props['show_seconds']=='on'?"ss":"";
	$show_minutes = $this->props['show_minutes']=='on'?"ii":"";
	$show_days = $this->props['show_days']=='on'?"ddd":"";
	$show_hours = $this->props['show_hours']=='on'?"HH":"";

	$custom_seconds_label_text = $this->props['show_seconds']=='on'? $custom_seconds_label_text:"";
	$custom_minutes_label_text = $this->props['show_minutes']=='on'? $custom_minutes_label_text:"";
	$custom_days_label_text = $this->props['show_days']=='on'? $custom_days_label_text:"";
    $custom_hours_label_text = $this->props['show_hours']=='on'? $custom_hours_label_text:"";

		$output = sprintf('
		<div%1$s class="%2$s et_pb_countdown_timer  '.$hide_timer_during.'>	
				<div class="et_pb_countdown_timer_container clearfix" >
				<div class="ditp_countdown_title_text_container">
				%3$s
				</div>
				<div class="ditp_countdown_counter_container">
		<div class="flipper"
			data-reverse="true"
			data-hideDayszero="'.$this->props['hide_day_leading_zero'].'"
			data-datetime="'.date('Y-m-d H:i:s', strtotime($end_date)).'"
			data-template="'.$show_days.'|'.$show_hours.'|'.$show_minutes.'|'.$show_seconds.'"
			data-labels="'.$custom_days_label_text.'|'.$custom_hours_label_text.'|'.$custom_minutes_label_text.'|'.$custom_seconds_label_text.'"	
			data-days="'.$singular_custom_days_label_text.'"
			data-hours="'.$singular_custom_hours_label_text.'"
			data-minutes="'.$singular_custom_minutes_label_text.'"
			data-seconds="'.$singular_custom_seconds_label_text.'"
			id="myFlipper">
		</div>	
		</div>
		</div>
		</div>
		<script>	
				'.$hide_content_before_timer_end .';
			   var CurrentCookieTime = new Date(); 
			   CurrentCookieTime.setMinutes( CurrentCookieTime.getMinutes() + '.$this->props['cookie_duration_mins'].');
			   CurrentCookieTime.setHours( CurrentCookieTime.getHours() + '.$this->props['cookie_duration_hours'].' );
			   CurrentCookieTime.setDate(CurrentCookieTime.getDate() + '.$this->props['cookie_duration_days'].');
			   var days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
			   var month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"]; 
			   function minTwoDigits(n) {
				return (n < 10 ? "0" : "") + n;
			  } 
	
			  var cookieExpiry=Math.round((parseFloat(CurrentCookieTime.getTime()/1000)),0);
			 
			   var domainName = window.location.hostname;
			   console.log(domainName);
			
			  if (localStorage.getItem("'.$cookieEndDuration.'") === null){
				localStorage.setItem("'.$cookieEndDuration.'",'.$your_date.');
				if(('.$this->props['cookie_duration'].' == 2 && '.$this->props['cookie_duration_days'].' > 0 || '.$this->props['cookie_duration_hours'].' > 0 || '.$this->props['cookie_duration_mins'].' > 0)){
				localStorage.setItem("'.$cookieExpiryTime.'",cookieExpiry);
				localStorage.removeItem("getCookieTmerDurationCurrent_'.$customRenderSlug.'");
				}
			}
			
			   var CookieCurrentDateFormat = days[CurrentCookieTime.getDay()]+", "+minTwoDigits(CurrentCookieTime.getDate())+" "+minTwoDigits(month[CurrentCookieTime.getMonth()])+" "+minTwoDigits(CurrentCookieTime.getFullYear())+" "+minTwoDigits(CurrentCookieTime.getHours())+":"+minTwoDigits(CurrentCookieTime.getMinutes())+":"+minTwoDigits(CurrentCookieTime.getSeconds())+" GMT";	  
			   var CookieExpirtationDuration='.$this->props['cookie_duration'].' == 2 && '.$this->props['cookie_duration_days'].' > 0 || '.$this->props['cookie_duration_hours'].' > 0 || '.$this->props['cookie_duration_mins'].' > 0  ? CookieCurrentDateFormat:"Thu, 18 Dec 2999 12:00:00 UTC";
			   if (localStorage.getItem("'.$cookieStartDuration.'") === null || localStorage.getItem("'.$cookieEndDuration.'") !='.$your_date.' ) {
				localStorage.setItem("'.$cookieStartDuration.'",CookieExpirtationDuration);
			    };
				var Timer = setInterval(function () {
					
					var CurrentTime = new Date();
					let CurrentTimeStamp = Math.round((parseFloat(CurrentTime.getTime()/1000) + parseFloat('.$gmt_offset.') * 3600),0); 		
					localStorage.setItem("'.$cookieEndDuration.'",'.$your_date.');
					localStorage.setItem("'.$cookieName.'",'.$your_date.');
					
				
					document.cookie = "'.$cookieName.'="+localStorage.getItem("'.$cookieName.'")+";  expires=Thu, 18 Dec 2999 12:00:00 UTC";
					if("'.$your_date.'" < CurrentTimeStamp  )
					{
				
						document.cookie = "'.$cookieName.'=-1; expires=Thu, 18 Dec 2999 12:00:00 UTC";
						localStorage.removeItem("'.$cookieName.'");
						localStorage.removeItem("'.$cookieStartDuration.'");
						localStorage.removeItem("'.$cookieEndDuration.'");
						localStorage.setItem("getCookieTmerDurationCurrent_'.$customRenderSlug.'","'.strtotime($getCookieTmerDuration).'");
						clearInterval(Timer);	
						window.location.replace("'.($this->props['website_redirect'] ? $this->props['website_redirect'] : $this->props['WP_CURRENT_URL']).'");	
					}
				},1000);
		</script>',
		$this->module_id(),
		$this->module_classname( $render_slug ),
		et_core_esc_previously( $title )
	);

	wp_enqueue_script( 'slim-min', 'https://code.jquery.com/jquery-3.4.1.slim.min.js');
	wp_enqueue_script( 'flip-js', plugins_url().'/divi-timer-pro/includes/modules/DiviTimerPro/flip.js', array('slim-min'),'1.0.0', true);
}else{
	

		$output = sprintf(		
				''.$showDataOnTimerPause.$hide_leading_zero.'
				<div%1$s class="%2$s et_pb_countdown_timer et_pb_countdown_timer_0 '.$hide_timer_during.' "%3$s data-end-timestamp="'.strtotime( "{$end_date} {$gmt}" ).'"%16$s >
					%15$s
					%14$s
					<div class="et_pb_countdown_timer_container clearfix" >
					<div class="ditp_countdown_title_text_container">
						%5$s
					</div>
					<div class="ditp_countdown_counter_container">
						<div class="'.$show_days_display.' et_pb_with_border days section values" data-short="%13$s" data-full="%6$s">
						<p class="ditp_days_value '.$hide_day_leading_zero .' value "></p>
		 	           <p class="ditp_days_label et_pb_with_border label">%6$s</p></div><span class= "'.$show_separators_display_first.' sep section">:</span><div class="'.$show_hours_display.' et_pb_with_border hours section values" data-short="%8$s" data-full="%7$s">
						<p class="ditp_hours_value value"></p>
						<p class="ditp_hours_label et_pb_with_border label">%7$s</p>
						</div><div class="'.$show_separators_display_first.' sep section">
						<span class= "sep section">:</span> 
						</div><div class="'.$show_minutes_display.' et_pb_with_border minutes section values" data-short="%10$s" data-full="%9$s">
						<p class="ditp_minutes_value value"></p>
						<p class="ditp_minutes_label et_pb_with_border label">%9$s</p>
						</div><div class="sep section">
						<span class= "'.$show_separators_display_first.' sep section">:</span> 
						</div><div class="'.$show_seconds_display.' et_pb_with_border seconds section values" data-short="%12$s" data-full="%11$s">
						<p class="ditp_seconds_value value"></p>
						<p class="ditp_seconds_label et_pb_with_border label">%11$s</p>
						</div>
						</div>
					</div>
				</div>
				<script>	
				'.$hide_content_before_timer_end .';

			   var CurrentCookieTime = new Date(); 
			   CurrentCookieTime.setMinutes( CurrentCookieTime.getMinutes() + '.$this->props['cookie_duration_mins'].');
			   CurrentCookieTime.setHours( CurrentCookieTime.getHours() + '.$this->props['cookie_duration_hours'].' );
			   CurrentCookieTime.setDate(CurrentCookieTime.getDate() + '.$this->props['cookie_duration_days'].');
			   var days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
			   var month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug","Sep","Oct","Nov","Dec"]; 
			   function minTwoDigits(n) {
				return (n < 10 ? "0" : "") + n;
			  } 
	
			  var cookieExpiry=Math.round((parseFloat(CurrentCookieTime.getTime()/1000)),0);
			 
			   var domainName = window.location.hostname;
			
			  if (localStorage.getItem("'.$cookieEndDuration.'") === null){
				localStorage.setItem("'.$cookieEndDuration.'",'.$your_date.');
				if(('.$this->props['cookie_duration'].' == 2 && '.$this->props['cookie_duration_days'].' > 0 || '.$this->props['cookie_duration_hours'].' > 0 || '.$this->props['cookie_duration_mins'].' > 0)){
				localStorage.setItem("'.$cookieExpiryTime.'",cookieExpiry);
				localStorage.removeItem("getCookieTmerDurationCurrent_'.$customRenderSlug.'");
				}
			}
			
			   var CookieCurrentDateFormat = days[CurrentCookieTime.getDay()]+", "+minTwoDigits(CurrentCookieTime.getDate())+" "+minTwoDigits(month[CurrentCookieTime.getMonth()])+" "+minTwoDigits(CurrentCookieTime.getFullYear())+" "+minTwoDigits(CurrentCookieTime.getHours())+":"+minTwoDigits(CurrentCookieTime.getMinutes())+":"+minTwoDigits(CurrentCookieTime.getSeconds())+" GMT";	  
			   var CookieExpirtationDuration='.$this->props['cookie_duration'].' == 2 && '.$this->props['cookie_duration_days'].' > 0 || '.$this->props['cookie_duration_hours'].' > 0 || '.$this->props['cookie_duration_mins'].' > 0  ? CookieCurrentDateFormat:"Thu, 18 Dec 2999 12:00:00 UTC";
			   if (localStorage.getItem("'.$cookieStartDuration.'") === null || localStorage.getItem("'.$cookieEndDuration.'") !='.$your_date.' ) {
				localStorage.setItem("'.$cookieStartDuration.'",CookieExpirtationDuration);
			    };
				var Timer = setInterval(function () {

					var days_value = jQuery(".ditp_days_value").html();
				var hours_value = jQuery(".ditp_hours_value").html();
				var minutes_value = jQuery(".ditp_minutes_value").html();
				var seconds_value = jQuery(".ditp_seconds_value").html();
				
				if(days_value < 2){
					jQuery(".ditp_days_label").html("'.$singular_custom_days_label_text.'");
				}
				if(hours_value < 2){
					jQuery(".ditp_hours_label").html("'.$singular_custom_hours_label_text.'");
				}
				if(minutes_value < 2){
					jQuery(".ditp_minutes_label").html("'.$singular_custom_minutes_label_text.'");
				}
				if(seconds_value < 2){
					jQuery(".ditp_seconds_label").html("'.$singular_custom_seconds_label_text.'");
				}else{
					jQuery(".ditp_seconds_label").html("'.$custom_seconds_label_text.'");
				}
					
					var CurrentTime = new Date();
					let CurrentTimeStamp = Math.round((parseFloat(CurrentTime.getTime()/1000) + parseFloat('.$gmt_offset.') * 3600),0); 		
					localStorage.setItem("'.$cookieEndDuration.'",'.$your_date.');
					localStorage.setItem("'.$cookieName.'",'.$your_date.');
					
				
					document.cookie = "'.$cookieName.'="+localStorage.getItem("'.$cookieName.'")+";  expires=Thu, 18 Dec 2999 12:00:00 UTC";
					if("'.$your_date.'" < CurrentTimeStamp  )
					{
				
						document.cookie = "'.$cookieName.'=-1; expires=Thu, 18 Dec 2999 12:00:00 UTC";
						localStorage.removeItem("'.$cookieName.'");
						localStorage.removeItem("'.$cookieStartDuration.'");
						localStorage.removeItem("'.$cookieEndDuration.'");
						localStorage.setItem("getCookieTmerDurationCurrent_'.$customRenderSlug.'","'.strtotime($getCookieTmerDuration).'");
						clearInterval(Timer);	
						window.location.replace("'.($this->props['website_redirect'] ? $this->props['website_redirect'] : $this->props['WP_CURRENT_URL']).'");	
					}
				},1000);
				</script>
				',
				$this->module_id(),
				$this->module_classname( $render_slug ),
				'',
				esc_attr( strtotime( "{$end_date} {$gmt}" ) ),
				et_core_esc_previously( $title ), // #5
				esc_attr( $custom_days_label_text),
				esc_attr( $custom_hours_label_text),
				esc_attr( $custom_hours_label_text),
				esc_attr( $custom_minutes_label_text),
				esc_attr( $custom_minutes_label_text), // #10
				esc_attr( $custom_seconds_label_text),
				esc_attr( $custom_seconds_label_text),
				esc_attr__($custom_days_label_text),
				$video_background,
				$parallax_image_background, // #15
				et_core_esc_previously( $data_background_layout )
				
			);
		}
		}else{

			$output = sprintf(
				''.$show_main_classes_start_dtp.'
					'.$show_message_info.'
				'.$show_more_info.'
				'.$show_main_classes_end_dtp.'
				'.$page_show_other_content.'
					'.$page_hide_other_content.'');
		}

		}
		elseif($this->props['timer_type']== 3 && ($get_standard_finish_time >= $Currentdate_time_Stamp  && $Currentdate_time_Stamp >= $Defined_time_Stamp) && ($this->props['display_type']== "countdown_timer" || $this->props['display_type']== "flip_timer" || $this->props['display_type']== "circle_timer" )){
		

			if($this->props['display_type']== "circle_timer"){

				$custom_seconds_label_text = $this->props['show_seconds']=='on'? $custom_seconds_label_text:"";
				$custom_minutes_label_text = $this->props['show_minutes']=='on'? $custom_minutes_label_text:"";
				$custom_days_label_text = $this->props['show_days']=='on'? $custom_days_label_text:"";
				$custom_hours_label_text = $this->props['show_hours']=='on'? $custom_hours_label_text:"";

				$output = sprintf('<div%1$s class="%2$s et_pb_countdown_timer">	
				<div class="et_pb_countdown_timer_container clearfix" >
				<div class="ditp_countdown_title_text_container">
				%3$s
				</div>
				<div class="ditp_countdown_counter_container">
				<div class="DiviProDateCountdown" data-date="'.date('Y-m-d H:i:s', $get_standard_finish_time).'"
				day-label="'.$custom_days_label_text.'"
				hour-label="'.$custom_hours_label_text.'"
				minute-label="'.$custom_minutes_label_text.'"
				second-label="'.$custom_seconds_label_text.'"	
				data-width="'.$this->props['circle_width'].'"
				trail-width="'.$this->props['circle_thickness_progress'].'"
				circle-color="'.$this->props['circle_color'].'"
				circle-progress-color="'.$this->props['circle_progress_color'].'"
				data-days="'.$singular_custom_days_label_text.'"
				data-hours="'.$singular_custom_hours_label_text.'"
				data-minutes="'.$singular_custom_minutes_label_text.'"
				data-seconds="'.$singular_custom_seconds_label_text.'"
				style="width: 100%; height: 125px;" ></div></div>
				</div>
				</div>',
				$this->module_id(),
				$this->module_classname( $render_slug ),
				et_core_esc_previously( $title )
			);
		
			//wp_enqueue_script( 'slim-min', 'https://code.jquery.com/jquery-3.4.1.slim.min.js');
			wp_enqueue_script( 'Circle-js', plugins_url().'/divi-timer-pro/includes/modules/DiviTimerPro/CircleCountdown/TimeCircles.js');
		
			}else if($this->props['display_type']== "flip_timer"){
				$show_seconds = $this->props['show_seconds']=='on'?"ss":"";
				$show_minutes = $this->props['show_minutes']=='on'?"ii":"";
				$show_days = $this->props['show_days']=='on'?"ddd":"";
				$show_hours = $this->props['show_hours']=='on'?"HH":"";

				$custom_seconds_label_text = $this->props['show_seconds']=='on'? $custom_seconds_label_text:"";
				$custom_minutes_label_text = $this->props['show_minutes']=='on'? $custom_minutes_label_text:"";
				$custom_days_label_text = $this->props['show_days']=='on'? $custom_days_label_text:"";
				$custom_hours_label_text = $this->props['show_hours']=='on'? $custom_hours_label_text:"";

				
      // echo $this->props['show_seconds']."secondsss";		
		$output = sprintf('
				<div%1$s class="%2$s et_pb_countdown_timer  '.$hide_timer_during.'>	
						<div class="et_pb_countdown_timer_container clearfix" >
						<div class="ditp_countdown_title_text_container">
						%3$s
						</div>
						<div class="ditp_countdown_counter_container">
				<div class="flipper"
					data-reverse="true"
					data-hideAllzero="'.$this->props['hide_all_leading_zero'].'"
					data-hideDayszero="'.$this->props['hide_day_leading_zero'].'"
					data-datetime="'.date('Y-m-d H:i:s', $get_standard_finish_time).'"
					data-template="'.$show_days.'|'.$show_hours.'|'.$show_minutes.'|'.$show_seconds.'"
					data-labels="'.$custom_days_label_text.'|'.$custom_hours_label_text.'|'.$custom_minutes_label_text.'|'.$custom_seconds_label_text.'"	
					data-days="'.$singular_custom_days_label_text.'"
					data-hours="'.$singular_custom_hours_label_text.'"
					data-minutes="'.$singular_custom_minutes_label_text.'"
					data-seconds="'.$singular_custom_seconds_label_text.'"
					id="myFlipper">
				</div>	
				</div>
				</div>
				</div>',
				$this->module_id(),
				$this->module_classname( $render_slug ),
				et_core_esc_previously( $title )
			);
		
			wp_enqueue_script( 'slim-min', 'https://code.jquery.com/jquery-3.4.1.slim.min.js');
			wp_enqueue_script( 'flip-js', plugins_url().'/divi-timer-pro/includes/modules/DiviTimerPro/flip.js', array('slim-min'),'1.0.0', true);

		}else{
			$output = sprintf('
			<div%1$s class="%2$s et_pb_countdown_timer et_pb_countdown_timer_0 '.$hide_timer_during.' "%3$s data-end-timestamp="'.strtotime( "{$finish_date} {$gmt}" ).'"%16$s >
				%15$s
				%14$s
				<div class="et_pb_countdown_timer_container clearfix" >
				<div class="ditp_countdown_title_text_container">
					%5$s
					</div>
					<div class="ditp_countdown_counter_container">
					<div class="'.$show_days_display.' et_pb_with_border days section values" data-short="%13$s" data-full="%6$s">
					<p class=" ditp_days_value '.$hide_day_leading_zero .' value "></p>
					<p class=" ditp_days_label et_pb_with_border label">%6$s</p>
				   </div><span class= "'.$show_separators_display_first.' sep section">:</span><div class="'.$show_hours_display.' et_pb_with_border hours section values" data-short="%8$s" data-full="%7$s">
						<p class="ditp_hours_value value"></p>
						<p class="ditp_hours_label et_pb_with_border label">%7$s</p>
					</div><div class="'.$show_separators_display_first.' sep section">
					<span class= "sep section">:</span> 
					</div><div class="'.$show_minutes_display.' et_pb_with_border minutes section values" data-short="%10$s" data-full="%9$s">
						<p class="ditp_minutes_value value"></p>
						<p class="ditp_minutes_label et_pb_with_border label">%9$s</p>
					</div><div class="sep section">
					<span class= "'.$show_separators_display_first.' sep section">:</span> 
					</div><div class="'.$show_seconds_display.' et_pb_with_border seconds section values" data-short="%12$s" data-full="%11$s">
						<p class="ditp_seconds_value value"></p>
						<p class="ditp_seconds_label et_pb_with_border label">%11$s</p>
					</div>
				</div>
				</div>
			</div>
			<script>
			'.$hide_content_before_timer_end .'
			var Timer = setInterval(function () {
			var days_value = jQuery(".ditp_days_value").html();
			var hours_value = jQuery(".ditp_hours_value").html();
			var minutes_value = jQuery(".ditp_minutes_value").html();
			var seconds_value = jQuery(".ditp_seconds_value").html();
			
			if(days_value < 2){
				jQuery(".ditp_days_label").html("'.$singular_custom_days_label_text.'");
			}
			if(hours_value < 2){
				jQuery(".ditp_hours_label").html("'.$singular_custom_hours_label_text.'");
			}
			if(minutes_value < 2){
				jQuery(".ditp_minutes_label").html("'.$singular_custom_minutes_label_text.'");
			}
			if(seconds_value < 2){
				jQuery(".ditp_seconds_label").html("'.$singular_custom_seconds_label_text.'");
			}else{
				jQuery(".ditp_seconds_label").html("'.$custom_seconds_label_text.'");
			}

				var CurrentTime = new Date();
				var CurrentTimeStamp = Math.round((parseFloat(CurrentTime.getTime()/1000) + parseFloat('.$gmt_offset.') * 3600),0); 
				
				 if( "'.$this->props['timer_type'].'" == 3 && "'.$this->props['start_trigger_3'].'"  ==  "next_upcoming_event_start_date" && "'.$get_standard_finish_time.'" > "'.$Currentdate_time_Stamp.'")
				 {
					 CurrentTimeStamp = "'.$Currentdate_time_Stamp.'";
				
				 }	
				
				if("'.$get_standard_finish_time.'" < CurrentTimeStamp)
				{
					console.log(CurrentTimeStamp);
					clearInterval(Timer);			
					window.location.replace("'.($this->props['website_redirect'] ? $this->props['website_redirect'] : $this->props['WP_CURRENT_URL']).'");
				
				}
			},1000); 
			</script>
			',
			$this->module_id(),
			$this->module_classname( $render_slug ),
			'',
			esc_attr( strtotime( "{$finish_date} {$gmt}" ) ),
			et_core_esc_previously( $title ), // #5
			esc_attr( $custom_days_label_text),
			esc_attr( $custom_hours_label_text),
			esc_attr( $custom_hours_label_text),
			esc_attr( $custom_minutes_label_text),
			esc_attr( $custom_minutes_label_text), // #10
			esc_attr( $custom_seconds_label_text),
			esc_attr( $custom_seconds_label_text),
			esc_attr__($custom_days_label_text),
			$video_background,
			$parallax_image_background, // #15
			et_core_esc_previously( $data_background_layout )
			
		);	
		
	}

		}
		elseif($this->props['timer_type']==3 && $get_standard_finish_time <= $get_current_time){
			$output = '';
			if($this->props['show_redirection_url']=="on"){
			//if($this->props['evergreen_type'] == 1)
			{

		if($this->props['redirect_reference'] == "redirect_once"){
		
				?>

				<script>		

 if( window.localStorage ){

  if( !localStorage.getItem('dtp_firstLoad'))
    {
	localStorage['dtp_firstLoad'] = true;
	window.location.replace("<?php echo (esc_js($this->props['website_redirect']) ? esc_js($this->props['website_redirect']) : esc_js($this->props['WP_CURRENT_URL'])); ?>");
	}
    }  
    else 
	  localStorage.removeItem('dtp_firstLoad');
	  <?php
				$output = sprintf(
					''.$show_main_classes_start_dtp.'
						'.$show_message_info.'
					'.$show_more_info.'
					'.$show_main_classes_end_dtp.'
					'.$page_show_other_content.'
					'.$page_hide_other_content.'');
			?>

  }
						
					</script>
				<?php
			}
		}
		}
			else{
				$output = sprintf(
					''.$show_main_classes_start_dtp.'
						'.$show_message_info.'
					'.$show_more_info.'
					'.$show_main_classes_end_dtp.'
					'.$page_show_other_content.'
						'.$page_hide_other_content.'');
			}
		
		}
		else
		{
			
			$output = '';
			if($this->props['show_redirection_url']=="on" && $getUtilizedTime_COOKIE != -1){
				//if($this->props['evergreen_type'] == 1)
				{

			if($this->props['redirect_reference'] == "redirect_once"){
					?>
					
						<script>
								
	 if( window.localStorage )
	  {
		if( !localStorage.getItem('dtp_firstLoad') )
		{
		  localStorage['dtp_firstLoad'] = true;
     document.cookie = "<?php echo esc_js($cookieName); ?>=-1; expires=Thu, 18 Dec 2999 12:00:00 UTC";	
		   window.location.replace("<?php echo (esc_js($this->props['website_redirect']) ? esc_js($this->props['website_redirect']) : esc_js($this->props['WP_CURRENT_URL'])); ?>");
		}  
		else
		  localStorage.removeItem('dtp_firstLoad');

		  <?php 	$output = sprintf(
					''.$show_main_classes_start_dtp.'
						'.$show_message_info.'
					'.$show_more_info.'
					'.$show_main_classes_end_dtp.'
					'.$page_show_other_content.'
						'.$page_hide_other_content.'');

				?>
	  }
							
						</script>
					<?php
				}}}
				else{

					if(($this->props['redirect_reference'] == "redirect_always"  && $this->props['show_redirection_url']=="on") && $this->props['timer_type'] == "1"){
						//	if($getUtilizedTime_COOKIE >  $get_current_time){	
							?>
							<script>

                            var cookieDurationForever ='<?php echo esc_js($this->props['cookie_duration']); ?>';
							var CustomSulg = '<?php echo esc_js($customRenderSlug); ?>';
							var CurrentTime = new Date();
							var getCurrent = Math.round((parseFloat(CurrentTime.getTime()/1000) + parseFloat(<?php echo esc_js(get_option( 'gmt_offset' )); ?>) * 3600),0); 
							if(localStorage.getItem('getCookieTmerDurationCurrent_'+CustomSulg+'') > getCurrent){	
								window.location.replace("<?php echo (esc_js($this->props['website_redirect']) ? esc_js($this->props['website_redirect']) : esc_js($this->props['WP_CURRENT_URL'])); ?>");
							}else if(localStorage.getItem('getCookieTmerDurationCurrent_'+CustomSulg+'') < getCurrent && cookieDurationForever == "1"){
								window.location.replace("<?php echo (esc_js($this->props['website_redirect']) ? esc_js($this->props['website_redirect']) : esc_js($this->props['WP_CURRENT_URL'])); ?>");
							}
							</script>
							<?php
										$output = sprintf(
									''.$show_main_classes_start_dtp.'
										'.$show_message_info.'
									'.$show_more_info.'
									'.$show_main_classes_end_dtp.'
									'.$page_show_other_content.'
										'.$page_hide_other_content.'
										<script>	
									
										var Timer = setInterval(function () {
									var cookieCurrentTime=new Date();
										var cookieCurrentTimeStr = Math.round((parseFloat(cookieCurrentTime.getTime()/1000)),0);
									if(cookieCurrentTimeStr >= localStorage.getItem("'.$cookieExpiryTime.'") && ('.$this->props['cookie_duration'].' == 2 && '.$this->props['cookie_duration_days'].' > 0 || '.$this->props['cookie_duration_hours'].' > 0 || '.$this->props['cookie_duration_mins'].' > 0))
									{ 
										document.cookie = "'.$cookieName.'=-1; expires=Thu, 18 Dec 1970 12:00:00 UTC";
										localStorage.removeItem("'.$cookieExpiryTime.'");
										clearInterval(Timer);
										
									}
									
							},1000); 
							</script>');
						//	}
						}else{
							$output = sprintf(
						''.$show_main_classes_start_dtp.'
							'.$show_message_info.'
						'.$show_more_info.'
						'.$show_main_classes_end_dtp.'
						'.$page_show_other_content.'
							'.$page_hide_other_content.'
							<script>	
						
						  var Timer = setInterval(function () {
						  var cookieCurrentTime=new Date();
							var cookieCurrentTimeStr = Math.round((parseFloat(cookieCurrentTime.getTime()/1000)),0);
						if(cookieCurrentTimeStr >= localStorage.getItem("'.$cookieExpiryTime.'") && ('.$this->props['cookie_duration'].' == 2 && '.$this->props['cookie_duration_days'].' > 0 || '.$this->props['cookie_duration_hours'].' > 0 || '.$this->props['cookie_duration_mins'].' > 0))
						{ 
							document.cookie = "'.$cookieName.'=-1; expires=Thu, 18 Dec 1970 12:00:00 UTC";
							localStorage.removeItem("'.$cookieExpiryTime.'");
							clearInterval(Timer);
							
						}
						
				},1000); 
				</script>');
						}

					
				}

		}
		return $output;
	}


	public function multi_view_filter_value( $raw_value, $args, $multi_view ) {
		$name = isset( $args['name'] ) ? $args['name'] : '';
		$mode = isset( $args['mode'] ) ? $args['mode'] : '';

		$fields_need_escape = array(
			'title',
		);

		if ( $raw_value && in_array( $name, $fields_need_escape, true ) ) {
			return $this->_esc_attr( $multi_view->get_name_by_mode( $name, $mode ) );
		}

		return $raw_value;
	}


	public static function timer_start_day_of_week($args) {

		$get_date = gmdate("D H:i:s");
		$standard_time = "";

		if($args['timer_type'] == "2" && $args['pattern'] == "weekly"){
			$date = gmdate("Y-m-d H:i:s", strtotime($get_date.$args['pattern_weekly_end_date']));
			$date = date_create($date);
			if(!empty($args['end_time_weekly'])){
				$timeArr = explode(':',$args['end_time_weekly']);
			    date_time_set($date, $timeArr[0], $timeArr[1]);
			    $timeArr= date_format($date, 'Y-m-d H:i:s');
			}else{
				$timeArr= date_format($date, 'Y-m-d H:i:s');
			}
			$standard_time                  = $timeArr;

		}elseif($args['day_of_week_end_2'] && $args['timer_type'] == "2"){
			$date = gmdate("Y-m-d", strtotime($get_date.$args['day_of_week_end_2']));
			$date = date_create($date);
			if(!empty($args['end_time_2'])){	
			$timeArr = explode(':',$args['end_time_2']);
			date_time_set($date, $timeArr[0], $timeArr[1]);
			$timeArr= date_format($date, 'Y-m-d H:i:s');
			}else{
				$timeArr = date_format($date, 'Y-m-d H:i:s');
			}
			$standard_time                  = $timeArr;
		}elseif($args['day_of_week_end_3'] && $args['timer_type'] == "3"){
			$date = gmdate("Y-m-d", strtotime($get_date.$args['day_of_week_end_3']));
			$date = date_create($date);
			if(!empty($args['end_time_3'])){	
			$timeArr = explode(':',$args['end_time_3']);
			date_time_set($date, $timeArr[0], $timeArr[1]);
			$timeArr= date_format($date, 'Y-m-d H:i:s');
			}else{
			$timeArr= date_format($date, 'Y-m-d H:i:s');	
			}
			$standard_time                  = $timeArr;
		  }
		//	echo  $standard_time.".... end date"; 
		
		return $standard_time;
	}

	public static function timer_start_day_of_week_end($args) {

		$get_date = gmdate("D H:i:s");
		$standard_time = "";
		if($args['timer_type'] == "2" && $args['pattern'] == "weekly"){
			$date = gmdate("Y-m-d H:i:s", strtotime($args['pattern_day']));
			$date = date_create($date);
			if(!empty($args['start_time_weekly'])){
				$timeArr = explode(':',$args['start_time_weekly']);
			    date_time_set($date, $timeArr[0], $timeArr[1]);
			    $timeArr= date_format($date, 'Y-m-d H:i:s');
			}else{
				$timeArr= date_format($date, 'Y-m-d H:i:s');
			}
			$standard_time                  = $timeArr;

		}elseif($args['day_of_week_start_2'] && $args['timer_type'] == "2"){
				$date = gmdate("Y-m-d H:i:s", strtotime($args['day_of_week_start_2']));
				$date = date_create($date);
				if(!empty($args['start_date_time_2'])){
					$timeArr = explode(':',$args['start_date_time_2']);
					date_time_set($date, $timeArr[0], $timeArr[1]);
					$timeArr= date_format($date, 'Y-m-d H:i:s');
				}else{
					$timeArr = date_format($date, 'Y-m-d H:i:s');
				}
		        $standard_time                  = $timeArr;
		}elseif($args['day_of_week_start_3'] && $args['timer_type'] == "3"){
			$date = gmdate("Y-m-d H:i:s", strtotime($args['day_of_week_start_3']));
			$date = date_create($date);
			if(!empty($args['date_time_3'])){
				$timeArr = explode(':',$args['date_time_3']);
			    date_time_set($date, $timeArr[0], $timeArr[1]);
			    $timeArr= date_format($date, 'Y-m-d H:i:s');
			}else{
				$timeArr= date_format($date, 'Y-m-d H:i:s');
			}
			$standard_time                  = $timeArr;
		}
			//echo  $args['start_date_time_2']."start date ..."; 
		return $standard_time;
	}

	public static function woo_pro_start_date($args){

	//	global $post;  
		if($args['start_trigger_3']=='woo_product_start_date' && $args['timer_type'] == '3'){
				$woo_pro_sales_start = get_post_meta($args['current_id'], '_sale_price_dates_from', true );	   
		        $date_time_stamp = date('Y-m-d 00:00:00', $woo_pro_sales_start);
		}
		return $date_time_stamp;
		//echo $date_time_stamp."start trigger";
	}

	public static function woo_pro_end_date($args){
		if($args['end_trigger_3']=='woo_product_end_date' && $args['timer_type'] == '3'){
			$woo_pro_sales_end   = get_post_meta( $args['current_id'], '_sale_price_dates_to', true );
			$date_time_stamp = date('Y-m-d 00:00:00', $woo_pro_sales_end);	
		}
	    return $date_time_stamp;
	//	echo $date_time_stamp."End trigger";
	}

	public static function next_upcoming_event($args){
		//if($args['start_trigger_3']=='next_upcoming_event_start_date' && $args['timer_type'] == '3'){
			if(!empty(tribe_events()->where( 'start_date', tribe_context()->get( 'now', 'now' ) )->first())){
				$future_event = tribe_events()->where( 'start_date', tribe_context()->get( 'now', 'now' ) )->first();
				$count_to_date  = $future_event->dates->start_utc->format( 'c' );
			}	
	//	}

	    return $count_to_date;
	}
	
}

new DITP_CountdownTimer;
