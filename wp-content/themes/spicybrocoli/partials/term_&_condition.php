<?php 
include 'specifications.php';
    if($visible == 'show') {
    	$heading = get_sub_field('heading');
    	$content = get_sub_field('content');
    	//print_r($content);?>
<section  id="<?php echo $section_id;?>" class="module module__terms <?php echo $class; ?>"  style="<?php echo $style; ?>">
	<div class="container">
		<h2><?php echo $heading;?></h2>
		<div class="module__terms--wrapper">
			<?php echo $content;?>
		</div>
	</div>
</section>
<?php }?>