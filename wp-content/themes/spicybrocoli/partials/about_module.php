<?php 
include 'specifications.php';
	//if($visible == 'show') {
	$about_image = get_sub_field('about_image');
	 //print_r($about_image);
	$watermark_image = get_sub_field('watermark_image');
	//print_r($watermark_image);
	$subheading = get_sub_field('subheading');
	$heading = get_sub_field('heading');
	$content = get_sub_field('content');
	$button_text = get_sub_field('button_text');
	$button_url = get_sub_field('button_url');
    ?>

<!-- About Module Start -->
<section class="module module__about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 module__about--left">
                <div class="media-wrapper">
                    <?php if(!empty($about_image)){?>
                    <div class="media-container">
                        <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['title']); ?>"> <?php }?>
                        <?php if(!empty($watermark_image)){?>
                        <img class="watermark" src="<?php echo esc_url($watermark_image['url']); ?>" alt="<?php echo esc_attr($watermark_image['title']); ?>"><?php }?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 module__about--right">
                <div class="content-wrapper">
                    <p class="small-heading"><?php echo $subheading ;?></p>
                    <h2><?php echo $heading;?></h2>
                    <?php echo $content;?>
                    <?php if (!empty($button_text) && (!empty($button_url))) {?>
                    <a href="<?php echo $button_url;?>" class="btn btn-black" target=""><?php echo $button_text;?></a> <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Module End -->
<?php //} ?>