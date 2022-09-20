<?php 
include 'specifications.php';
    if($visible == 'show') { 
    	$headiing = get_sub_field('headiing');
    	//print_r($headiing);
    	$sub_heading = get_sub_field('sub_heading');
    	$image_circle = get_sub_field('image_circle');
    	//print_r($image_circle);
    	$heading2 = get_sub_field('heading2');
    	$sub__heading2 = get_sub_field('sub__heading2');
    	$button_text = get_sub_field('button_text');
    	$button_textt = get_sub_field('button_textt');
    	$heading3 = get_sub_field('heading3');
    	$sub_heading3 = get_sub_field('sub_heading3');
    	$button_text2 = get_sub_field('button_text2');
    	$button_text22 = get_sub_field('button_text22');
    	$heading4 = get_sub_field('heading4');
    	$subheading4 = get_sub_field('subheading4');
    	?>
<section  id="<?php echo $section_id;?>" class="module module__development <?php echo $class; ?>" style="<?php echo $style; ?>">
	<div class="container">
		<h2><?php echo $headiing;?></h2>
		<div class="copy-top">
			<p><?php echo $sub_heading;?></p>
		</div>
		<div class="status__Wrapper">
			<div class="status__list">
				<div class="media-wrapper">
					<img src="<?php echo esc_url($image_circle['url']); ?>" alt="<?php echo esc_attr($image_circle['title']);?>">
				</div>
				<div class="content-status-wrapper">
					<div class="content">
						<h3><?php echo $heading2 ;?></h3>
						<p><?php echo $sub__heading2;?></p>
					</div>
				</div>
			</div>
			<div class="status__list">
				<div class="media-wrapper">
					<div class="estimate-date">
						<p><?php echo $button_text;?></p>
						<p class="bold-text"><?php echo $button_textt;?></p>
					</div>
				</div>
				<div class="content-status-wrapper">
					<div class="content">
						<h3><?php echo $heading3;?></h3>
						<p><?php echo $sub_heading3;?></p>
					</div>
				</div>
			</div>
			<div class="status__list">
				<div class="media-wrapper">
					<div class="estimate-date">
						<p><?php echo $button_text2;?></p>
						<p class="bold-text"><?php echo $button_text22;?></p>
					</div>
				</div>
				<div class="content-status-wrapper">
					<div class="content">
						<h3><?php echo $heading4;?></h3>
						<p><?php echo $subheading4;?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Development Module End -->
<?php } ?>