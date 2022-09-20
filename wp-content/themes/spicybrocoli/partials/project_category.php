<?php 
include 'specifications.php';
    if($visible == 'show') {
$home_project = get_sub_field('home_project');        
$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');

?>
<?php if($home_project == 'home'){ ?>
<!-- projects Module Start -->
<section  id="<?php echo $section_id;?>" class="module module__project <?php echo $class; ?>" style="<?php echo $style; ?>">
    <div class="container">
        <div class="module__project--head">
            <p class="small-heading"><?php echo $sub_heading;?></p>
            <h2><?php echo $heading;?></h2>
        </div>
        <div class="row">
    <?php
    $post = 'project';
    $taxonomy = 'project_type';
    $terms = get_terms( array(
    'taxonomy' => $taxonomy,
    'hide_empty' => false,
    'order'   => 'DESC',
) ); ?>
   <?php foreach($terms as $term){
        //print_r($term);
        $project_type_image = get_field('project_category_image', $taxonomy.'_'.$term->term_id);
        //print_r($project_type_image);
        $args = array(
            'post_type' => $post,
            'tax_query' => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field'    => 'slug',
                    'terms'    => $term->slug,

                ),
            ));
        $wp_query = new WP_Query($args);
        $count = $wp_query->found_posts;
        //print_r($count);
     ?>
            <div class="col-md-6 module__project--list">
                <div class="module__project--wrapper">
                    <div class="media-container">
                        <img src="<?php echo $project_type_image['url'];?>">
                    </div>
                    <div class="project-content">
                        <h3><?php echo $term->name; ?></h3>
                        <ul class="button__group">
                           <?php while ( $wp_query->have_posts() ) : 
                            $wp_query->the_post(); ?>
                            <li>
                                <a href="<?php echo get_category_link( $cat->term_id ) ?>" class="btn btn-yellow"><?php if( $count == 1 ){ ?> Learn more <?php } else { the_title(); } ?>
                                    <img src="<?php echo get_template_directory_uri();?>/images/arrow.svg">
                                </a>
                            </li>
                            <?php endwhile;
                                wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- projects Module End -->
<?php } else { ?>
    <!-- Project List Module Start -->
<section  id="<?php echo $section_id;?>" class="module module__project-list <?php echo $class; ?>" style="<?php echo $style; ?>">
                <?php
    $post = 'project';
    $taxonomy = 'project_type';
    $terms = get_terms( array(
    'taxonomy' => $taxonomy,
    'hide_empty' => false,
    'order'   => 'ASC',
) ); ?>
   <?php foreach($terms as $term){ 
      $args = array(
            'post_type' => $post,
            'tax_query' => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field'    => 'slug',
                    'terms'    => $term->slug,

                ),
            ));
        $wp_query = new WP_Query($args);
        $count = $wp_query->found_posts;
    ?>
    <div class="container module__project-list--repeater">
        <h3><?php echo $term->name; ?></h3>
        <div class="module__project-list--wrapper">
             <?php while ( $wp_query->have_posts() ) {
                            $wp_query->the_post(); ?>
            <div class="projects-list">
                <div class="media-container">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="content">
                    <a href="<?php the_permalink();?>" class="btn btn-yellow"><?php if( $count == 1 ){ ?> Learn more <?php } else { the_title(); } ?>
                        <img src="<?php echo get_template_directory_uri();?>/images/arrow.svg">
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
</section>
<!-- Project List Module End -->
<?php }
} ?>