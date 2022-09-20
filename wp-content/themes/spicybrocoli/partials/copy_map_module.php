<?php 
include 'specifications.php';
    if($visible == 'show') {
    $back_image_url = get_sub_field('back_image_url');
    $back_image = get_sub_field('back_image');
    //print_r($back_image);
    $back_text = get_sub_field('back_text');
    $sub_heading = get_sub_field('sub_heading');
    $content = get_sub_field('content');
   	$google_map = get_sub_field('google_map');
?>
<!-- Copy Map Module Start-->
<section  id="<?php echo $section_id;?>" class="module module__about module__project-detail <?php echo $class; ?>" style="<?php echo $style; ?>">
	<div class="container">
		<a class="small-heading" href="<?php echo $back_image_url;?>">
			<img src="<?php echo esc_url($back_image['url']); ?>" alt="<?php echo esc_attr($back_image['title']);?>">
        <?php echo $back_text;?></a>
		<div class="row">
			<div class="col-md-6 module__about--right">
				<div class="content-wrapper">
					<h2><?php echo $sub_heading;?></h2>
					<?php echo $content;?>
				</div>
			</div>
			<div class="col-md-6 module__about--left">
				<div class="media-wrapper">
					<div class="media-container">
						<?php echo $google_map;?>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Copy Map Module End -->
<?php }?>