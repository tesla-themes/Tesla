<?php

return array(
	'teslawp_main' => array(
		'name' => 'Main Slider',
		'term' => 'slide',
		'term_plural' => 'slides',
		'order' => 'ASC',
		'options' => array(
			'description' => array(
				'type' => 'text',
				'description' => 'Enter description of the slide',
				'title' => 'Description',
			),
			'image' => array(
				'type' => 'image',
				'description' => 'Image of the slide',
				'title' => 'Image',
				'default' => 'holder.js/960x407/auto'
			),
			'url' => array(
				'type' => 'line',
				'description' => '(Optional) URL applied to the title',
				'title' => 'URL',
				'default' => ''
			)
		),
		'output_default' => 'main',
		'output' => array(
			'main' => array(
				'shortcode' => 'tesla_main_slider',
				'view' => 'views/main_slider_view',
				'shortcode_defaults' => array(
		            'style' => '',
		            'speed' => 4,
		            'pause' => 8,
		            'toggle_caption' => true
				)
			)
		),
		'icon' => '../images/favicon.png'
	),
	'teslawp_clients' => array(
		'name' => 'Clients Slider',
		'term' => 'slide',
		'term_plural' => 'slides',
		'order' => 'ASC',
		'options' => array(
			'image' => array(
				'type' => 'image',
				'description' => 'Image of the slide',
				'title' => 'Image',
				'default' => 'holder.js/144x65/auto'
			),
			'url' => array(
				'type' => 'line',
				'description' => '(Optional) URL for the image',
				'title' => 'URL',
				'default' => ''
			)
		),
		'output_default' => 'main',
		'output' => array(
			'main' => array(
				'shortcode' => 'tesla_clients_slider',
				'view' => 'views/clients_slider_view',
				'shortcode_defaults' => array(
					'title' => __('our clients','teslawp'),
					'style' => 'style'
				)
			)
		),
		'icon' => '../images/favicon.png'
	),
	'teslawp_secondary' => array(
		'name' => 'Secondary Slider',
		'term' => 'slide',
		'term_plural' => 'slides',
		'order' => 'ASC',
		'options' => array(
			'image' => array(
				'type' => 'image',
				'description' => 'Image of the slide',
				'title' => 'Image',
				'default' => 'holder.js/682x330/auto'
			)
		),
		'output_default' => 'main',
		'output' => array(
			'main' => array(
				'shortcode' => 'tesla_secondary_slider',
				'view' => 'views/secondary_slider_view',
				'shortcode_defaults' => array(
		            'style' => '',
		            'speed' => 4,
		            'pause' => 8
				)
			)
		),
		'icon' => '../images/favicon.png'
	),
	'teslawp_portfolio' => array(
		'name' => 'Portfolio',
		'term' => 'portfolio item',
		'term_plural' => 'portfolio items',
		'has_single' => true,
		'order' => 'DESC',
		'options' => array(
			'small_description' => array(
				'type' => 'text',
				'description' => 'Enter the small description of the portfolio item',
				'title' => 'Small Description (shown in the Grid View)',
			),
			'big_description' => array(
				'type' => 'text',
				'description' => 'Enter the big description of the portfolio item',
				'title' => 'Big Description (shown in the List View)',
			),
			'full_description' => array(
				'type' => 'text',
				'description' => 'Enter the full description of the portfolio item',
				'title' => 'Single Project Description (shown on the Single Project Page)',
			),
			'related_description' => array(
				'type' => 'text',
				'description' => 'Enter the description shown in the related slider',
				'title' => 'Related Slider Description (shown on a related Single Project Page in the Related Slider)',
			),
			'small_image' => array(
				'type' => 'image',
				'description' => 'Small image of the portoflio item',
				'title' => 'Small Image (shown in the Grid View)',
				'default' => 'holder.js/240x240/auto'
			),
			'big_image' => array(
				'type' => 'image',
				'description' => 'Big image of the portfolio item',
				'title' => 'Big Image (shown in the List View)',
				'default' => 'holder.js/445x215/auto'
			),
			'related_image' => array(
				'type' => 'image',
				'description' => 'Image for related slider',
				'title' => 'Related Slider Image (shown on a related Single Project Page in the Related Slider)',
				'default' => 'holder.js/193x132/auto'
			),
			'image_slider' => array(
				'type' => 'image',
				'description' => 'Image of the slide',
				'title' => 'Project Image Slider (shown on the Single Project Page)',
				'default' => 'holder.js/627x330/auto',
				'multiple' => true
			),
			'categories' => array(
				'type' => 'line',
				'description' => '(Optional) a list of categories to be displayed instead of the categories used for sorting',
				'title' => 'Categories (shown on the Single Project Page)',
				'default' => ''
			),
			'skills' => array(
				'type' => 'line',
				'description' => 'Enter a list of the skills exhibited/used in the project',
				'title' => 'Skills (shown on the Single Project Page)',
				'default' => ''
			),
			'url' => array(
				'type' => 'line',
				'description' => 'Enter an external URL for the project',
				'title' => 'Project URL (shown on the Single Project Page)',
				'default' => ''
			)
		),
		'output_default' => 'main',
		'output' => array(
			'main' => array(
				'shortcode' => 'tesla_portfolio',
				'view' => 'views/portfolio_view',
				'shortcode_defaults' => array(
					'no_more' => false
				)
			),
			'single' => array(
				'view' => 'views/portfolio_single_view',
				'shortcode_defaults' => array(
					'style' => '',
					'speed' => 4,
					'pause' => 8
				)
			)
		),
		'icon' => '../images/favicon.png'
	),
	'teslawp_testimonial' => array(
		'name' => 'Testimonials',
		'term' => 'testimonial',
		'term_plural' => 'testimonials',
		'order' => 'ASC',
		'options' => array(
			'testimonial' => array(
				'type' => 'text',
				'description' => 'Enter text of the testimonial',
				'title' => 'Testimonial',
			),
			'image' => array(
				'type' => 'image',
				'description' => 'Author\'s image',
				'title' => 'Author\' Image',
				'default' => 'holder.js/126x126/auto'
			),
			'author' => array(
				'type' => 'line',
				'description' => 'Author of the testimonial (Ex. John Doe)',
				'title' => 'Author\'s Name',
				'default' => ''
			),
			'url' => array(
				'type' => 'line',
				'description' => '(Optional) url to the author\'s page',
				'title' => 'Author\'s Url',
				'default' => ''
			)
		),
		'output_default' => 'main',
		'output' => array(
			'main' => array(
				'shortcode' => 'tesla_testimonial',
				'view' => 'views/testimonial_view',
				'shortcode_defaults' => array(
		            'wide' => true,
		            'class' => '',
		            'speed' => 4,
					'pause' => 8
				)
			)
		),
		'icon' => '../images/favicon.png'
	)
);