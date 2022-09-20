<?php
include 'specifications.php';
    if($visible == 'show') {
 $subheading = get_sub_field('subheading');
 $heading = get_sub_field('heading');
 $contact_form = get_sub_field('contact_form');
 $map = get_sub_field('location');
 ?>
<!-- Contact Module Start -->
<section  id="<?php echo $section_id;?>" class="module module__contact <?php echo $class; ?>" style="<?php echo $style; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6 module__contact--content">
                <div class="module__contact--content--wrapper">
                    <?php if (!empty($subheading)) {?>
                    <p class="small-heading"><?php echo $subheading;?></p><?php }?>
                    <?php if (!empty($heading)) { ?>
                    <h2><?php echo $heading;?></h2><?php }?>
                    <div class="form-wrapper">
                        <?php echo $contact_form;?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 module__contact--map">
                <div class="module__contact--map--wrapper">
                    <?php echo $map;?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>
