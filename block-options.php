<?php
class HeadwayImageBlockOptions extends HeadwayBlockOptionsAPI {	
	public $tabs = array(
			'settings' => 'Settings'
	);
	public $inputs = array(
			'settings' => array(
			'image-block-image' => array(
				'type' => 'image',
				'name' => 'image-block-image',
				'label' => 'Image',
				'default' => '',
				'tooltip' => 'Upload your image.'
			),
			'image-block-alt' => array(
				'type' => 'text',
				'name' => 'image-block-alt',
				'label' => 'Image Alt',
				'default' => '',
				'tooltip' => 'Add alternate text.'
			),
			'image-block-link' => array(
				'type' => 'text',
				'name' => 'image-block-link',
				'label' => 'Image Link',
				'default' => '',
				'tooltip' => 'URL to link the image to.'
			),
			'image-block-target' => array(
				'type' => 'checkbox',
				'name' => 'image-block-target',
				'label' => 'Open Link in New Window',
				'default' => true,
				'tooltip' => 'Open link in new window?'
			)
		)
	);
}