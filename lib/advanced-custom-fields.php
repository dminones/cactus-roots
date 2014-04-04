<?php
	/**
	 * Activate Add-ons
	 * Here you can enter your activation codes to unlock Add-ons to use in your theme. 
	 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes.
	 */
	function my_acf_settings( $options )
	{
	    // activate add-ons
	    $options["activation_codes"]["repeater"] = "";
	    $options["activation_codes"]["options_page"] = "";
	    $options["activation_codes"]["flexible_content"] = "";
	    $options["activation_codes"]["gallery"] = "";
	    
	    // setup other options (http://www.advancedcustomfields.com/docs/filters/acf_settings/)
	    
	    return $options;
	    
	}
	add_filter("acf_settings", "my_acf_settings");
	
	/**
	 * Register field groups
	 * The register_field_group function accepts 1 array which holds the relevant data to register a field group
	 * You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
	 * This code must run every time the functions.php file is read
	 */
	if(function_exists("register_field_group"))
	{ 
		register_field_group(array(
		'id' => '533e57436a81e',
		'title' => 'Viaje',
		'fields' => 
		array(
			0 => 
			array(
				'key' => 'field_533e4b63c6e19',
				'label' => 'Flyer',
				'name' => 'flyer',
				'_name' => 'flyer',
				'type' => 'image',
				'order_no' => 0,
				'instructions' => 'Flyer del viaje, el ancho tiene que ser 960px',
				'required' => 0,
				'id' => 'acf-field-flyer',
				'class' => 'image',
				'conditional_logic' => 
				array(
					'status' => 0,
					'rules' => 
					array(
						0 => 
						array(
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'field_group' => 27,
			),
		),
		'location' => 
		array(
			0 => 
			array(
				0 => 
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => 
		array(
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => 
			array(
				0 => 'tags',
			),
		),
		'menu_order' => 0,
	)); 
	}
	