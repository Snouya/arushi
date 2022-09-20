<?php 
include 'specifications.php';
    if($visible == 'show') { 
    	$head_heading = get_sub_field('head_heading');
    	$location_icons_image = get_sub_field('location_icons_image');
    	$location_text = get_sub_field('location_text');
    	$email_image_ = get_sub_field('email_image_');
    	$email_text = get_sub_field('email_text');
    	$email_url = get_sub_field('email_url');
    	$contact_map = get_sub_field('contact_map');
    	//print_r($contact_map);
    	//print_r($email_image_);

    	//print_r($location_icons_image);
    	?>
<!-- Map Contact Module Start -->
<section  id="<?php echo $section_id;?>" class="module module__contact-map-detail <?php echo $class; ?>" style="<?php echo $style; ?>">
	<div class="container">
		<div class="module__contact-map__inner">
			<h2><?php echo $head_heading;?></h2>
			<div class="address-block">
				<img src="<?php echo esc_url($location_icons_image['url']); ?>" alt="<?php echo esc_attr($location_icons_image['title']);?>">
				<p>
					<?php echo $location_text ;?>
				</p>

			</div>
			<div class="email-box">
				<a href="<?php echo $email_url;?>" target="_blank">
					<img src="<?php echo esc_url($email_image_['url']); ?>" alt="<?php echo esc_attr($email_image_['title']);?>">
					<?php echo $email_text ;?>
				</a>
			</div>
		</div>
		<div class="map-container">
			<?php echo $contact_map; ?>
			
		</div>
	</div>
</section>
<?php }?>