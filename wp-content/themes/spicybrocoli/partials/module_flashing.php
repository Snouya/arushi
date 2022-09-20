<?php 
include 'specifications.php';
    if($visible == 'show') {
$about_sub_heading = get_sub_field('about_sub_heading');
$about_heading = get_sub_field('about_heading');
?>
<section id="<?php echo $section_id;?>"  class="module module__two-col <?php echo $class; ?>" style="<?php echo $style; ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2><?php echo $about_sub_heading;?></h2>
			</div>
			<div class="col-md-8">
				<div class="content">
					<?php echo $about_heading;?> 
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>