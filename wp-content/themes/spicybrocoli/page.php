<?php  get_header(); ?>
<?php 
$pageid = get_the_ID();
// check if the flexible content field has rows of data
if ( have_rows( 'section', $pageid ) ) :
    // loop through the selected ACF layouts and display the matching partial
    while ( have_rows( 'section', $pageid ) ) : the_row();
        get_template_part( 'partials/' . get_row_layout() ); 
    endwhile;
else: 
    while ( have_posts() ) : the_post(); ?>
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content( ); ?>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
<!-- Contact Module End -->