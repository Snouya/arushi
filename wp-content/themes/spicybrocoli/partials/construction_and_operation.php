<?php 
include 'specifications.php';
    if($visible == 'show') {
    $heading = get_sub_field('heading');
    $content_ = get_sub_field('content_');
    $cons_image1 = get_sub_field('cons_image1');
    $cons_image2 =  get_sub_field('cons_image2');
    $cons_image3 = get_sub_field('cons_image3');
    //print_r($cons_image2 );
    	?>
<!-- Construction And Operation Module Start -->
<section  id="<?php echo $section_id;?>" class="module module__construction <?php echo $class; ?>"  style="<?php echo $style; ?>">
	<div class="container">
		<h2><?php echo $heading;?></h2>
		<div class="module__construction--wrapper">
			<div class="module__construction--left">
				<div class="content">
					<?php echo $content_;?>
				</div>
			</div>
			<div class="module__construction--right">
				<div class="module__construction--media">
					<div class="image-wrapper">
						<img src="<?php echo esc_url($cons_image1['url']); ?>" alt="<?php echo esc_attr($cons_image1['title']);?>">
					</div>
					<div class="image-wrapper">
						<img src="<?php echo esc_url($cons_image2['url']); ?>" alt="<?php echo esc_attr($cons_image2['title']);?>">
					</div>
					<div class="image-wrapper">
						<img src="<?php echo esc_url($cons_image3['url']); ?>" alt="<?php echo esc_attr($cons_image3['title']);?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Construction And Operation Module End -->
<?php } ?>