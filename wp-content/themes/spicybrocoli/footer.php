<?php 
$footer_logo = get_field('footer_logo','option');
$footer_logo_url = get_field('footer_logo_url','option');
$heading_text = get_field('heading_text','option');
$heading_url = get_field('heading_url','option');
$about_section = get_field('about_section','option');
$about_text = get_field('about_text','option');
$project = get_field('project','option');
$project_url = get_field('project_url','option');
$contact = get_field('contact','option');
$address = get_field('address','option');
$gmail = get_field('gmail','option');
$gmail_url = get_field('gmail_url','option');
$phone = get_field('phone','option');
$phone_url = get_field('phone_url','option');
$social_icons = get_field('social_icons','option');
$social_icons_url = get_field('social_icons_url','option');
$all_reserved = get_field('all_reserved','option');
$term = get_field('term','option');
$footer_term_and_condition_url = get_field('footer_term_and_condition_url','option');
$footer_button = get_field('footer_button','option');
$small_logo = get_field('small_logo','option');
$small_image_url = get_field('small_image_url','option');
?>
<!-- Footer Start -->
<footer class="site-footer">
    <div class="site-footer--top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 site-footer--top__left">
                    <?php if(!empty($footer_logo)  && (!empty($footer_logo_url))){ ?>
                    <a href="<?php echo $footer_logo_url;?>">
                        <img src="<?php echo esc_url($footer_logo['url']);?>" alt="<?php echo esc_attr($footer_logo['title']); ?>">
                    </a>
                <?php }?>
                </div>
                <div class="col-md-6 site-footer--top__right">
                    <div class="footer-links-wrapper">
                        <div class="footer-link-block">
                            <p class="head"><a href="<?php echo $heading_url;?>" target=""><?php echo $heading_text;?></a></p>
                        </div>
                        <div class="footer-link-block">
                        <p class="head"><?php echo $about_text;?></p>
                        <?php echo $about_section;?>
                        </div>
                        <div class="footer-link-block">
                            <p class="head"><a href="<?php echo $project_url ;?>" target=""><?php echo $project;?></a></p>
                        </div>
                        <div class="footer-link-block">
                            <p class="head"><?php echo $contact;?></p>
                            <p class="address">
                                <a href="">
                                    <?php echo $address;?>
                                </a>
                            </p>
                            <p class="email">
                                <a href="<?php echo $gmail_url;?>" target="_blank"><?php echo $gmail;?></a>
                            </p>
                            <p class="phone">
                            <a href="<?php echo $phone_url;?>" target="_blank"><?php echo $phone;?></a>   
                            </p>
                            <?php if(!empty($social_icons)){ ?>
                            <p class="social-links">
                                <a href="<?php echo $social_icons_url;?>" target="_blank"><img src="<?php echo esc_url($social_icons['url']); ?>" alt="<?php echo esc_attr($social_icons['title']); ?>"></a>
                            </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer--bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 site-footer--bottom__left">
                    <p><span><?php echo $all_reserved;?></span> | <a href="<?php echo $footer_term_and_condition_url;?>"><?php echo $term;?></a></p>
                </div>
                <?php if(!empty($small_logo)){ ?>
                <div class="col-md-6 site-footer--bottom__right">
                    <p><span><?php echo $footer_button;?></span> <a href="<?php echo $small_image_url;?>" target="_blank"><img src="<?php echo esc_url($small_logo['url']);?>" alt="<?php echo esc_attr($small_logo['title']);?>"></a></p>
                </div>
            <?php }?>
            </div>
        </div>
    </div>
</footer>
</body>
<?php wp_footer();?>