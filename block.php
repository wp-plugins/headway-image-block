<?php
class HeadwayImageBlock extends HeadwayBlockAPI {
	
	
	public $id = 'image';
	
	public $name = 'Image Block';
	
	public $options_class = 'HeadwayImageBlockOptions';
	
	function content($block) { 
	$block_width = HeadwayBlocksData::get_block_width($block);
	$block_height = HeadwayBlocksData::get_block_height($block);
	$resize = parent::get_setting($block, 'image-block-resize', false);
	$alt = parent::get_setting($block, 'image-block-alt', '');
	$image = parent::get_setting($block, 'image-block-image', '');
	$link = parent::get_setting($block, 'image-block-link', '');
	$target_check = parent::get_setting($block, 'image-block-target', true);
	if($target_check == false) { $target = '_self'; }
	else { $target = '_blank'; }
		if(!$link && !$resize) { ?>
			<img src="<?=$image; ?>" alt="<?=$alt; ?>" />
		<?php }
		elseif(!$link) { ?>
			<img src="<?=$image; ?>" alt="<?=$alt; ?>" height="<?=$block_height; ?>" width="<?=$block_width; ?>" />
		<?php }
		elseif($link && !$resize) { ?>
			<a href="<?=$link; ?>" target="<?=$target; ?>"><img src="<?=$image; ?>" alt="<?=$alt; ?>" /></a>
		<?php }
		else { ?>
			<a href="<?=$link; ?>" target="<?=$target; ?>"><img src="<?=$image; ?>" alt="<?=$alt; ?>" height="<?=$block_height; ?>" width=<?=$block_width; ?> /></a>
		<?php }
	}
}