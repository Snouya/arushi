<?php 
include 'specifications.php';
    if($visible == 'show') { 
    $heading = get_sub_field('heading');
    $sub_heading = get_sub_field('sub_heading');
    $content = get_sub_field('content');
    $heading2 = get_sub_field('heading2');
    $content2 = get_sub_field('content2');
    $icons_image1 = get_sub_field('icons_image1');
    $icons_content = get_sub_field('icons_content');
    $icons_image2 = get_sub_field('icons_image2'); 
    $icons_content2 = get_sub_field('icons_content2');
    $icons_image3 = get_sub_field('icons_image3');
    $icons_content3 = get_sub_field('icons_content3');
    $icons_image4 = get_sub_field('icons_image4');
    $icons_content4 = get_sub_field('icons_content4');
    $take_care = get_sub_field('take_care');
    $content_take = get_sub_field('content_take');
    $next_fact = get_sub_field('next_fact');
    //print_r($next_fact);
    $next_fact_url = get_sub_field('next_fact_url');
    $fact_sheet = get_sub_field('fact_sheet');
    //print_r($fact_sheet);
    $content3 = get_sub_field('content3');
    $content4 = get_sub_field('content4');
    $image576 = get_sub_field('image576');
    //print_r($image576);
    ?>
<!-- Community Module Start -->
<section  id="<?php echo $section_id;?>" class="module module__community <?php echo $class; ?>"  style="<?php echo $style; ?>">
	<div class="container">
		<h2><?php echo $heading;?></h2>
		<div class="copy-wrapper">
			<h4><?php echo $sub_heading;?></h4>
			<?php echo $content;?>
		</div>
		<div class="copy-wrapper">
			<h4><?php echo $heading2;?></h4>
			<p><?php echo $content2;?></p>
			<ul>
				<li>
					<img src="<?php echo esc_url($icons_image1['url']); ?>" alt="<?php echo esc_attr($icons_image1['title']);?>"/>
                    <?php echo $icons_content;?>
				</li>
				<li>
					<img src="<?php echo esc_url($icons_image2['url']);?>" alt="<?php echo esc_attr($icons_image2['title']);?>"/>
					<?php echo $icons_content2;?>
				</li>
				<li>
					<img src="<?php echo esc_url($icons_image3['url']);?>" alt="<?php echo esc_attr($icons_image3['title']);?>"/>
					<?php echo $icons_content3;?>
				</li>
				<li>
					<img src="<?php echo esc_url($icons_image4['url']);?>" alt="<?php echo esc_attr($icons_image4['title']);?>"/>
					<?php echo $icons_content4;?>
				</li>
			</ul>
			<p>
				<a href="<?php echo $content_take;?>"><?php echo $take_care;?></a>
			</p>
			<p><?php echo $next_fact;?><a href="<?php echo $next_fact_url;?>"><?php echo $fact_sheet;?></a></p>
			<p><?php echo $content3;?></p>
		</div>
		<div class="form-image">
			<div class="form">
				<div class="form-inner">
					<?php echo $content4;?>
				</div>
			</div>
			<div class="image">
				<div class="media-wrapper">
					<div class="media-container">
						<img src="<?php echo esc_url($image576['url']);?>" alt="<?php echo esc_attr($image576['title']);?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Community Module End -->
<?php } ?>