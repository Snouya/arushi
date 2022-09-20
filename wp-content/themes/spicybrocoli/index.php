<?php /** Index File | The fallback of all files */
get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

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

<?php get_footer(); ?>