<?php
class HeadwayImageBlock extends HeadwayBlockAPI {
	
	
	public $id = 'image';
	
	public $name = 'Image Block';
	
	public $options_class = 'HeadwayImageBlockOptions';
	
	function content($block) { 
	$alt = parent::get_setting($block, 'image-block-alt', '');
	$image = parent::get_setting($block, 'image-block-image', '');
	$link = parent::get_setting($block, 'image-block-link', '');
	$target_check = parent::get_setting($block, 'image-block-target', true);
	if($target_check == false) { $target = '_self'; }
	else { $target = '_blank'; }
		if(!$link) { ?>
			<img src="<?=$image; ?>" alt="<?=$alt; ?>" />
		<?php }
		else { ?>
			<a href="<?=$link; ?>" target="<?=$target; ?>"><img src="<?=$image; ?>" alt="<?=$alt; ?>" /></a>
		<?php }
	}
}