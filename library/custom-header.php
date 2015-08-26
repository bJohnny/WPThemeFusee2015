<?php

// The Header-image.
	$defaults = array(

	'default-image'   => '',
	'width'           => 150,
	'height'          => 80,
	'flex-width'      => false,
	'flex-height'     => false,
	'uploads'         => true,
	'random-default'  => false,
	'header-text'     => false,
	'default-text-color'  => '',
	'wp-head'             => '',
	'admin-head-callback' => '',
	'admin-preview-callback' => '',
);

	add_theme_support( 'custom-header', $defaults );

	?>