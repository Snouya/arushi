<?php  get_header(); 
$heading1 = get_field('heading1','option');
$sub_heading = get_field('sub_heading','option');
$content = get_field('content','option');
$short_heading = get_field('short_heading','option');
$short_heading_url = get_field('short_heading_url','option');
?>
<section class="module module__not-found">
	<div class="overlay"></div>
	<div class="container">
		<div class="module__not-found--wrapper">
			<h1><?php echo $heading1;?></h1>
			<div class="content">
				<h3><?php echo $sub_heading;?></h3>
				<p><?php echo $content;?></p>
				<a href="<?php echo $short_heading_url;?>" class="btn btn-yellow"><?php echo $short_heading;?></a>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>