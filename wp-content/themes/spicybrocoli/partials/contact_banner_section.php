<?php 
include 'specifications.php';
    if($visible == 'show') { 
    	$contact_banner_image = get_sub_field('contact_banner_image');
    	$contact_heading = get_sub_field('contact_heading');
    	$contact_content = get_sub_field('contact_content');
    	$contact_form2 = get_sub_field('contact_form2');
    	//print_r($contact_banner_image);?>
<section  id="<?php echo $section_id;?>"  class="module module__form-image <?php echo $class; ?>" style="<?php echo $style; ?>">
	<div class="media-container">
		<?php if(!empty($contact_banner_image)){?>
		<img src="<?php echo esc_url($contact_banner_image['url']); ?>" alt="<?php echo esc_attr($contact_banner_image['title']);?>">
		<div class="overlay"></div>
	<?php } ?>
	</div>

	<div class="container">
		<div class="contact-form">
			<div class="form-wrapper">
				<h2><?php echo $contact_heading;?></h2>
				<p><?php echo $contact_content ;?></p>
				<?php echo $contact_form2;?>
			</div>
		</div>
	</div>
</section>
<?php }?>