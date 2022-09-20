<?php 
include 'specifications.php';
    if($visible == 'show') {
 $video_section = get_sub_field('video_section');       
$hero_image = get_sub_field('hero_image');
//print_r($hero_image);
$video = get_sub_field('video_');
$heading = get_sub_field('heading');
$content = get_sub_field('content');
$arrow_down_image = get_sub_field('arrow_down_image');
//print_r($arrow_down_image);
$arrow_down_url = get_sub_field('arrow_down_url');
?>
<?php 
if($video_section == 'video'){
?>
<!-- Homepage Hero Start -->
<section  id="<?php echo $section_id;?>" class="module module__homepage-hero <?php echo $class; ?>" style="<?php echo $style; ?>">
    <div class="video-wrapper">
        <?php if(!empty($hero_image )){?>
        <video loop autoplay playsinline muted preload="auto" poster="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['title']);?>">
          <source src="<?php echo $video; ?>">
        </video>
    <?php }?>
    </div>
    <div class="container">
        <div class="module__homepage-hero--wrapper">
            <h1><?php echo $heading;?></h1>
            <p><?php echo $content;?></p>
            <?php if(!empty($arrow_down_image)){?>
            <a data-section-scroll="" href="<?php echo $arrow_down_url;?>" class="arrow-down">
                <img src="<?php echo esc_url($arrow_down_image['url']); ?>" alt="<?php echo esc_attr($arrow_down_image['title']); ?>"  >
            </a>
        <?php }?>
        </div>
    </div>
</section>
<!-- Homepage Hero End -->
<?php } else { ?>
    <!-- Inner Hero Start -->
<section class="module module__inner-hero">
    <div class="image-wrapper">
        <img src="<?php echo esc_url($hero_image['url']); ?>">
    </div>
    <div class="container">
        <h1><?php echo $heading;?></h1>
    </div>
</section>
<!-- Innner Hero End -->
<?php }
 } ?>
