<?php 
include 'specifications.php';
    if($visible == 'show') {
$sub_heading = get_sub_field('sub_heading');
$heading = get_sub_field('heading');
?>
<!-- Our Team module Start -->

<section  id="<?php echo $section_id;?>" class="module module__team <?php echo $class; ?>" style="<?php echo $style; ?>">
	<div class="container">
		<div class="row">
			<div class="col-12 module__team--head text-center">
				<p class="small-heading"><?php echo $sub_heading;?></p>
				<h2><?php echo $heading;?></h2>
			</div>
		</div>
		<div class="module__team-members">
		 <?php  query_posts(array(
         'post_type' => 'team',
         'post_status' => 'publish',
         'posts_per_page' => '-1'
          )); 
		while (have_posts()) { the_post();

			$headings = get_field('headings');
			$linkedin_url = get_field('linkedin_url');
            $linkedin_image = get_field('linkedin_image');
            //print_r($linkedin_image );
			?>
			<div class="members">
				<div class="hover-effect">
					<div class="media-container">
						<?php the_post_thumbnail();?>
					</div>
					<div class="member-detail">
						<div class="title">
							<h6><?php the_title(); ?></h6>
							<a href="<?php echo $linkedin_url;?>">
								<img src="<?php echo esc_url($linkedin_image['url']); ?>" alt="<?php echo esc_attr($linkedin_image['title']); ?>">
							</a>
						</div>
						<div class="position-read-more">
							<p class="position"><?php echo $headings;?></p>
							<a class="member" href="javascript:void(0)"  data-toggle="modal" data-target="#myModal">
								read more 
								<svg xmlns="http://www.w3.org/2000/svg" width="15.356" height="15.356" viewBox="0 0 15.356 15.356">
								  <g id="Component_156_1" data-name="Component 156 – 1" transform="translate(1 1)">
								    <path id="Path_1301" data-name="Path 1301" d="M18,7.5V20.856" transform="translate(-11.322 -7.5)" fill="none" stroke="#303133" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
								    <path id="Path_1302" data-name="Path 1302" d="M7.5,18H20.856" transform="translate(-7.5 -11.322)" fill="none" stroke="#303133" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
								  </g>
								</svg>

							</a>
						</div>
					</div>
					<div class="team-bio">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
	<div class="modal-dialog" role="document">

		<div class="modal-content">
			<button class="btn btn-transparent btn-blue close-btn">
				<svg xmlns="http://www.w3.org/2000/svg" width="19.145" height="21.715" viewBox="0 0 19.145 21.715">
				  <path id="Path_1238" data-name="Path 1238" d="M11.151,24.924,16.7,16.453h3.888L13.046,27.221l7.71,10.947H16.917l-5.7-8.62L5.5,38.168H1.611l7.71-10.947L1.775,16.453H5.63Z" transform="translate(-1.611 -16.453)" fill="#303133"/>
				</svg>
			</button>
			<div class="modal-body">
				
				<div class="row m-0">
					<div class="col-md-5 col-12 p-0">
						<div class="media-container">
						</div>	
						<div class="linkedin-block">
							<span>Let’s connect</span>
							<span class="icon"></span>
						</div>										
					</div>
					<div class="col-md-7 col-12 p-0">
						<div class="member-detail"></div>
						<div class="team-bio"></div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<!-- Our Team module End -->
<?php }?>